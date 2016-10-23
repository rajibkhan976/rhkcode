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
<p>Post id: <input type="text" id="pid" required></p>
<input type="button" id="getp" value="Get post">
<div id="drive"></div>

</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#getp").click(function(e) {
        var pid = $("#pid").val();
		var url = 'ReturnJSONFormat.php?postid=' + pid;
		$.getJSON(url,function(data,status,xhr){
			var ui = "<p>News title: " + data.title + "</p><p> News description: " + data.description + "</p>";
			$("#drive").html(ui);
			});
    });
});
</script>
</body>
</html>