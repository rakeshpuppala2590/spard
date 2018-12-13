<?php
	$url="localhost";
	$username = "root";
	$password="";
	$db="cps";
	/*$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$phoneno=$_POST["phoneno"];
	$id=$_POST["id"];
	$email=$_POST["email"];
	$pswd =$_POST["psw"];
	$repeatpswd = $_POST["psw-repeat"];
	*/
	$con = mysqli_connect($url,$username,$password,$db);
	if(!$con)
	{
		die("Unable to connect".mysqli_connect_error());
	}
	if(isset($_POST['firstname']))
	{
	$Firstname=$_POST['firstname'];
	}
	if(isset($_POST['lastname']))
	{
	$Lastname=$_POST['lastname'];
	}
	if(isset($_POST['phoneno']))
	{
	$Phoneno=$_POST['phoneno'];
	}
	if(isset($_POST['id']))
	{
	$Id=$_POST['id'];
	}
	if(isset($_POST['email']))
	{
	$Email=$_POST['email'];
	}
	if(isset($_POST['psw']))
	{
	$Password =$_POST['psw'];
	}
	if(isset($_POST['psw-repeat']))
	{
	$Repeatpassword = $_POST['psw-repeat'];
	}
	$sql="insert into registration values('$Firstname','$Lastname',$Phoneno,'$Id','$Email','$Password','$Repeatpassword')";
	if(mysqli_query($con,$sql))
	{
		echo("one row inserted");
	}
	else
	{
		echo("no row inserted".mysqli_error($con));
	}
	mysqli_close($con);
	?>