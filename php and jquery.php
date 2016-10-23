<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../src/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
ul{border:1px solid black; list-style:none;
margin:0pt;padding:0pt;float:left;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:12px;width:300px;}
li{padding:10px 5px;border-bottom:1px solid black;}
</style>
</head>

<body>
<div class="container">
<form>
<p>
Show list of:
<select id="choice">
<option value="">select</option>
<option value="good">Good Guys</option>
<option value="bad">Bad Guys</option>
</select>
</p>
<p id="result"></p>
</form>
</div>
<script src="../src/js/jquery-1.12.0.js"></script>
<script src="../src/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
    $("#choice").change(function(e) {
        if($(this).val() != ''){
			$.get("php and jquery data.php",{
				what : $(this).val()},
				function(data){
					$("#result").html(data);
					});
				}
    });
});
</script>
</body>
</html>