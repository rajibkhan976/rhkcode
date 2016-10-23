<?php
$conn = new mysqli("localhost","root","","round26");
$postid = $_GET['postid'];
$sel = "select * from myblog where id='$postid'";
$result = $conn->query($sel);
$row = $result->fetch_array();
echo json_encode($row);

?>