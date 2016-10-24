<?php
if(isset($_POST['check'])){
$mysqli = new mysqli('localhost','root','rajib','mycode');
$unam = $_POST['unam'];
$query = "select * from `user` where `uname` like '".$unam."%'";
$result = $mysqli->query($query);
if($result->num_rows > 0){
	echo "user avaiable";
	}
	else{echo "new user";}
}

if(isset($_POST['add'])){
$mysqli = new mysqli('localhost','root','rajib','mycode');
$unam = $_POST['unam'];
$uemail = $_POST['uemail'];
$upass = $_POST['upass'];
$insert = "insert into user values(null,'$unam','$uemail','$upass')";
$mysqli->query($insert);
if($mysqli->affected_rows > 0){
	echo "Registration successful !";
	}
	else{echo "Failed";}
	}
	
	if(isset($_POST['sel'])){
		$mysqli = new mysqli('localhost','root','rajib','mycode');
		$select = "select * from user";
		$results = $mysqli->query($select);
		if($results->num_rows > 0){
			echo "<h1 class='text-info'>User Information</h1>";
			echo "<table class='table table-bordered table-striped' id='userinfotable'><tr><th>User id</th><th>User name</th><th>User email</th><th>Password</th><th>Action</th></tr>";
			while($row = $results->fetch_object()){
				echo "<tr>";
				echo "<td>$row->uid</td>";
				echo "<td>$row->uname</td>";
				echo "<td>$row->uemail</td>";
				echo "<td><input type='password' value='".$row->upass."'></td>";
				echo "<td><button type='button' class='btn btn-primary edituser' data-usereditid='".$row->uid."'>Edit</button>"." | "."<button type='button' class='btn btn-info deleteuser' data-userdeleteid='".$row->uid."'>Delete</button></td>";
				echo "</tr>";
				}
				echo "</table>";
			}
		}
		
		if(isset($_POST['manipulate'])){
			$mysqli = new mysqli('localhost','root','rajib','mycode');
			$uid = $_POST['uid'];
			$retrieve = "select * from user where uid = $uid";
			$answer = $mysqli->query($retrieve);
			if($answer->num_rows > 0){
				$individualuser = $answer->fetch_object();
				echo "<h1>Edit User</h1><br/>";
				echo "<form>";
				echo "<input type='hidden' id='suid' value='".$individualuser->uid."'>";
				echo "User name: <input type='text' id='suname' value='".$individualuser->uname."'><br/><br/>";
				echo "<p id='hint' class='bg-success'></p>";
				echo "User email: <input type='email' id='sumail' value='".$individualuser->uemail."'><br/><br/>";
				echo "Password: <input type='password' id='supass' value='".$individualuser->upass."'><br/><br/>";
				echo "<button type='button' class='btn btn-primary' id='savebutton'>Save</button><br/> <br/>";
				echo "<p id='action' class='bg-danger'></p>";
				echo "</form>";
				}
			}
			
			if(isset($_POST['recheck'])){
			$mysqli = new mysqli('localhost','root','rajib','mycode');
			$sunam = $_POST['sunam'];
			$squery = "select * from `user` where `uname` like '".$sunam."%'";
			$sresult = $mysqli->query($squery);
			if($sresult->num_rows > 0){
				echo "user avaiable";
				}
				else{echo "new user";}
			}
			
			if(isset($_POST['updateuser'])){
				$mysqli = new mysqli('localhost','root','rajib','mycode');
				$suid = $_POST['suid'];
				$suname = $_POST['suname'];
				$suemail = $_POST['suemail'];
				$supass = $_POST['supass'];
				$update = "update user set uname = '".$suname."', uemail = '".$suemail."', upass = '".$supass."' where uid = $suid";
				$mysqli->query($update);
				if($mysqli->affected_rows > 0){
					echo "User updated successfully";
					}
					else{
						echo "Failed";
						}
				}
			
			if(isset($_POST['deleteuser'])){
				$mysqli = new mysqli('localhost','root','rajib','mycode');
				$duid = $_POST['duid'];
				$delete = "delete from user where uid = $duid";
				$mysqli->query($delete);
				if($mysqli->affected_rows > 0){
					echo "User deleted successfully";
					}
					else{
						echo "Failed";
						}
				}
?>
