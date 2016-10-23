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
<input type="text"/>
<ul>
<li>India</li>
<li>USA</li>
<li>UK</li>
<li id="c">France</li>
</ul>
<select>
<option value="Africa">Africa</option>
<option value="Antarctica">Antarctica</option>
<option value="Asia">Asia</option>
<option value="Australia">Australia</option>
<option value="Europe">Europe</option>
<option value="North America">North America</option>
<option value="South America">South America</option>
</select>
<input type="button" value="Unbind select box"/>
</div>
<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
    $("input:text").focus(function(e) {
        $(this).val('');
    });
	$("input:text").blur(function(e) {
        if($(this).val() == '')
		$(this).val('Enter some text');
    });
	$("#c").click(function(e) {
        if($(this).css("color") != "rgb(255,0,0)")
		{$(this).css("color","red");}
		else{$(this).css("color","green");}
    });
	$("li").unbind("click",function(){
		$(this).bind("click",function(){
			$(this).css("color","green");
			});
		});
	$("select").change(function(e) {
        alert($(this).val());
    });
	$("input:button").bind("click",function(){
		$("select").unbind("change");
		});
});
</script>
</body>
</html>