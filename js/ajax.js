$(document).ready(function(){	
	var carRecords = $('#carList').DataTable({
		"processing":true,
		"deferRender": true,
		"order":[],
		"ajax":{
			url:"process.php",
			type:"POST",
			data:{action:'listCar'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[10, 11, 12],
				"orderable":false,
			},
		],
		"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"pageLength": 10,
		"paging":true
	});		
	$('#addCar').click(function(){
		$('#carModal').modal('show');
		$('#carForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Car");
		$('#action').val('addCar');
		$('#save').val('Add');
	});	
	$('#addDriver').click(function(){
		$('#driverModal').modal('show');
		$('#driverForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Driver");
		$('#daction').val('addDriver');
		$('#dsave').val('Add');
		$('#dsave').show();
	});		
	$("#carList").on('click', '.update', function(){
		var carId = $(this).attr("id");
		var action = 'getCar';
		$.ajax({
			url:'process.php',
			method:"POST",
			data:{carId:carId, action:action},
			dataType:"json",
			success:function(data){
				$('#carModal').modal('show');
				$('#car_id').val(data.Id);
				$('#carId').val(data.Id);
				$('#carMake').val(data.Make);
				$('#carModel').val(data.Model);
				$('#carYear').val(data.Year);				
				$('#carColor').val(data.Color);
				$('#carCountry').val(data.Country);	
				$('#carPlatenum').val(data.Platenum);	
				$('#carState').val(data.State);	
				$('#carMileage').val(data.Mileage);
				$('#carTransmission').val(data.Transmission);
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit Car");
				$('#action').val('updateCar');
				$('#save').val('Save');
			}
		})
	});
	$("#carModal").on('submit','#carForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"process.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#carForm')[0].reset();
				$('#carModal').modal('hide');				
				$('#save').attr('disabled', false);
				carRecords.ajax.reload();
			}
		})
	});		
	$("#driverModal").on('submit','#driverForm', function(event){
		event.preventDefault();
		$('#dsave').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"process.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#driverForm')[0].reset();
				$('#driverModal').modal('hide');				
				$('#dsave').attr('disabled', false);
				carRecords.ajax.reload();
			}
		})
	});		
	$("#carList").on('click', '.viewdriver', function(){
		var carId = $(this).attr("id");
		var action = 'getDriver';
		$.ajax({
			url:'process.php',
			method:"POST",
			data:{carId:carId, action:action},
			dataType:"json",
			success:function(data){
			    $('#dsave').hide();
				$('#driverModal').modal('show');
				$('#drivercarId').val(data.carId);
				$('#driverName').val(data.Name);
				$('#associateDriver').val(data.AssociateDriver);
				$('#driverStick').val(data.DriverStick);
			}
		})
	});
	$("#carList").on('click', '.delete', function(){
		var carId = $(this).attr("id");		
		var action = "deleteCar";
		if(confirm("Are you sure you want to delete this car?")) {
			$.ajax({
				url:"process.php",
				method:"POST",
				data:{carId:carId, action:action},
				success:function(data) {					
					carRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});