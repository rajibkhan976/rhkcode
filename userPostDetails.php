<?php
if(isset($_GET['postid'])){
require("connection.php");
$postId = $_GET['postid'];
$selectPost = "select * from posts where id='$postId'";
$stmt = $conn->stmt_init();
$stmt->prepare($selectPost);
$stmt->execute();
$stmt->bind_result($pid,$ptitle,$pdesc,$ptag,$pimg,$pcat,$uid,$uip,$uagent,$uactive,$pcreate,$pupdate);
$stmt->store_result();
if($stmt->num_rows == 1){
	echo "<h2 class='text-success text-center'>Blog Post</h2>";
	while($stmt->fetch()){
		echo "<div class='jumbotron'>";
		echo "<h3>".$ptitle."</h3>";
		echo "<p>".$pdesc."</p>";
		echo "<p>".$pcreate."</p>";
		echo "</div>";
		}
	}
if(!empty($postId)){
	$selectComments = "select * from comments where `postsid` = '$postId' and `userid` = $uid order by `created`";
	$stmt = $conn->stmt_init();
	$stmt->prepare($selectComments);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($cid,$pid,$uid,$unam,$umail,$ucomment,$comcreate,$uip,$uagent,$appr);
	if($stmt->num_rows > 0){
		echo "<h2 class='text-danger'>Comments</h2>";
		while($stmt->fetch()){
			echo "<div class='jumbotron'>";
			echo "<h3>".$unam."</h3>";
			echo "<p>".$ucomment."</p>";
			echo "<p>".$comcreate."</p>";
			echo "<div class='pull-right'>";
			echo "<button type='button' class='btn btn-warning' id='updateCommentBtn' data-target='#myEditedComment' data-updateid='".$cid."' data-postid='".$pid."' data-toggle='modal'>Edit</button> ";
			echo " <button type='button' class='btn btn-danger' id='deleteCommentBtn' data-deleteid='".$cid."' data-postid='".$pid."'>Delete</button>";
			echo "</div>";
			echo "</div>";
			}
		}
}
}
?>