<?php
session_start();
require_once("connection.php");
if(isset($_GET['cid']) && isset($_GET['pid'])){
	$userid = $_SESSION['userid'];
	$commentid = $_GET['cid'];
	$postid = $_GET['pid'];
	$selectUserComment = "select * from comments where `id` = ? and `postsid` = ? and `userid` = ? order by `created` desc";
	$stmt = $conn->stmt_init();
	$stmt->prepare($selectUserComment);
	$stmt->bind_param('iii',$commentid,$postid,$userid);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($cid,$pid,$uid,$unam,$umail,$ucomment,$comcreate,$uip,$uagent,$appr);
	if($stmt->num_rows > 0){
		while($stmt->fetch()){
			$row['cid'] = $cid;
			$row['ucomment'] = $ucomment;
			echo json_encode($row);
			}
		}
	}
if(isset($_GET['name'])){
	if($_GET['name'] == 'updatecomment'){
		$commentid = $_GET['cid'];
		$comment = $_GET['ucom'];
		$updateComment = "update comments set `usercomment` = ? where `id` = ?";
		$stmt = $conn->stmt_init();
		$stmt->prepare($updateComment);
		$stmt->bind_param('si',$comment,$commentid);
		$stmt->execute();
		if($stmt->affected_rows > 0){
			echo "Your comment updated successfully !";
			}
			else{
				echo "Comment updating failed !";
				}			
		}
	}
if(isset($_GET['name'])){
	if($_GET['name'] == 'deleteComment'){
		$comid = $_GET['cid'];
		$postid = $_GET['pid'];
		$deleteComment = "delete from comments where `id` = ? and `postsid` = ? and `userid` = ?";
		$stmt = $conn->stmt_init();
		$stmt->prepare($deleteComment);
		$stmt->bind_param('iii',$comid,$postid,$userid);
		$stmt->execute();
		if($stmt->affected_rows == 1){
			echo "Your comment deleted successfully !";
			}
			else{echo "Your comment can not be deleted !";}
		}
	}
?>