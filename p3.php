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
<div id="img" class="col-sm-4">

</div>
</div>
<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
    var imag = ['World.jpg','Bing_Profile.jpg','Bing_Building.jpg','jony.jpg'];
	$.each(imag,function(k,v){alert(k + " : " + v);});
	var tag = '';
	$.each(imag,function(ke,va){
		tag += '<img src="'+va+'" class="img-responsive">';
		});
		$("#img").html(tag);
		$("img").error(function(e) {
            $(this).replaceWith('<img src="Rajib.jpg" alt="Could not found image">');
        });
});
</script>
</body>
</html>