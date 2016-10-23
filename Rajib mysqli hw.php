<?php

include('connection.php');

if(isset($_POST['su'])){
	$a = $_POST['un'];
	$b = $_POST['ps'];
	$c = $_POST['sq'];
	$d = $_POST['sa'];
	$insert = "insert into newauth values('','$a','$b','$c','$d');";
	if($con->query($insert)){
	header("Location: result.php");
	}
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
<form action="#" method="post">
Username: <input type="text" name="un"><br><br>

Password: <input type="password" name="ps"><br><br>

Secret question: <input type="text" name="sq"><br><br>

Secret answer: <input type="text" name="sa"><br><br>

<input type="submit" name="su" value="Register" >

</form>

</body>
</html>