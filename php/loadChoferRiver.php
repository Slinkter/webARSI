<?php
require "connect.php";
$query = "SELECT * FROM choferRiver ; ";
$a = 'id';
$b = 'nameChofer';
$c = 'lastChofer';
$d = 'dniChofer';
$o = 'brevete';
$f = 'numphone'; 
if(mysqli_query($conn,$query)){

    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){

        $response[$b] = $row[1];
        $response[$c] = $row[2];
        $response[$d] = $row[3];
        $response[$e] = $row[4];
        $response[$f] = $row[5];
        $List[] = $response;
    }  
    
}else {
    $response['success'] = false;
    $response['message']= "Failure!";
 }

echo json_encode($List);
mysql_close($conn);
?>
 