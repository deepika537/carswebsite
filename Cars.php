<?php
require('config.php');
class Cars extends Dbconfig {	
    protected $hostName;
    protected $userName;
    protected $password;
	protected $dbName;
	private $carsTable = "cars_table";
	private $driversTable = "Drivers";
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 		
			$database = new DbConfig();            
            $this -> hostName = "sql302.epizy.com";
            $this -> userName = "epiz_26672605";
            $this -> password = "KyzWBy0jZqNQMnx";
			$this -> dbName = "epiz_26672605_cars";			
            $conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            } else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}   	
	public function carList(){		
		$sqlQuery = "SELECT * FROM ".$this->carsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(Id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Make LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR Model LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Year LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Color LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Country LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR Platenum LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR State LIKE "%'.$_POST["search"]["value"].'%"';
			$sqlQuery .= ' OR Mileage LIKE "%'.$_POST["search"]["value"].'%"';
			$sqlQuery .= ' OR Transmission LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY Id DESC ';
		}
		/*if($_POST["length"] != -1){
				$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
			}*/
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$numRows = mysqli_num_rows($result);
		$carsData = array();
		while( $car = mysqli_fetch_assoc($result) ) {		
			$carRows = array();			
			$carRows[] = $car['Id'];
			$carRows[] = $car['Make'];
			$carRows[] = $car['Model'];		
			$carRows[] = $car['Year'];	
			$carRows[] = $car['Color'];
			$carRows[] = $car['Country'];	
			$carRows[] = $car['Platenum'];
			$carRows[] = $car['State'];	
			$carRows[] = $car['Mileage'];	
			$carRows[] = $car['Transmission'];
			$carRows[] = '<button type="button" name="viewdriver" id="'.$car["Id"].'" class="btn btn-primary btn-xs viewdriver">ViewDriver</button';				
			$carRows[] = '<button type="button" name="update" id="'.$car["Id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$carRows[] = '<button type="button" name="delete" id="'.$car["Id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$carsData[] = $carRows;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"  	=>  $numRows,
			"recordsFiltered" 	=> 	$numRows,
			"data"    			=> 	$carsData
		);
		echo json_encode($output);
	}
	public function getCar(){
		if($_POST["carId"]) {
			$sqlQuery = "
				SELECT * FROM ".$this->carsTable." 
				WHERE Id = '".$_POST["carId"]."'";
			$result = mysqli_query($this->dbConnect, $sqlQuery);	
			$row = mysqli_fetch_array($result, MYSQL_ASSOC);
			echo json_encode($row);
		}
	}
	public function getDriver(){
		if($_POST["carId"]) {
			$sqlQuery = "
				SELECT * FROM ".$this->driversTable." 
				WHERE carId = ".$_POST["carId"];
			$result = mysqli_query($this->dbConnect, $sqlQuery);	
			$row = mysqli_fetch_array($result, MYSQL_ASSOC);
			echo json_encode($row);
		}
	}
	public function updateCar(){
		if($_POST['carId']) {	
			$updateQuery = "UPDATE ".$this->carsTable." 
			SET Id = '".$_POST["car_id"]."',Make = '".$_POST["carMake"]."', Model = '".$_POST["carModel"]."', Year = '".$_POST["carYear"]."', Color = '".$_POST["carColor"]."' , Country = '".$_POST["carCountry"]."', Platenum = '".$_POST["carPlatenum"]."', State = '".$_POST["carState"]."', Mileage = '".$_POST["carMileage"]."', Transmission = '".$_POST["carTransmission"]."'
			WHERE Id ='".$_POST["carId"]."'";
			$isUpdated = mysqli_query($this->dbConnect, $updateQuery);		
		}	
	}
	public function addCar(){
		$insertQuery = "INSERT INTO ".$this->carsTable." (Id, Make, Model, Year, Color, Country, Platenum, State,Mileage,Transmission) 
			VALUES (".$_POST["car_id"].", '".$_POST["carMake"]."', '".$_POST["carModel"]."', '".$_POST["carYear"]."', '".$_POST["carColor"]."', '".$_POST["carCountry"]."','".$_POST["carPlatenum"]."','".$_POST["carState"]."','".$_POST["carMileage"]."','".$_POST["carTransmission"]."')";
		$isUpdated = mysqli_query($this->dbConnect, $insertQuery);		
	}
	public function addDriver(){
		$insertQuery = "INSERT INTO ".$this->driversTable."(carId, Name, AssociateDriver, DriverStick) 
			VALUES (".$_POST["drivercarId"].", '".$_POST["driverName"]."', '".$_POST["associateDriver"]."', '".$_POST["driverStick"]."')";
		$isUpdated = mysqli_query($this->dbConnect, $insertQuery);		
	}
	public function deleteCar(){
		if($_POST["carId"]) {
			$driverDelete = "
				DELETE FROM ".$this->driversTable."
				WHERE carId = '".$_POST["carId"]."'";		
			mysqli_query($this->dbConnect, $driverDelete);	
			$sqlDelete = "
				DELETE FROM ".$this->carsTable."
				WHERE Id = '".$_POST["carId"]."'";		
			mysqli_query($this->dbConnect, $sqlDelete);		
		}
	}
}
?>