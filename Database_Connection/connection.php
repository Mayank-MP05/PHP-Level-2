<?php
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $db = "test";

    $con = mysqli_connect($server,$user,$pwd,$db);

    if($con){
        echo "";
    }else {
        echo "Error.";
    }
?>