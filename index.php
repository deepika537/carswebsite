<title>Cars Website</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="js/ajax.js"></script>	
<div class="container contact" style="width: 1300px;">	
	<h2>Car Details</h2>	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addCar" class="btn btn-success" style="margin-left: 160px;margin-bottom: -40px;">Add Car</button>
					<button type="button" name="add" id="addDriver" class="btn btn-success" style="margin-left: 250;margin-bottom: -40px;">Add Driver</button>
				</div>
			</div>
		</div>
		<table id="carList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Car ID</th>
					<th>Make</th>
					<th>Model</th>					
					<th>Year</th>
					<th>Color</th>
					<th>Country</th>
					<th>Platenum</th>
					<th>State</th>
					<th>Mileage</th>					
					<th>Transmission</th>
					<th>Driver</th>
					<th></th>
					<th></th>					
				</tr>
			</thead>
		</table>
	</div>
	<div id="carModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="carForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Car</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group"
							<label for="name" class="control-label">CarId</label>
							<input type="text" class="form-control" id="car_id" name="car_id" placeholder="Car Id" required>			
						</div>
						<div class="form-group"
							<label for="name" class="control-label">Make</label>
							<input type="text" class="form-control" id="carMake" name="carMake" placeholder="Make" required>			
						</div>
						<div class="form-group">
							<label for="age" class="control-label">Model</label>							
							<input type="text" class="form-control" id="carModel" name="carModel" placeholder="Model">							
						</div>	   	
						<div class="form-group">
							<label for="year" class="control-label">Year</label>							
							<input type="text" class="form-control"  id="carYear" name="carYear" placeholder="Year" required>							
						</div>	 
						<div class="form-group">
							<label for="color" class="control-label">Color</label>							
							<input type="text" class="form-control" id="carColor" name="carColor" placeholder="Color">					
						</div>
						<div class="form-group">
							<label for="country" class="control-label">Country</label>							
							<input type="text" class="form-control" id="carCountry" name="carCountry" placeholder="Country">			
						</div>	
						<div class="form-group">
							<label for="platenum" class="control-label">Platenum</label>							
							<input type="text" class="form-control" id="carPlatenum" name="carPlatenum" placeholder="Platenum">			
						</div>				
						<div class="form-group">
							<label for="state" class="control-label">State</label>							
							<input type="text" class="form-control" id="carState" name="carState" placeholder="State">			
						</div>	
						<div class="form-group">
							<label for="state" class="control-label">Mileage</label>							
							<input type="text" class="form-control" id="carMileage" name="carMileage" placeholder="Mileage">			
						</div>
						<div class="form-group">
							<label for="state" class="control-label">Transmission</label>							
							<input type="text" class="form-control" id="carTransmission" name="carTransmission" placeholder="Transmission">			
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="carId" id="carId" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
	
	<div id="driverModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="driverForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i>Driver Details</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group"
							<label for="drivercarId" class="control-label">CarId</label>
							<input type="text" class="form-control" id="drivercarId" name="drivercarId" placeholder="drivercarId" required>			
						</div>
						<div class="form-group"
							<label for="driverName" class="control-label">Name</label>
							<input type="text" class="form-control" id="driverName" name="driverName" placeholder="Driver Name" required>			
						</div>
						<div class="form-group">
							<label for="associateDriver" class="control-label">associateDriver</label>							
							<input type="text" class="form-control" id="associateDriver" name="associateDriver" placeholder="Associate Driver">							
						</div>	
						<div class="form-group">
							<label for="driverStick" class="control-label">DriverStick</label>							
							<select class="form-control" id="driverStick" name="driverStick">
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
							</select>							
						</div>   	
						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="daction" id="daction" value="" />
    					<input type="submit" name="dsave" id="dsave" class="btn btn-info" value="Add" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	