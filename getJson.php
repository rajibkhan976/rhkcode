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
<p>Click on the button to load result.json file:</p>
<div id="stage">
STAGE
</div>
<input type="button" id="driver" value="Load Data" />

</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#driver").click(function(e) {
        $.getJSON("result.json",function(data,status,xhr){
			var user = "<p>Name: " + data.name + "</p><p> Age: " + data.age + "</p><p> Gender: " + data.gender + "</p>";
			$("#stage").html(user);
			});
    });
});

</script>
</body>
</html>