<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    
<?php
    $_SESSION['name'] = 'Mayank';
    $_SESSION['mobile'] = 7350870059;
    echo $_SESSION['name'];
    echo "<br><hr>";
    echo $_SESSION['mobile'];
?>
</body>
</html>