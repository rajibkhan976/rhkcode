<?php
session_start();
if($_POST['action']){
	if($_POST['action'] == 'added'){
require("connection.php");
$title = $_POST['title'];
$descrip = $_POST['descrip'];
$tag = $_POST['tag'];
$img = rand(0,10000)."jpg";
$cat = $_POST['catg'];
$userid = $_SESSION['userid'];
$userip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$active = $_SESSION['status'];
$created = date("Y-m-d H:i:s a");
$update = time();
$stmt = $conn->stmt_init();
$insertPost = "insert into posts values ('','$title','$descrip','$tag','$img',$cat,$userid,'$userip','$useragent',$active,'$created','$update')";
$stmt->prepare($insertPost);
$stmt->execute();
if($stmt->affected_rows > 0){
	echo "New post added successfully !";
	}
	else{echo "Post cannot be added !";}
	}
}

?>