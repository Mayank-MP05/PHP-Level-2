<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions Project</title>
</head>
<body>
<center>
    <h2>PHP Session Project</h2><hr>
    <form method="GET">
        UserName <input type="text" name="name">
        <br>
        Mobile <input type="number" name="mob">
        <br><input type="submit" name = "login">
        <input type="submit" name="logout">
    </form>
</center>
</body>
</html>
<?php
    if(isset($_GET['login'])){
        $name = $_GET['name'];
        $mob = $_GET['mob'];

        session_start();

        $_SESSION['name'] = $name;
        $_SESSION['mob'] = $mob;
        
        echo $_SESSION['name'];
    }

    if(isset($_GET['logout'])){
        session_unset();
    }
?>