<?php
session_start();
require_once("connection.php");
if(isset($_POST['postid'])){
$userid = $_SESSION['adminid'];
$postid = $_POST['postid'];
$selectUserPosts = "select * from posts where `id` = ?  order by created desc";
$stmt = $conn->stmt_init();
$stmt->prepare($selectUserPosts);
$stmt->bind_param('i',$postid);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($pid,$ptitle,$pdesc,$ptag,$pimg,$pcat,$uid,$uip,$uagent,$uactive,$ucreate,$uupdate);
if($stmt->num_rows > 0){
	while($stmt->fetch()){
		$row['postid'] = $pid;
		$row['posttitle'] = $ptitle;
		$row['postdesc'] = $pdesc;
		$row['postcatg'] = $pcat;
		$row['posttag'] = $ptag;
		echo json_encode($row);
		}
	}
}
if(isset($_POST['updateaction'])){
	if($_POST['updateaction'] == 'postUpdate'){
		$upId = $_POST['postId'];
		$upTitle = $_POST['postTitle'];
		$upCatg = $_POST['postCatg'];
		$upDesc = $_POST['postDesc'];
		$upTag = $_POST['postTag'];
		$stmt = $conn->stmt_init();
		$queryUpdatePost = "update posts set `posttitle` = ?, `postdesc` = ?, `posttags` = ?, `postcat` = ? where `id` = '$upId'";
		$stmt->prepare($queryUpdatePost);
		$stmt->bind_param('sssi',$upTitle,$upDesc,$upTag,$upCatg);
		$stmt->execute();
		if($stmt->affected_rows == 1){
			echo "Your post updated successfully !";
			}
			else{echo "Post updating failed !";}
		}
	}
if(isset($_POST['deleteaction'])){
	if($_POST['deleteaction'] == "deletepost"){
		$deleteId = $_POST['deleteid'];
		$queryDeletePost = "delete from posts where id = ?";
		$stmt = $conn->stmt_init();
		$stmt->prepare($queryDeletePost);
		$stmt->bind_param('i',$deleteId);
		$stmt->execute();
		if($stmt->affected_rows == 1){
			echo "Your post deleted successfully !";
			}
			else{echo "Your post can't be deleted !";}
		}
	}



?>