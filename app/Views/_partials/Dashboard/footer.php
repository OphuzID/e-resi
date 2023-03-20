<p></p>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<!-- 
<footer>
	<div class="environment">
		<p>Page rendered in {elapsed_time} seconds</p>
		<p>Environment: <?= ENVIRONMENT ?></p>
	</div>

	<div class="copyrights">
		<p>&copy; <?= date('Y') ?> PT. FA ANTARES MEDIKA</p>
	</div>

</footer>
-->
<!-- SCRIPTS -->
<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>
<!-- JS, Popper.js, and jQuery -->
<!-- Booststrap v4.5 -->
<script src="<?php echo base_url('assets/jQuery/jquery-3.5.1.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js');?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>" crossorigin="anonymous"></script>

<!-- DataTables v1.10.21 -->
<script src="<?php echo base_url('assets/DataTables/datatables.min.js');?>" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
	$('#example').DataTable();
	$('#CekResi').on('click', function(){
		
		//$.getJSON(url, data, success);

		$.ajax({
			dataType: 'json',
			url: "http://apitrek.sicepat.com/customer/waybill",
			type: "GET",
			data:{'api-key':"d7b263cfe0bce90575698b556d1022ac",'waybill':"000832796601"},
			success: function(data)
			{

				var newData = data.sicepat.status.code;
				console.log(data);
				//alert(obj.sicepat.status);
				//var json = $.parseJSON(sicepat); // create an object with the key of the array
       			//alert(json[0].status);

				/*$("#mStatus").modal("show");
				$('#tblStatus').DataTable( {
					"ajax": result ,
					"columns": [
						{ "data": "waybill_number" },
						{ "data": "send_date" },
						{ "data": "service" },
						{ "data": "receiver_namextn" },
						{ "data": "POD_receiver_time" },
						{ "data": "POD_receiver" },
						{ "data": "POD_receiver" },
					]
				});*/
			},
			error: function(jqXHR, textStatus, errorThrow)
			{
				alert('Error get data from ajax');
			}
		});
	});	
}) ;
</script>

<!-- -->

</body>
</html>