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
<div class="jumbotron">
<h1>Welcome to jQuery Animation</h1>
<p>some paragraph content</p>
</div>
<div style="position:relative;height:100px;">
<div id="anima" style="background:#98bf21;height:100px;width:100px;position:absolute;">animationdiv</div></div>
<hr style="clear:both">
<button id="fadein">fade In</button>
<button id="fadeout">fade Out</button>
<button id="hide">hide</button>
<button id="show">show</button>
<button id="anim">Animate</button>
</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#fadein").click(function(e) {
        $(".jumbotron").fadeIn(3000);
    });
	$("#fadeout").click(function(e) {
        $(".jumbotron").fadeOut(3000);
    });
	$("#show").click(function(e) {
        $(".jumbotron").show(3000);
    });
	$("#hide").click(function(e) {
        $(".jumbotron").hide(3000);
    });
	$("button#anim").click(function(e) {
        $("#anima").animate({left: '600px',
		opacity: '0.5',
		height: '150px',
		width: '150px'}, 3000);
    });
});
</script>
</body>
</html>