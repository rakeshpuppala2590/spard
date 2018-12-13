<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="cps"; // Database name 
$tbl_name="registration"; // Table name

// Connect to server and select databse.
$con =mysqli_connect("$host", "$username", "$password");
if(!$con)
{
die("connection created".mysqli_error($con));
}
$dbcheck = mysqli_select_db($con,"$db_name");
if(!$dbcheck)
{
die("unable to connect to the database".mysqli_error($con));
}

// Define $username and $password 
if(isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST['username']; 
$password=$_POST['password'];
}


$sql="SELECT * FROM $tbl_name WHERE email='$username' and password='$password'";
$result=mysqli_query($con,$sql);
// Mysql_num_row is counting table row
$row=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($row == 1) {
    echo "Success!";
} else {
    echo "Please enter valid details";
}
mysqli_close($con);


?>
