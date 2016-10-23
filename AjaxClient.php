<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../src/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div id="post">
<?php
$conn = new mysqli("localhost","root","","round26");
$sel = "select * from myblog order by published desc";
$stmt = $conn->stmt_init();
$stmt->prepare($sel);
$stmt->execute();
$stmt->bind_result($id,$tit,$desc,$tag,$pub,$img);
$stmt->store_result();
$html = '<ul class="list-group">';
while($stmt->fetch()){
	$html .= '<li class="list-group-item"><a href="#" data-newsid="'.$id.'">'.$tit.'</a></li>';
	}
	$html .= '</ul>';
	echo $html;

?>
</div>
<div id="result" class="bg-success">
</div>
</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#post").on("click","ul li a",function(){
		var pid = $(this).attr("data-newsid");
		var url = "AjaxServer.php?postid=" + pid;
		/*$.ajax({url : url}).done(function(data){
			$("#result").html(data);
			});*/
			$.post("AjaxServer.php",{
				action : 'getpost',
				postid : pid,
				rand : Math.random()
				},function(data){
				$("#result").html(data);
				});
			/*$.get(url,function(data){
				$("#result").html(data);
				});*/
		});
});
</script>
</body>
</html>