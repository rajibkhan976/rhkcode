<?php
require('connection.php');
$select = "select * from newauth;";
$record = $con->query($select);
	$html = '<table width="100%" border="1"><tr><th>ID</th><th>Username</th><th>Password</th><th>Secret Question</th><th>Secret Answer</th><th>Delete</th><th>Update</th></tr>';
	echo $html;
	while($result = $record->fetch_array())
{echo "<tr>";
echo "<td>".$result['id']."</td>";
echo "<td>".$result['username']."</td>";
echo "<td>".$result['pass']."</td>";
echo "<td>".$result['secret_question']."</td>";
echo "<td>".$result['secret_answer']."</td>";
echo "<td><a href='delete.php?getdel=".$result['id']."'>delete</a></td>";
echo "<td><a href='update.php?getupd=".$result['id']."'>update</a></td>";
echo "</tr>";
}
echo "</table>";
$con->close();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="Rajib mysqli hw.php">Register</a>
</body>
</html>