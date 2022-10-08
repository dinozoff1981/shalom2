<?php
include 'connect.php';
if(isset($_GET['deleteid'])){

	$ticketnumber=$_GET['deleteid'];

	$sql="DELETE FROM shalom4 WHERE ticketnumber=$ticketnumber";
	$con->query($sql);
	
	}
	header("location:home.php");
	exit;

?>