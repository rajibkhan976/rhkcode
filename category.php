<?php
require("connection.php");
$selectCat = "select * from category";
$stmt = $conn->stmt_init();
$stmt->prepare($selectCat);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid,$cname,$cdesc,$ccreat);
if($stmt->num_rows > 0){
	while($stmt->fetch()){
		echo "<option value='".$cid."'>".$cname."</option>";
		}
	}


?>