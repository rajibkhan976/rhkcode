<?php
require("connection.php");
$selectCat = "select * from category";
$stmt = $conn->stmt_init();
$stmt->prepare($selectCat);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid,$cname,$cdesc,$ccreat);
if($stmt->num_rows > 0){
	echo "<h3 class='text-success'>Post category</h3>";
	echo "<ul class='list-group'>";
	while($stmt->fetch()){
		echo "<li class='list-group-item'><a href='#' data-cid='".$cid."' id='categorylink' style='text-decoration:none'>".$cname."</a></li>";
		}
		echo "</ul>";
	}


?>