<?php
include('connection.php');
$g = $_GET['getdel'];
$del = "delete from newauth where id=$g";
$res = $con->query($del);
if($con->affected_rows){
	header("Location: result.php");
	}

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