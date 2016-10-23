<?php
if(isset($_POST['name'])){
	if($_POST['name'] == "user"){
$conn = new mysqli("localhost","root","","round26blog");
$conn->set_charset("utf8");
$a = $_POST['uem'];
$sel = "select useremail from user where useremail=?";
$stmt = $conn->stmt_init();
$stmt->prepare($sel);
$stmt->bind_param('s',$a);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($b);
if($stmt->num_rows > 0){
	echo "User email is already taken !";
	}
	else{echo "New user email !";}

	}
}


?>