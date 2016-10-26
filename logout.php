<?php
session_start();
if(isset($_POST['logout'])){
		unset($_SESSION['username']);
		session_destroy();
		echo "You are logged out";
		}
?>
