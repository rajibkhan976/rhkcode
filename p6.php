<?php
if(isset($_POST['name'])){
$conn = new mysqli("localhost","root","","round26blog");
$sel = "select * from user order by id";
$result = $conn->query($sel);
echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Screenname</th></tr>";
if($result->num_rows > 0){
while($row = $result->fetch_array()){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['useremail']."</td>";
	echo "<td>".$row['screenname']."</td>";
	echo "</tr>";
	}	
}
echo "</table>";
}
?>