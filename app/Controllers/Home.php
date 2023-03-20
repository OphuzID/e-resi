<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Home_Model;
use Config\Services;

class Home extends BaseController
{
	public function index()
	{
		return view('Home');
	}
	public function ajax_list()
	{
			//whether ip is from share internet
			if (!empty($_SERVER['HTTP_CLIENT_IP']))   
			{
				$ip_address = $_SERVER['HTTP_CLIENT_IP'];
			}
			//whether ip is from proxy
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
			{
				$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			//whether ip is from remote address
			else
			{
				$ip_address = $_SERVER['REMOTE_ADDR'];
			}

			if($ip_address=="192.168.1.43"){
				$ButtonDelete = '<a href="#" data-toggle="modal" data-target=".mDeleteNotif"class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>';
			}else{
				$ButtonDelete ='';
			};


		$request = Services::request();
		$Model_Home = new Home_Model($request);
		if($request->getMethod(true)=='POST'){
			$list 	= $Model_Home->get_datatables();
			$data 	= [];
			$no 	= $request->getPost('start');

			foreach ($list as $dtReceipts) {
				if ($dtReceipts->TGL_RESI == "0000-00-00"){
					$Tgl_Resi = ""; 
				}else{
					$Tgl_Resi = $dtReceipts->TGL_RESI;
				}	

				if($dtReceipts->STATUS=="DELIVERED"){
					$ButtonUpdate = '<a href="#" class="disabled btn btn-outline-success btn-sm"><i class="fas fa-check-circle"></i></a>';
				}else{
					$ButtonUpdate = '<a href="#" data-toggle="modal" methodType="'.$dtReceipts->NOMOR_RESI.'" data-target="" class="btnReceiptsUpdate btn btn-outline-success btn-sm"><i class="fas fa-redo-alt"></i></a>';
				}
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dtReceipts->INDEX_RESI;
				$row[] = $dtReceipts->NOMOR_RESI;
				$row[] = $Tgl_Resi;
				$row[] = $dtReceipts->NOMOR_SO;
				$row[] = $dtReceipts->TUJUAN;
				$row[] = $dtReceipts->INSTANSI;
				$row[] = $dtReceipts->DITUJUKAN;
				$row[] = $dtReceipts->PENERIMA;
				$row[] = $dtReceipts->BERAT." Kg";
				$row[] = $dtReceipts->STATUS;
				$row[] ='<div class="btn-group"> 	
						<a href="#" data-toggle="modal" methodType="'.$dtReceipts->NOMOR_RESI.'" data-target=".mInfoNotif" class="InfoNotif btn btn-outline-primary btn-sm"><i class="fas fa-info-circle"></i></a>  
						'.$ButtonUpdate.'
						'.$ButtonDelete.'
						</div>
						<a href="#" data-toggle="modal" data-target=".mAddReceipts" class="btnEditInfo btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a>';
				$data[] = $row;
			}
			$output = [
				"draw" => $request->getPost('draw'),
				"recordsTotal" => $Model_Home->count_all(),
				"recordsFiltered" => $Model_Home->count_filtered(),
				"data" => $data,
			];
			//output to json format
			//$output[csrf_token()]=csrf_hash();
			echo json_encode($output);
		}
	}
	public function send_save(){
		$request = Services::request();
		$Model_Home = new Home_Model($request);
		if($request->getMethod(true)=='POST'){
			$data = array( 
				'NOMOR_RESI'  	=> $this->request->getPost('txtReceiptsNumber'),
				'NOMOR_SO'  	=> $this->request->getPost('txtNumberSO'),
				'INSTANSI'  	=> $this->request->getPost('txtInstansi')
			);
			$Model_Home->saveReceiptsNumber($data);
			echo json_encode(1);
		}

	}
	public function send_read()
    {
        $request = Services::request();
		$Model_Home = new Home_Model($request);

		$iINDEX= $this->request->getPost('iINDEX');
        $data = $Model_Home->getReceiptData($iINDEX)->getRow();

		echo json_encode($data);
	}
	
	public function send_delete()
    {
        $request = Services::request();
		$Model_Home = new Home_Model($request);

		$iINDEX= $this->request->getPost('iINDEX');
        $Model_Home->deleteReceiptsNumber($iINDEX);
		echo json_encode(array("status" => TRUE));
	}
	public function send_update()
    {
        $request = Services::request();
		$Model_Home = new Home_Model($request);

		$iINDEX		= $this->request->getPost('iINDEX');
		$Tgl_Resi 	= $this->request->getPost('Tgl_Resi');
		$Tujuan 	= $this->request->getPost('Tujuan');
		$Berat 		= $this->request->getPost('Berat');
		$Status 	= $this->request->getPost('Status');
		$Penerima 	= $this->request->getPost('Penerima');
		$Ditujukan 	= $this->request->getPost('Ditujukan');
		if($request->getMethod(true)=='POST'){
		$data = array(
			'TGL_RESI' => $Tgl_Resi,
			'TUJUAN' => $Tujuan,
			'BERAT' => $Berat,
			'STATUS' => $Status,
			'PENERIMA' => $Penerima,
			'DITUJUKAN' => $Ditujukan,
		);
	 
		$Model_Home->updateReceiptsNumber($data,$iINDEX);

		echo json_encode(array("status" => TRUE));
		}
	}
	public function send_update_info()
    {
		$request = Services::request();
		$Model_Home = new Home_Model($request);

		$iINDEX	= $this->request->getPost('txtReceiptsNumber');

		if($request->getMethod(true)=='POST'){
			$data = array( 
				'NOMOR_RESI'  	=> $this->request->getPost('txtReceiptsNumber'),
				'NOMOR_SO'  	=> $this->request->getPost('txtNumberSO'),
				'INSTANSI'  	=> $this->request->getPost('txtInstansi')
			);
		$Model_Home->updateReceiptsNumber($data,$iINDEX);

		echo json_encode(1);
		}
	}
	public function send_check(){
		$request = Services::request();
		$Model_Home = new Home_Model($request);
		$NOMOR_RESI	= $this->request->getPost('NOMOR_RESI');
		$data = $Model_Home->checkReceiptsNumber($NOMOR_RESI)->getRow();
		echo json_encode($data);
	}
	//--------------------------------------------------------------------

}
