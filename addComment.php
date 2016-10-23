<?php
session_start();
if($_POST['action']){
	require("connection.php");
	if($_POST['action'] == 'addComment'){

$postid = $_POST['postid'];
$userid = $_SESSION['userid'];
$username = $_SESSION['scrnam'];
$useremail = $_POST['ucomemail'];
$usercomment = $_POST['ucomment'];
$commentcreate = date("Y-m-d H:i:s a");
$userip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$approved = 1;
$stmt = $conn->stmt_init();
$insertComment = "insert into comments values('',$postid,'$userid','$username','$useremail','$usercomment','$commentcreate','$userip','$useragent',$approved)";
	}
	$stmt->prepare($insertComment);
	$stmt->execute();
	if($stmt->affected_rows > 0){
		echo "Your comment added successfully !";
		}
		else{echo "Your comment cannot be added !";}
}


?>