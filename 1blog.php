<?php
include('connection.php');
$selectQuery = "select * from `myblog` order by `created` desc";
$con->set_charset("utf8");
$comment = $con->query($selectQuery);
//var_dump($comment);
echo "<button onClick='window.location=\"1form.php\"'>Add new post</button>";
while($result=$comment->fetch_array()){
	if(strlen($result['desc']) > 800){
		$sp = strpos($result['desc']," ",800);
		}
		else{$sp = -1;}
		if($sp != -1){
			$desc = substr($result['desc'],0,$sp)."...";
			}
			else{$desc = $result['desc'];}
	echo "<div class='contain'>";
	echo "<h3> Title: ".$result['title']."</h3>";
	echo  "<p><a href='newsdet.php?newsid=".$result['id']."'>".$desc."</a></p>";
	echo  "<h3> Tag: ".$result['tags']."</h3>";
	echo "<h3>Published on: ".$result['created']."</h3>";
	echo "</div>";
	echo "<br>";
	}












?>
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

<body style="background-color:#F9F">


<?php if(isset($n)) echo "<h3>".$n."</h3>";?>

</body>
</html>