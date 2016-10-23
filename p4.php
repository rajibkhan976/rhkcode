<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../src/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12 bg-success">
<form role="for">
<div class="form-group">
<label for="uname">Username</label>
<input type="text" name="uname" id="uname" class="form-control">
<p class="alert alert-dismissable" id="mes"></p>
</div>
<div class="form-group">
<label for="upass">Password</label>
<input type="password" name="upass" id="upass" class="form-control">
</div>
<button type="button" class="btn btn-success" id="loginbutton">Login</button>
</form><br>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-success">
<button type="button" class="btn btn-warning" id="userinfo">User info</button>
<div class="jumbotron" id="content">

</div>
</div>
</div>
</div>
<script src="../src/js/jquery-1.12.0.min.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#uname").keyup(function(e) {
        var uname = $("#uname").val().length;
		if(uname > 3){
			$.post("p5.php",{
				name : "username",
				uname : $("#uname").val(),
				rand : Math.random()
				},
			function(data){
				if(data != ''){
					$("#mes").text(data);
					}
					else{
						alert("Error");
						}
				});
			}
    });
	$("#userinfo").click(function(){
	$.post("p6.php",{
		name : 'userinfo',
		rand : Math.random()
		},
		function(data){
			$("#content").html(data);
			});
	});
});
</script>
</body>
</html>