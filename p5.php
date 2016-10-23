<?php
if(isset($_POST['name'])){
$conn = new mysqli("localhost","root","","round26blog");
$uname = $_POST['uname'];
$sel = "select useremail from user where useremail='$uname'";
$result = $conn->query($sel);
if($result->num_rows > 0){
	echo "Valid username";
	}
	else{
		echo "Please register";
		}


}
?>