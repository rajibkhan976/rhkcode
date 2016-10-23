<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../src/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<section class="container">
<input type="button" id="bt" value="Create me">
<div class="fut">Already exists.</div>
</section>
<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
    $("#bt").click(function(e) {
        $("section").append("<div class='fut'>New div.</div>");
    });
	$("section").on("click","div",function(){
		$(this).css({'color':'red','background-color':'#090'}).html("You clicked me");
		});
});

</script>
</body>
</html>