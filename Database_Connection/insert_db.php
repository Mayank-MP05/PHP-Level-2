<?php
include("connection.php");

//collecting data from form

$roll = $_POST['r_no'];
$uname = $_POST['name'];
$mother = $_POST['mother'];
$mobile = $_POST['mobile'];

echo $roll;
echo $uname;
echo $mother;
echo $mobile;

$query2 = "INSERT INTO student_details VALUES('$roll','$uname','$mother','$mobile')";
$run = mysqli_query($con,$query2);

if($run){
    echo "Data Sent to Server";

}else{
    echo "Query Failed";
}

?>