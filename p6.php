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
<div class="container">
<div id="header">
<p>Welcome to our site</p>
</div>
<hr>
<button id="makejumbotron">makejumbotron</button>
<button id="triggermakejumbotron">trigger make jumbotron</button>
</div>
</div>
<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
    $("#makejumbotron").click(function(e) {
        $("#header").addClass("jumbotron");
    });
	$("#triggermakejumbotron").click(function(e) {
        $("#makejumbotron").click();
    });
});
</script>
</body>
</html>