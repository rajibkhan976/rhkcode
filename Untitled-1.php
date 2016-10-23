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
<div id="a">
<ul>
<li><a href="p2.php?record=1" class="pa">1</a></li>
</ul>
</div>
</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    var pa = $(".pa").html();
	alert(pa);
});
</script>
</body>
</html>