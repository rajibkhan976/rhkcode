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
<form id="myform">
<ul>
<li><label>Email:</label>
<input type="text" name="email" id="em"/></li>
<li><label>Full Name</label>
<input type="text" name="fullName"/></li>
<li>
<label>Sex</label>
<input type="radio" name="sex" value="M"/>Male
<input type="radio" name="sex" value="F"/>Female
</li>
<li>
<label>Country</label>
<select name="country">
<option value="IN">India</option>
<option value="UK">UK</option>
<option value="US">USA</option>
</select>
</li>
<li>
<label>Newsletter</label>
<input type="checkbox" name="letter"/>Send me more
information</li>
<li>
<input type="button" value="GO" id="gobtn"/>
</li>
</ul>
</form>
</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#gobtn").click(function(){
		alert($("#myform").serialize());
		if($("#em").val() == ''){
			alert("Give emailid !");
			return;
			}
			var fv = $("#myform").serialize();
			$.post("serialize server.php",
			fv,
			function(data){
				alert(data);
				});
		});
});

</script>
</body>
</html>