<?php
$conn = new mysqli("localhost","root","","round26");
$html = "";
$postid = $_POST['postid'];
$sq = "select * from myblog where id='$postid'";
$stmt = $conn->stmt_init();
$stmt->prepare($sq);
$stmt->execute();
$stmt->bind_result($pid,$t,$d,$tg,$pb,$im);
$stmt->store_result();
while($stmt->fetch()){
	$html .= '<b> Title: </b>'.$t;
	$html .= '<hr><b> Description: </b>'.$d;
	}
	echo $html;



?>