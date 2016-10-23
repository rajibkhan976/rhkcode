<?php
require("connection.php");
$pagesize = 4;
@$recordStart = (int) $_GET['recordstart'];
if(isset($_GET['recordstart'])){
	$recordStart = (($recordStart - 1) * $pagesize);
	}
	else{$recordStart = 0;}
//$recordStart = (isset($_GET['recordstart'])) ? (($recordStart - 1) * $pagesize) : 0;
$userid = $_SESSION['userid'];
$countRecord = "select count(*) from posts where `userid` = ?";
$stmt = $conn->stmt_init();
$stmt->prepare($countRecord);
$stmt->bind_param('i',$userid);
$stmt->execute();
$stmt->bind_result($totalRecord);
$stmt->store_result();
if($stmt->num_rows > 0){
	while($stmt->fetch()){
		$totalRow = $totalRecord;
		}
	}
	$num_page = ceil($totalRow/$pagesize);

$selectPost = "select * from posts where `userid` = ?  order by `created` desc limit $recordStart,$pagesize";
$stmt = $conn->stmt_init();
$stmt->prepare($selectPost);
$stmt->bind_param('i',$userid);
$stmt->execute();
$stmt->bind_result($pid,$ptitle,$pdesc,$ptag,$pimg,$pcat,$uid,$uip,$uagent,$uactive,$ucreate,$uupdate);
$stmt->store_result();
if($stmt->num_rows > 0){
	echo "<h2 class='text-success text-center'>Blog Posts</h2>";
	while($stmt->fetch()){
		if(strlen($pdesc) > 800){
			$spacePosition = strpos($pdesc," ",800);
			}
			else{$spacePosition = -1;}
			if($spacePosition != -1){
				$pdescription = substr($pdesc,0,$spacePosition)."...";
				}
				else{$pdescription = $pdesc;}
				$_SESSION['postid'] = $pid;
		echo "<div class='jumbotron'><h3>".$ptitle."</h3>";
		echo "<p><a href='#' data-postid='".$pid."' class='blogposts'>".$pdescription."</a></p>"; 
		echo "<p>".$ucreate."</p>";
		echo "<div class='pull-right'>";
		echo "<button type='button' class='btn btn-warning' id='updatePostBtn' data-target='#myUpdatedPost' data-updateid='".$pid."' data-toggle='modal'>Edit</button> ";
		echo " <button type='button' class='btn btn-danger' id='deletePostBtn' data-deleteid='".$pid."'>Delete</button>";
		echo "</div>";
		echo "</div>";
		}
	}
echo "<ul class='pagination pagination-sm pull-right'>";
for($c = 0; $c < $num_page; $c++){
	if($c == (@$_GET['recordstart'] - 1)){
		echo "<li class='active'><a href='home.php?recordstart=".($c+1)."'>".($c+1)."</a></li>";
		}
		else{echo "<li><a href='home.php?recordstart=".($c+1)."'>".($c+1)."</a></li>";}
	}
echo '</ul>';



?>




