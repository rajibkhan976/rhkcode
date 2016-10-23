<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="../src/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container bg-success">
<h3 class="text-info">Registration</h3>
<form name="myform" id="myform">
<div class="form-group-lg">
<input type="text" name="uem" id="uem" class="form-control">
<p id="mes"></p><br>
<button class="btn btn-danger" id="sub">Submit</button>
</div>
</form>

</div>

<script src="../src/js/bootstrap.min.js"></script>
<script src="../src/js/jquery-1.12.0.min.js"></script>
<script>
$(document).ready(function(e) {
    
	$("#uem").keyup(function(e) {
        $.post("p2.php",{
			name : "user",
			uem : $("#uem").val(),
			rand : Math.random()
			},
		function(data){
			$("#mes").html(data);
			});
    });
});
</script>
</body>
</html>