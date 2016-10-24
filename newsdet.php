<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.contain{width:95%; background-color:#9FC; border:1px solid #666; margin:10px auto; padding:20px;}
#com{width:50%; background-color:#0F0; border:1px solid #666; padding:20px; margin:10px 0px 10px 20px}
</style>
</head>

<body>
<?php
include('connection.php');
if(isset($_GET['newsid'])){
	$newsid = $_GET['newsid'];
	$sq = "select * from myblog where id='".$_GET['newsid']."';";
	$con->set_charset("utf8");
	$sn = $con->query($sq);
	if($sn->num_rows == 1){
		$row = $sn->fetch_array();
		echo "<div class='contain'><h3>".$row['title']."</h3>";
		echo "<p>".$row['desc']."</p>";
		echo "</div>";
		}
	}
?>
<div id="com">
<form action="#" method="post">
<input type="hidden" name="hd" value="<?php echo $_GET['newsid']; ?>">
Username: <input type="text" name="unam"><br><br>
User email: <input type="email" name="uem"><br><br>

<label style="float:left">User comment: </label>
<textarea rows="8" cols="50" name="com"></textarea><br><br>

<input type="submit" name="sub" value="Submit">
</form>
</div>
<?php
if(isset($_POST['sub'])){	
	$nid = $_GET['newsid'];
	$unam = $_POST['unam'];
	$uem = $_POST['uem'];
	$ucom = $_POST['com'];
	$pub = date("Y-m-d H:i:s a");
	$uip = $_SERVER['REMOTE_ADDR']; 
	$uag = $_SERVER['HTTP_USER_AGENT']; 
	$ap = 1;
	$ins = "insert into comments values('','$nid','$unam','$uem','$ucom','$pub','$uip','$uag','$ap');";
	$con->set_charset("utf8");
	$ad = $con->query($ins);
	if($ad){ echo "Record added!";}
}	
	if(!empty($newsid)){
	$sel = "select `newsid`,`username`,`useremail`,`usercomment`,`created` from `comments` where `newsid`=$newsid order by `created` desc; ";
	$ans = $con->query($sel);
	while($answ = $ans->fetch_array()){
		echo "<br>";
		echo "<div class='contain'>";
	echo "<h3> News id: ".$answ['newsid']."</h3>";
	echo  "<h3> Username: ".$answ['username']."</h3>";
	echo  "<h3> User email: ".$answ['useremail']."</h3>";
	echo "<h3>User comment: ".$answ['usercomment']."</h3>";
	echo "<h3>Published on: ".$answ['created']."</h3>";
	echo "</div>";
	echo "<br>";
		
		}//while end
	}//if end
	$con->close();
?>
</body>
</html>