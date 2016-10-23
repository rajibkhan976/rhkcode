<?php
session_start();
require_once("connection.php");
if(isset($_GET['cid']) && isset($_GET['pid'])){
	$userid = $_SESSION['userid'];
	$commentid = $_GET['cid'];
	$postid = $_GET['pid'];
	$selectUserComment = "select * from comments where `id` = ? and `postsid` = ? and `userid` = ? order by `created` desc";
	$stmt = $conn->stmt_init();
	}


?>