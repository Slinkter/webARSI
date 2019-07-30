<?php

require "connect.php";

$a = $_GET["nombreVehiculo"];
$b = $_GET["marcaVehiculo"];
$c = $_GET["matriculaVehiculo"];
$d = $_GET["placaVehiculo"];


$query = "INSERT INTO `vehiculoRiver`(`nombreVehiculo`,`marcaVehiculo`,`matriculaVehiculo`,`placaVehiculo`) VALUES ('$firstname','$lastname','$dni','$brevete','$numphone');";

if(mysqli_query($conn,$query)){
        $response['success'] = true;
        $response['message']= "Successfuly";
}else {
        $response['success'] = false;
        $response['message']= "Failure!";
 }
echo json_encode($response);
mysql_close($conn);
?>
 