<?php

//Connection to Database
$host = 'localhost';
$user = "root";
$pass = "";
$db = "test";

$con = mysqli_connect($host,$user,$pass,$db);
if($con){
    
}else{
    echo "Disconnected";
}

// Show Table 

$q1 = "SELECT * FROM store WHERE category = 'Body'";
$result = mysqli_query($con,$q1);
$row = mysqli_num_rows($result);


if($row != 0){
    while($spec = mysqli_fetch_assoc($result)){
        echo $spec["p_id"]." ".$spec['product']." ".$spec['category']." ".$spec["price"]."<br>";
    }
}
?>