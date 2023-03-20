<?php 
namespace App\Models;
use Codeigniter\HTTP\RequestInterface;
use CodeIgniter\Model;
 
class Home_Model extends Model
{
    protected $table 		    = 'tbx_delivery_transactions';

	protected $column_order     = array(null,'INDEX_RESI','NOMOR_RESI','TGL_RESI','NOMOR_SO','TUJUAN','INSTANSI','DITUJUKAN','PENERIMA','BERAT','STATUS',null); //set column field database for datatable orderable
    protected $column_search    = array('INDEX_RESI','NOMOR_RESI','TGL_RESI','NOMOR_SO','TUJUAN','INSTANSI','DITUJUKAN','PENERIMA','BERAT','STATUS'); //set column field database for datatable searchable 
    protected $order            = array('TGL_RESI' => 'DESC'); // default order
    
    protected $request;
    protected $db;
    protected $dt;

    function __construct(RequestInterface $request) {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);

        //$db = \Config\Database::connect();
        //$builder = $db->table($this->table);
    }
    private function _get_datatables_query()
    {

		
        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            if($this->request->getPost('search')['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->dt->groupStart(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->dt->like($item, $this->request->getPost('search')['value']);
                }
                else
                {
                    $this->dt->orLike($item, $this->request->getPost('search')['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->dt->groupEnd(); //close bracket
            }
            $i++;
        }
         
        if($this->request->getPost('order')) // here order processing
        {
            $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($this->request->getPost('length') != -1)
        $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->dt->get();
        return $query->getResult();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        return $this->dt->countAllResults();
    }
 
    public function count_all()
    {
        $table_storage = $this->db->table($this->table);
        return $table_storage->countAllResults();
    }
    public function saveReceiptsNumber($data){
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function getReceiptData($iINDEX = false)
    {
        if($iINDEX === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['INDEX_RESI' => $iINDEX]);
        }   
    }
    public function deleteReceiptsNumber($iINDEX)
    {
        $query = $this->db->table($this->table)->delete(array('INDEX_RESI' => $iINDEX));
        return $query;
    } 
    public function updateReceiptsNumber($data, $iINDEX)
    {
        $query = $this->db->table($this->table)->update($data, array('NOMOR_RESI' => $iINDEX));
        return $query;
    } 
    public function checkReceiptsNumber($NOMOR_RESI)
    {
       // $query = $this->db->table($this->table)->where('NOMOR_RESI', $NOMOR_RESI);

        if($NOMOR_RESI === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['NOMOR_RESI' => $NOMOR_RESI]);
        }   
       // return $query;
    } 
}
