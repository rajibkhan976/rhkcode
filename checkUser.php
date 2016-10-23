<?php
if(isset($_GET['action'])){
	include("connection.php");
	$useremail = $_GET['chkusr'];
	$select = "select useremail from user where useremail= ?";
	$stmt = $conn->stmt_init();
	$stmt->prepare($select);
	$stmt->bind_param('s',$useremail);
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows > 0){
		echo "Duplicate Email address not granted!";
		}
		else{echo "Valid email address !";}
	
	
	}





?>