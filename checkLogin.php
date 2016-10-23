<?php
session_start();
if(isset($_POST['action'])){
require("connection.php");
if($_POST['useraction'] == "checkUserlogin"){
$useremail = $_POST['usemail'];
$userpass = sha1($_POST['uspass']);
$select = "select * from user where `useremail`= ? and `password`= ? and `status`= 1";
$stmt = $conn->stmt_init();
$stmt->prepare($select);
$stmt->bind_param('ss',$useremail,$userpass);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id,$uem,$ups,$scrn,$hs,$stat,$cre);
if($stmt->num_rows == 1){
	while($stmt->fetch()){
		$_SESSION['userloginStatus'] = "userloggedin";
		$_SESSION['userid'] = $id;
		$_SESSION['scrnam'] = $scrn;
		$_SESSION['status'] = $stat;
		echo "1";
		}
		
	}
elseif($_POST['adminaction'] == "checkAdminlogin"){
$adminemail = $_POST['usemail'];
$adminpass = sha1($_POST['uspass']);
$select = "select * from user where `useremail`= ? and `password`= ? and `status`= 4";
$stmt = $conn->stmt_init();
$stmt->prepare($select);
$stmt->bind_param('ss',$adminemail,$adminpass);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($aid,$aem,$aps,$ascrn,$ahs,$astat,$acre);
if($stmt->num_rows == 1){
	while($stmt->fetch()){
		$_SESSION['adminloginStatus'] = "adminloggedin";
		$_SESSION['adminid'] = $aid;
		$_SESSION['adminscrnam'] = $ascrn;
		$_SESSION['adminstatus'] = $astat;
		echo "1";
		}
		
	}
	else{echo "0";}
	
	}
	else{echo "0";}
}
}
?>