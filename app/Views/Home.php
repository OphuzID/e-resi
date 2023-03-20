<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FAM Tracking Resi</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/Favicon.png');?>"/>
	<!-- CSS only -->
	<link rel="stylesheet" href="<?php echo base_url('assets/index.css');?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css');?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/FontAwesome/css/all.min.css');?>" crossorigin="anonymous">

	
	<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/DataTables/css/dataTables.bootstrap4.min.css');?>" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/DataTables/css/buttons.dataTables.min.css');?>" crossorigin="anonymous">



	
	
	
	

	<!-- STYLES -->
    
	<style {csp-style-nonce}>
	
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		th { font-size: 12px; }
		td { font-size: 12px; }
		div.dataTables_wrapper div.dataTables_info {padding-top: 0px;}
 		.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
		padding: 4px 4px 4px 4px;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 12px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .1rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 30px;
			padding: .1rem 2.8rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 90%;
			/*padding: 2.5rem 1.75rem 3.5rem 1.75rem;*/
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			/*margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;*/
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
			margin-top:-40px;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
			
		}
		
	</style>
</head>
<body>
<!-- <div id="load-screen"></div>-->
<div id="load-screen" class="d-flex justify-content-center">
  <div class="spinner-border spinner-border-sm text-info" style="width: 8rem; height: 8rem;" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<style>
#load-screen {

    /*background: url(<?php //echo base_url('assets/loading5.gif') ?>) no-repeat center center #fff;*/
    /*position: fixed;*/
	position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;
}
</style>
<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="menu">
		<ul>
			<li class="logo"><a href="/"><img height="35px" style="margin-top:-6px;margin-left:10px;" title="CodeIgniter Logo" src="<?php echo base_url('assets/Logo.png');?>"><i style="margin-left:10px;" class="fas fa-times"></i>
			</a></li>
			<li class="logo"><img height="20px" style="margin-top:1px;margin-left:-55px;" title="CodeIgniter Logo" src="<?php echo base_url('assets/sicepat.png');?>"> 
			</li>
			<li class="logo"><h5 style="margin-top:1px;margin-left:-55px;">e-Resi <sup>v.1.21.905-160821</sup></h5></li>
			<li class="" style="margin-top:5px;margin-right:50px;">Page rendered in {elapsed_time} seconds</li>
		</ul>                    
	</div>

</header>

<!-- CONTENT -->
<section>
	<p style="clear: both;">
	<div style="float:left;padding-left:5px;" class="form-row col-sm-4">
	<button class="btn btn-success btn-sm" id="AddReceipts"><i class="fas fa-receipt"></i> Tambah Resi</button>&nbsp;
	<button class="btn btn-primary btn-sm" id="ReloadAll"><i class="fas fa-tasks"></i> Reload Data</button>
		<div class="input-group input-group-sm col-md-6">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-calendar"></i></label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option value="">All</option>
			</select>
		</div>
		<!--<div style="width:500px" class="" id="NamaSet"></div>-->
	</div>
	
	</p>
	<table id="WayBillTracker" class="table table-sm table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>#</th>
			<th>IndexResi</th>
			<th>NomorResi</th>
			<th>Tgl Resi</th>
			<th>No. SO</th>
			<th>Tujuan</th>
			<th>Instansi / Up.</th>
			<th>Ditujukan</th>
			<th>Penerima</th>
			<th>Berat</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	</table>

<footer>
  <div class="text-center p-3" style="background-color:white;">
    © 2020-<?php echo date("Y");?> Copyright - Yoga Lesmana
  </div>
  <!-- Copyright -->
</footer>
</section>

<!-- ================================ Modal AddReceipts ================================ -->
<div class="modal mAddReceipts" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	<form action="" method="POST" id="frmReceiptsNumber" class="needs-validation" onsubmit="return validateForm()">
      <div class="modal-header">
        <h5 class="modal-title">Silahkan Inputkan Resi SiCepat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
		<div class="col-auto">
			<label for="validationCustomUsername"><i>No. Receipts</i></label>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-receipt"></i></div>
				</div>
				<input type="text" class="form-control" id="txtReceiptsNumber" type="number" min="12" name="txtReceiptsNumber" placeholder="No. Resi / Receipts Number" required>
				<div class="valid-feedback">
        			Looks good!
      			</div>
				  <p id="demo"></p>
			</div>
		</div>

		<div class="col-auto">
			<label for="validationCustomUsername"><i>No. Sales Order / ID Packet</i></label>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-address-card"></i></div>
				</div>
				<input type="text" class="form-control" id="txtNumberSO" name="txtNumberSO" placeholder="Nomor SO / ID Packet">
			</div>
		</div>


		<div class="col-auto">
			<label for="validationCustomUsername"><i>Instansi</i></label>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-university"></i></div>
				</div>
				<input type="text" class="form-control" id="txtInstansi" name="txtInstansi" placeholder="Instansi">
			</div>
		</div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="btnSend" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<!-- ================================ Modal ReadDelete Receipts ================================ -->
<div class="modal fade bs-example-modal-sm mDeleteNotif" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title"><i class="text-danger fas fa-exclamation-circle"> </i> Delete Receipts Number </h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
		<div class="modal-body">
		<form id="FrmDelReceiptsNumber">
		<center>
		<p>Apakah anda yang akan menghapus data resi ini?<span id="iINDEX" style="opacity: 0;"></span><br>
		<b>NOMOR RESI / <i>RECEIPTS NUMBER</i> :</b>
		<b><h2><span class="_txtReceiptNumber"></span></h2></b></center>
		</p>
		</form>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" id="btnDeleteReceipts" class="btn btn-danger">Delete</button>
		
		</div>
	</div>
	</div>
</div>

<!-- ================================ Modal ReadInfo Receipts ================================ -->


<div class="modal fade bs-example-modal-xl mInfoNotif" tabindex="-1" role="dialog" aria-labelledby="myModalLarge">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title"><i class="text-primary fas fa-info-circle"> </i> Info Tracking - <span class="_txtReceiptNumber"></span> </h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<table id="tblStatus" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
		<thead>
			<tr>
				<th>No Resi</th>
				<th>Layanan</th>
				<th>Tujuan</th>
				<th>Penerima</th>
				<th>Tgl Diterima</th>
				<th>Penerima Paket</th>
				<th>Status</th>
			</tr>
		</thead>
		</table>


	<!-- CARD -->
	<div class="card-deck mb-2">
		
		<!-- TRACKING -->
		<div class="card mb-4 shadow-sm">
		<div class="card-header">
			<h4 class="my-0 font-weight-normal">History</h4>
		</div>
			<div class="card-body">
			<!-- Isi Content -->
			<div style="float:right;">
			
			<div class="row">
					<div class="col-sm-12">
					<b>Tanggal Pengiriman</b>
					<p class="tTanggalPengiriman"></p>
					</div>
					<div class="col-sm-6">
					<b>Asal</b>
					<p class="tAsal">
					</div>
					<div class="col-sm-6">
					<b>Tujuan</b>
					<p class="tTujuan"></p>
					</div>
			</div>
			<div class="row">
					
			<div class="col-sm-6">
					<b> Pengiriman</b>
					<p class="tPengirim"></p>
</div>
					<div class="col-sm-6">
					<b>Penerima</b>
					<p class="tPenerima"></p>
</div>
			</div>
			</div>
			<section style="float:left;">
				<div style="font-size:0.8em" class="track-awb-card w-100">
					<ul class="history-awb-timeline">
					</ul>
				</div>
			</section>
			</div>
		</div>
		<!-- TRACKING -->

	</div>
		
	
	</div>
	<div class="modal-footer">
		<div style="float:left;color:#737373;font-style:italic;line-height: 34px;"><strong>Connection :</strong> - <span class="txtConnectionStatus">Not Connect</span></div>
		<button type="button" class="btn btn-default btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
	</div>



</div>

<p></p>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->


<!-- SCRIPTS -->
<!-- JS, Popper.js, and jQuery -->
<!-- Booststrap v4.5.0 -->
<script src="<?php echo base_url('assets/jQuery/jquery-3.5.1.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>" crossorigin="anonymous"></script>

<!-- DataTables v1.10.21 -->
<script src="<?php echo base_url('assets/DataTables/DataTables/js/jquery.dataTables.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/datatables.min.js');?>" crossorigin="anonymous"></script>


<script src="<?php echo base_url('assets/DataTables/DataTables/js/dataTables.buttons.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/buttons.bootstrap4.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/New/jszip.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/New/pdfmake.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/New/vfs_fonts.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/New/buttons.html5.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/DataTables/DataTables/js/New/buttons.print.min.js');?>" crossorigin="anonymous"></script>



<!-- Font Awesomw v5.14.0 -->
<script src="<?php echo base_url('assets/FontAwesome/js/all.min.js');?>" crossorigin="anonymous"></script>

<script>

$(document).ready(function() {
	$('#load-screen').delay(100).fadeOut(function(){$(this).remove()});
	var table;
	var tRx;
	var table 	= $("#WayBillTracker").DataTable({ 
		"processing": true, //Feature control the processing indicator.
		"serverSide": false, //Feature control DataTables' server-side processing mode.
		"order": [], //Initial no order.
		"pageLength": 15,
		"autoWidth": false,
		dom: 'Bfrtip',
		buttons: [
				{
					extend: 'excel',
					text: '<i class="fas fa-file-excel"></i> Export to Excel',
					className: 'btn btn-success btn-sm',    
				}
        ],
		responsive: true, //,
		lengthChange: true,
		
		
        /*buttons: [ 'copy', 'csv','excel', 'pdf', 'print'],*/
		"columnDefs": [
            {
                "targets": [ 1 ],
                "visible": false,
                "searchable": false
            },
			{"targets": [ 7 ],
                "visible": false,
                "searchable": true
            }
		],
		// Load data for the table's content from an Ajax source
		"ajax": {
			"url": "<?php echo site_url('home/ajax_list')?>",
			"type": "POST",
		},
		// -- snip -- //
		initComplete: function () {
			this.api().columns(3).every(function () {
				var column = this;
				var selectDropdown = $('#inputGroupSelect01')
						//.appendTo( $(column.footer()).empty() )
						.on('change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
							column
								.search( val  )
								.draw();
						});

				var dates = [] ;
				column.data().unique().sort().each(function (d, j) {
					var date = new Date(d), year = date.getFullYear();
					var d = new Date();
					if (dates.indexOf(year) < 0) {
						dates.push(year);
						//selectDropdown.append('<option value="' + year + '">' + year + '</option>');
						selectDropdown.append(new Option(year,year));
						$('option[value=' + d.getFullYear()+ ']').attr('selected',true);
						selectDropdown.trigger( "change" );
					}
					
				});
				
			});
		}
	// -- snip -- //
	});
	//$("#ExportReporttoExcel").on("click",function(){
	//	table.button('.buttons-csv').triger();
	//})
	table.buttons().container().appendTo('#WayBillTracker_wrapper .col-md-6:eq(0)');
	function reload_table(){ table.ajax.reload(null,false); }
	function ClearTablesTracking(){ $('#tblStatus').DataTable().clear().draw();	}
	$('#btnReloadReceiptrs').on('click', function(){ reload_table(); });

	// Show Modal Add Receipts Number 
	$('#AddReceipts').on('click', function(){
		$('#frmReceiptsNumber')[0].reset();
		$('.mAddReceipts').modal('show'); 
		$("#btnSend").text('Save');
		$('#txtReceiptsNumber').prop("readonly", false);
		//$('#btnSend').prop('disabled', true);
	});

	// Save & Update Receipts Number
	$('#btnSend').on('click', function(e){
		var Syntax = $("#btnSend").text();
		var inpObj = document.getElementById("txtReceiptsNumber");
		if (!inpObj.checkValidity()) {
			//document.getElementById("demo").innerHTML = inpObj.validationMessage;
		} else {
		if(Syntax =='Save'){
			 // You need to use standard javascript object here
			var form = $('frmReceiptsNumber')[0];
			$.ajax({
				url: "<?php echo site_url('home/send_save')?>",   
				type: "POST",    
				data: new FormData($("#frmReceiptsNumber")[0]),
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,	
				dataType: "JSON",					
				success: function(data) {
					if(data==1){
						$('#frmReceiptsNumber')[0].reset();
						$(".mAddReceipts").modal('hide');
						reload_table();
					}else{
						/*$(".alertDataUpload").append(data.error);
						$(".alertDataUpload").attr('class','alertDataUpload pull-left text-danger');
						$(".alertDataUpload, p").attr('for','alertInfo');*/
					}
				}
			});
		}else if(Syntax =='Update'){
			$.ajax({
				url: "<?php echo site_url('home/send_update_info')?>",   
				type: "POST",    
				data: new FormData($("#frmReceiptsNumber")[0]),
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,	
				dataType: "JSON",					
				success: function(data) {
					if(data==1){
						$('#frmReceiptsNumber')[0].reset();
						$(".mAddReceipts").modal('hide');
						reload_table();
					}
				}
				});
		}
		}
	});

	// Read Receipts Number
	$('#WayBillTracker tbody').on('click', 'tr', function () {
		var dataID = table.row(this).data();
		$.ajax({
			url : "<?php echo site_url('home/send_read')?>",
			type: "POST",
			data:"iINDEX="+dataID[1],
			dataType: "JSON",
			success: function(data)
			{	
				$('#iINDEX').text(data.INDEX_RESI);
				$('#txtReceiptsNumberIndex').text(data.INDEX_RESI);
				$('._txtReceiptNumber').text(data.NOMOR_RESI);
				$('#txtReceiptsNumber').val(data.NOMOR_RESI);
				$('#txtNumberSO').val(data.NOMOR_SO);
				$('#txtInstansi').val(data.INSTANSI);
			}
		});
	});

	$('#btnDeleteReceipts').on('click', function(){
		var iINDEX = $("#iINDEX").text();
			$.ajax({
				url: "<?php echo site_url('home/send_delete')?>", 
				type: "POST",  
				data: "iINDEX="+iINDEX, 
				success: function(data) { 
					$('#FrmDelReceiptsNumber')[0].reset();
					$(".mDeleteNotif").modal('hide');
					reload_table();
				}
			});
	});




    $('#txtReceiptsNumber').on('click keyup change',function(){
		var xCheck = $('#txtReceiptsNumber').val();
		var a = document.getElementById("txtReceiptsNumber").value;
		$.ajax({
			url: "<?php echo site_url('home/send_check')?>", 
			type: "POST",  
			data: {"NOMOR_RESI":xCheck},
			success: function(data) { 
				//alert(data);
				if(data == 'null'){
					$('#btnSend').attr('disabled', false);
				}else{
					$('#btnSend').attr('disabled', true);
				}
			}
		});
	});

	$('#WayBillTracker').on('click', '.InfoNotif', function() { 
		// var IdTracker = $(this).closest('tr').find('td:eq(1)').text();
		var x =  $(this).attr('methodType');
		var tRx = $('#tblStatus').DataTable({
									processing: true,
									retrieve: true,
									paging: false,
									searching: false,
									info:false
								});
		$.ajax({
			
				dataType: 'json',
				url: "https://apitrek.sicepat.com/customer/waybill",
				type: "GET",
				headers: { 'api-key': 'd7b263cfe0bce90575698b556d1022ac' },
				data:{"api-key":"d7b263cfe0bce90575698b556d1022ac","waybill":x},
				beforeSend: function(){
					ClearTablesTracking();
					$("#load-screen").show();					
				},
				complete: function(){
					$("#load-screen").hide();
				},
				success: function(data)
				{	

					if(data.sicepat.status.code!='200'){
					$('.history-awb-timeline').empty();
					$('.tTanggalPengiriman').empty();
					$('.tAsal').empty();
					$('.tTujuan').empty();
					$('.tPengirim').empty();
					$('.tPenerima').empty();
					$('.txtConnectionStatus').text(data.sicepat.status.code+" "+data.sicepat.status.description);
					}else{
					// Tracking Table
					$('.txtConnectionStatus').text(data.sicepat.status.code+" "+data.sicepat.status.description);
					$('.tTanggalPengiriman').text(data.sicepat.result.send_date);
					$('.tAsal').text(data.sicepat.result.sender_address);
					$('.tTujuan').text(data.sicepat.result.receiver_address);
					$('.tPengirim').text(data.sicepat.result.sender);
					$('.tPenerima').text(data.sicepat.result.receiver_name);
					
					tRx.row.add( [
						data.sicepat.result.waybill_number, 
						data.sicepat.result.service+" ("+data.sicepat.result.estimasi+" hari)",
						data.sicepat.result.receiver_address,
						data.sicepat.result.receiver_name, 
						data.sicepat.result.POD_receiver_time, 
						data.sicepat.result.POD_receiver, 
						data.sicepat.result.last_status.status 
					] ).draw( false );

					// Tracking History
					var TrackHistory	= data.sicepat.result.track_history;
					

					$('.history-awb-timeline').empty();
					const coba2 =[]
					for (var i = 0; i < TrackHistory.length; i++) {
						
						var hari 			= ['Minggu','Senin','Selasa','Rabu','Kamis','Jum&#39at','Sabtu'];
						var bulan			= ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
						var tanggal			= new Date(data.sicepat.result.track_history[i].date_time).getDate();
						var _hari			= new Date(data.sicepat.result.track_history[i].date_time).getDay();
						var _bulan			= new Date(data.sicepat.result.track_history[i].date_time).getMonth();
						var _tahun			= new Date(data.sicepat.result.track_history[i].date_time).getYear();
						var Jam				= new Date(data.sicepat.result.track_history[i].date_time).getHours();
						var Menit			= new Date(data.sicepat.result.track_history[i].date_time).getMinutes();
						var _Jam			= (Jam < 10 ? '0'+Jam :Jam) +":"+ (Menit < 10 ? '0'+ Menit : Menit);
						 						
						var xhari;
						var hari			= hari[_hari];
						var bulan			= bulan[_bulan];
						var tahun			= (_tahun<1000)? _tahun+1900 : _tahun;
		
						var detail = !data.sicepat.result.track_history[i].city ? data.sicepat.result.last_status.status :data.sicepat.result.track_history[i].city;
						
						
						var dataTrack =	'<li>'
										+'<div class="flex flex-row">'
											+'<div class="history-date flex flex-column">'
												+'<p>'+hari+',</p><h5>'+tanggal+' '+bulan+' '+tahun+'</h5>'
											+'</div>'
											+'<div class="history-detail flex flex-column">'
												+'<p style="margin:0px">'+_Jam+'</p>'
												+'<p>'+ detail +'</p>'
											+'</div>'
										+'</div>'
									+'</li>';
									

						/*coba2.push({ 
							"Hari" 		: hari,
							"Tanggal"  	: tanggal+' '+bulan+' '+tahun,
							"Jam"       : _Jam,
							"Detail"	: detail
						});*/
										
						//append
						$('.history-awb-timeline').append(dataTrack);
					}
					/*
					//console.log(coba2);
					let unique = [...new Set(coba2.map(item => item.Tanggal))];
					var voba3 = unique;
					var coba4
					for (var f = 0; f < coba2.length; f++) {
						if(coba2[f]===voba3[f]){
							coba4 ="";
						}else{
							coba4 ="style='visibility: hidden;'";
						}
						var dataTrackx ='<li>'
										+'<div class="flex flex-row">'
											+'<div class="history-date flex flex-column">'
												+'<p '+coba4+'>'+coba2[f]+',</p><h5>'+coba2[f]+' '+coba2[f]+' '+coba2[f]+'</h5>'
											+'</div>'
											+'<div class="history-detail flex flex-column">'
												+'<p style="margin:0px">'+_Jam+'</p>'
												+'<p>'+ detail+'</p>'
											+'</div>'
										+'</div>'
									+'</li>';
									//console.log(dataTrackx);
									//$('.history-awb-timeline').append(dataTrackx);
					
					}
					*/
					
						
					var tgl_resi =data.sicepat.result.send_date;
					var SetTagl_Resi = tgl_resi.substring(0, 10);

					$.ajax({
						url: "<?php echo site_url('home/send_update')?>", 
						type: "POST",  
						data: {"iINDEX":x,"Tgl_Resi":SetTagl_Resi,"Tujuan":data.sicepat.result.receiver_address,"Berat":data.sicepat.result.weight,"Status":data.sicepat.result.last_status.status,"Ditujukan":data.sicepat.result.receiver_name,"Penerima":data.sicepat.result.POD_receiver},
						success: function(data) { 
							reload_table();
						}
					});
					} //If Condition
				}
		});

	});
$('#WayBillTracker').on('click', '.btnEditInfo', function() {
	$('#txtReceiptsNumber').prop("readonly", true);
	$("#btnSend").text('Update');
});
// =========================================================================
$('#WayBillTracker').on('click', '.btnReceiptsUpdate', function() {
	var x =  $(this).attr('methodType');
	$.ajax({
			dataType: 'json',
			url: "https://apitrek.sicepat.com/customer/waybill",
			type: "GET",
			headers: { 'api-key': 'd7b263cfe0bce90575698b556d1022ac' },
			data:{"api-key":"d7b263cfe0bce90575698b556d1022ac","waybill":x},
			beforeSend: function(){
				ClearTablesTracking();
				$("#load-screen").show();					
			},
			complete: function(){
				$("#load-screen").hide();
			},
			success: function(data)
			{
				var tgl_resi =data.sicepat.result.send_date;
				var SetTagl_Resi = tgl_resi.substring(0, 10);

				$.ajax({
					url: "<?php echo site_url('home/send_update')?>", 
					type: "POST",  
					data: {"iINDEX":x,"Tgl_Resi":SetTagl_Resi,"Tujuan":data.sicepat.result.receiver_address,"Berat":data.sicepat.result.weight,"Status":data.sicepat.result.last_status.status,"Ditujukan":data.sicepat.result.receiver_name,"Penerima":data.sicepat.result.POD_receiver},

					success: function(data) { 
						reload_table();
						//console.log(data);
					}
				});
				
			}
	});
});
// =========================================================================
//Autoload All Row
$('#ReloadAll').on('click', function(e){
	$('.btnReceiptsUpdate').trigger('click');
});

// =========================================================================
}) ;
</script>

</body>
</html>
