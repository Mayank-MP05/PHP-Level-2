<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookie Project to Check User Listing</title>
</head>
<body>
    <center>
        <h2>Check User Listing</h2><br>
        <form method="POST" action="">
            <input type="text" name="ip">
            <input type="text" name="val">
            <input type="submit" name="submit_btn">
        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['submit_btn'])){
    $ip = $_POST["ip"];
    $val = $_POST["val"];

    if(!isset($_COOKIE[$ip])){
        echo "Cookie of value".$ip."NOT Set<br>";
        setcookie($ip,$val,time() + 86400,"/");
        echo "<br>Now it is Set";
    }else{
        echo "User already Visited";
        echo "<br>Name : ".$ip;
        echo "<br>Value : ".$_COOKIE[$ip];
    }
}
?>