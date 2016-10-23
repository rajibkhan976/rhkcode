<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../src/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
ul { background-color:#DCDCDC; list-style:none; margin:0pt;
padding:0pt; width:350px;}
li { padding:10px; }
</style>
</head>

<body>
<div class="container">
<ul>
<li>
<input type="checkbox" id="handle">
<label for="handle">
<strong>Toggle All Checkbox</strong></label>
</li>
<li>
<input type="checkbox" class="toggle"/>
<label>A Study in Scarlet</label>
</li>
<li>
<input type="checkbox" class="toggle"/>
<label>The Sign of the Four</label>
</li>
<li>
<input type="checkbox" class="toggle"/>
<label>The Adventures of Sherlock Holmes</label>
</li>
<li>
<input type="checkbox" class="toggle"/>
<label>The Valley of Fear</label>
</li>
<li>
<input type="checkbox" class="toggle"/>
<label>His Last Bow</label>
</li>
<li><input type="button" id="getValue"
value="Get Selected Values"/></li>
<li id="selected"></li>
</ul>

</div>
<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
    $("#handle").click(function(){
		$(".toggle").prop("checked",$("#handle").prop("checked"));
		});
		$(".toggle").click(function(e) {
            if($(".toggle:checked").length == $(".toggle").length)
			$("#handle").attr("checked","true");
			if($(".toggle:checked").length < $(".toggle").length)
			$("#handle").removeAttr("checked");
        });
		$("#getValue").click(function(){
			var values = '';
			if($(".toggle:checked").length)
			{
				$(".toggle:checked").each(function(index, element) {
                    values += $(this).next('label').html() + ',';
                });
				$("#selected").html("Selected values are " + values);
			}
				else
				{$("#selected").html("Nothing selected !");}
			});
});

</script>
</body>
</html>