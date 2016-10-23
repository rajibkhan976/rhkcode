<?php
session_start();
if($_POST['action']){
	require("connection.php");
	if($_POST['action'] == 'addComment'){

$postid = $_SESSION['postid'];
$userid = $_SESSION['userid'];
$username = $_SESSION['scrnam'];
$useremail = $_POST['ucomemail'];
$usercomment = $_POST['ucomment'];
$commentcreate = date("Y-m-d H:i:s a");
$userip = $_SESSION['REMOTE_ADDR'];
$useragent = $_SESSION['HTTP_USER_AGENT'];
$approved = 1;
$stmt = $con
	}
}



?>