<?php

    $file = $_FILES['up_file'];
    //print_r($file);

    //name] => Main.txt [type] => text/plain [] => D:\xampp\tmp\phpC9C2.tmp [] => 0 [size] => 328 )

    $file_name = $_FILES['up_file']['name'];
    $file_type = $_FILES['up_file']['type'];
    $file_temp = $_FILES['up_file']['tmp_name'];
    $file_error = $_FILES['up_file']['error'];
    $file_size = $_FILES['up_file']['size'];
    $file_destination = "store/".$file_name;

   /* echo $file_name;
    echo $file_type;
    echo $file_temp;   
    echo $file_error;
    echo $file_size;*/

    if($file_error === 0){

        move_uploaded_file($file_temp,$file_destination);
        echo "Sucessfully Uploaded";
    }else{
        echo "Error Happened";
    }
?>