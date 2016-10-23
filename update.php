<?php
include('connection.php');
$h = $_GET['getupd'];
if(isset($h)){
	$sel = "select * from newauth where id='$h';";
	$ans = $con->query($sel);
	$form = "<form action='#' method='post'>";
	echo $form;
	$res = $ans->fetch_array();
		
		echo "ID: <input type='text' name='ide' value='".$res['id']."'><br><br>";
		echo "Username: <input type='text' name='una' value='".$res['username']."'><br><br>";
		echo "Password: <input type='text' name='pas' value='".$res['pass']."'><br><br>";
		echo "Secret question: <input type='text' name='squ' value='".$res['secret_question']."'><br><br>";
		echo "Secret answer: <input type='text' name='san' value='".$res['secret_answer']."'><br><br>";
		echo "<input type='submit' name='subm' value='Update'>";
		echo "</form>";	
	
	}
if(isset($_POST['subm'])){
	$ide = $_POST['ide']; 
	$uname = $_POST['una'];
	$pass = $_POST['pas'];
	$sq = $_POST['squ'];
	$sa = $_POST['san'];
	$update = "update newauth set username='$uname',pass='$pass',secret_question='$sq',secret_answer='$sa' where id='$ide';";
	$change = $con->query($update);
	if($change){
		$mod = "Record updated successfully !";
		}
		else{$mod = "Record updating failed";}
	echo "<h3>".$mod."</h3>";
	
	
	}

$con->close();



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>