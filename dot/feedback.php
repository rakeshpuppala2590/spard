<?php
	$url="localhost";
	$username = "root";
	$password="";
	$db="cps";
	$con = mysqli_connect($url,$username,$password,$db);
	if(!$con)
	{
		die("Unable to connect".mysqli_connect_error());
	}
	if(isset($_POST['r1']))
	{
	$first = $_POST['r1'];
	}
	if(isset($_POST['r2']))
	{
	$second = $_POST['r2'];
	}
	if(isset($_POST['r3']))
	{
	$third = $_POST['r3'];
	}
	if(isset($_POST['r4']))
	{
	$fourth = $_POST['r4'];
	}
	if(isset($_POST['r5']))
	{
		$fifth = $_POST['r5'];
	}
	$sql="insert into feedbacks values('$first','$second','$third','$fourth','$fifth')";
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