<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="../src/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<div id="mydiv" class="col-md-3 bg-success text-danger" style="border:1px solid gray; height:100px; width:160px">IDB-BISEW</div>

</div>
<br>
<button id="show" class="btn btn-success">Show</button>
<button id="hide" class="btn btn-danger">Hide</button>
</div>

<script src="../src/js/bootstrap.min.js"></script>
<script src="../src/js/jquery-1.12.0.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#hide").click(function(){
		$("#mydiv").hide(2000);
	});
	$("#show").click(function(e) {
        $("#mydiv").show(2000);
    });
});
</script>
</body>
</html>