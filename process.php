<?php
include('Cars.php');
$car = new Cars();
if(!empty($_POST['action']) && $_POST['action'] == 'listCar') {
	$car->carList();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addCar') {
	$car->addCar();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getCar') {
	$car->getCar();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateCar') {
	$car->updateCar();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteCar') {
	$car->deleteCar();
}
if(!empty($_POST['daction']) && $_POST['daction'] == 'addDriver') {
	$car->addDriver();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getDriver') {
	$car->getDriver();
}
?>