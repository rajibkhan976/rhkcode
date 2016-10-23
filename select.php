<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../src/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
<input type="text"/>
<ul>
<li>India</li>
<li>USA</li>
<li>UK</li>
<li>France</li>
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
<script src="../src/js/jquery-1.11.3.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function ()
{
/*$('input:text').bind(
{focus: function()
{$(this).val('');},
blur: function(){
$(this).val('Enter some text');}
});*/
$('input:text').focus(function(){	
	//$(this).val('');
	});
$('input:text').blur(function(){
	if($(this).val() == ''){
	$(this).val('Enter some text');
	}
	});	

/*$('li').bind('click', function()
{
$(this).css('background-color', 'red');
});*/
$("li").click(function(e) {
	if($(this).css("color") != "rgb(255, 0, 0)"){
    $(this).css("color","red");
	}
	else {
	$(this).css("color","green");	
		}
});


/*$('select').bind('change', function()
{
alert('You selected: '+ $(this).val());
});*/
$("select").change(function(e) {
    alert($(this).val());
});


$('input:button').bind('click', function()
{
$('select').unbind('change');
});
});
</script>
</body>
</html>