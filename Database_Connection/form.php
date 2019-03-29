<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP User input form</title>
</head>
<body>
<center>
    <h2>PHP User Input Form :</h2><br><hr>
    <form method="POST" action="insert_db.php">
    <label>Roll No.</label>
    <input type="text" name="r_no"><br>

    <label>Student Name :</label>
    <input type="text" name="name"><br>

    <label>Mother Name :</label>
    <input type="text" name="mother"><br>

    <label>Mobile No.</label>
    <input type="number" name="mobile"><br>

    <input type="submit" name="opbtn">

    </form>
</center>   
</body>
</html>
