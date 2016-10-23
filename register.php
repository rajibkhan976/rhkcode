<?php
session_start();
if(isset($_POST['action'])){
	include("connection.php");
	if($_POST['action'] == "register"){
	$usemail = $_POST['usemail'];
	$usepass = sha1($_POST['usepass']);
	$repass = sha1($_POST['repass']);
	$scn = sha1($usemail);
	$hash = md5(time().rand(0,10000).$usemail);
	$status = 1;
	$created = date("Y-m-d H:i:s");
	$insert = "insert into user values('','$usemail','$usepass','$scn','$hash',$status,'$created')";
	$stmt = $conn->stmt_init();
	$stmt->prepare($insert);
	if(strcmp($usepass,$repass) == 0){
	$stmt->execute();}
	if($stmt->affected_rows == 1){
		echo "1";
		}
		else{echo "0";}
	}
	}

?>