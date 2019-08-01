<?php
require "connect.php";
$query = "SELECT * FROM vehiculoRiver ; ";

$a = 'nombrevehiculo';
$b = 'marcaVehiculo';
$c = 'matriculaVehiculo';
$d = 'placaVehiculo';

if(mysqli_query($conn,$query)){

    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){

        $response[$a] = $row[1];
        $response[$b] = $row[2];
        $response[$c] = $row[3];
        $response[$d] = $row[4];       
        $List[] = $response;
    }  
    
}else {
    $response['success'] = false;
    $response['message']= "Failure!";
 }

echo json_encode($List);
mysql_close($conn);
?>