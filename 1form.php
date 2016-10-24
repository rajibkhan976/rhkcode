<?php
include('connection.php');
if(isset($_POST['sub'])){
	$a = $_POST['title'];
	$b = $_POST['desc'];
	$c = $_POST['tag'];
	$g = $_FILES['im']['name'];
	$h =  $_FILES['im']['tmp_name'];
	$i =  $_FILES['im']['type'];
	$d = date("Y-m-d H:i:s a");
	
if(is_uploaded_file($h))
{ $up = move_uploaded_file($h,$g);
	if($up == 1){$m = "Image uploaded successfully !";}
	else {$m = "Image uploading failed !";}
	}
	foreach($c as $f){
		$e = $f;
		}
$insert = "insert into myblog values('','$a','$b','$e','$d','$g');";
$con->set_charset("utf8");
$add = $con->query($insert);
if($con->affected_rows){
	header("Location: 1blog.php");
	}
$con->close();

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.container{width:95%; background-color:#0FF; border:1px solid #666; margin:0 auto; padding:20px;}
</style>
</head>

<body style="background-color:#F9F">
<div class="container">
<form action="#" enctype="multipart/form-data" method="post">

Title: <input type="text" name="title" value="<?php if(isset($a)) echo $a ?>"><br><br>

<label style="float:left">Description: </label><textarea rows="8" cols="50" name="desc"></textarea><br><br>

Tags: <select name="tag[]">
<option value="Politics">Politics</option>
<option value="Economics">Economics</option>
<option value="Sports">Sports</option>
<option value="Literature">Literature</option>
<option value="Education">Education</option>
<option value="Business">Business</option>
<option value="Health">Health</option>
<option value="Technology">Technology</option>
<option value="National">National</option>



</select><br><br>
Upload image: <input type="file" name="im"><br><br>
<input type="submit" name="sub" value="Add comment">

</form>
</div>
<?php if(isset($m)) echo "<h3>".$m."</h3>";?>
</body>
</html>