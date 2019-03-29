<!DOCTYPE html>
<?php
    $cookie_name = $_GET['sppu_uname'];
    $cookie_value = $_GET['mother_name'];
    echo $cookie_name;
    echo "<br>";
    echo $cookie_value;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "<br>Cookie is Set;"
?>
<html>
<body>

<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "<hr><br>Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "<hr><br>Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>

</body>
</html>