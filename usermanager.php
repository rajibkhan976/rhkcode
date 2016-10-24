<html>
<head>
<title>
My Code
</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.5-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row"></div>
		<div class="col-md-6">
<div class="jumbotron">
<h1>User registration form</h1> <br/>
<form action="#" method="post">
User name: <input type="text" name="unam" id="unam"> <br/> <br/>
<p id="show" class="text-danger"></p>
Uesr email id: <input type="email" name="uemail" id="uemail"> <br/> <br/>
User password: <input type="password" name="upass" id="upass"> <br/> <br/>
<button type="button" id="submitbutton" class="btn btn-success">Submit</button> 
<button type="button" class="btn btn-warning" id="display">Display</button>
<br/> <br/>
<p id="message" class="text-danger"></p>
</form>
</div>
</div>
<div class="col-md-6 jumbotron" id="editform"></div>
</div>
</div>
<div id="userinfo"></div>
</body>
<script src="jquery-3.1.1.js"></script>
<script src="bootstrap-4.0.0-alpha.5-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('#editform').hide();
	$( "#unam" ).keyup(function() {
		var unam = $('#unam').val();
		if(unam.length > 3){
		$.post('usercontroller.php',
		{
		check : 'rakib',
		unam : unam,
		rand : Math.random()	
			},
		function(data, status){
			$('#show').html(data);
			});
		}
});

$('#submitbutton').click(function(){
	$.post('usercontroller.php',
	{
	add : 'add',
	unam : $('#unam').val(),
	uemail : $('#uemail').val(),
	upass : $('#upass').val(),
	rand2 : Math.random()
		},
	function(data, status){
		$('#message').html(data);
		});
	});
	
	$('#display').click(function(){
		$.post('usercontroller.php',
		{
			sel : 'sel'
			},
			function(data, status)
			{
				$('#userinfo').html(data);
				$('.edituser').click(function(){
					var uid = $(this).data('usereditid');
					$.post('usercontroller.php',
					{
						manipulate : 'manipulate',
						uid : uid
						},
						function(data, status){
							$('#editform').html(data);
							$('#editform').show();
							
							$( "#suname" ).keyup(function() {
							var sunam = $('#suname').val();
							if(sunam.length == 3){
							$.post('usercontroller.php',
							{
							recheck : 'rerakib',
							sunam : sunam,
							rand : Math.random()	
							},
							function(data, status){
							$('#hint').html(data);
							});
						}
							});
							
							$('#savebutton').click(function(){
						var suid = $('#suid').val();
						var suname = $('#suname').val();
						var suemail = $('#sumail').val();
						var supass = $('#supass').val();
						$.post('usercontroller.php',
						{
						updateuser : 'updateuser',
						suid : suid,
						suname : suname,
						suemail : suemail,
						supass : supass	
							},
							function(data, status){
								$('#action').html(data);
								location.reload();
								});
						});
							});
					});
					
					$('.deleteuser').click(function(){
								var duid = $(this).data('userdeleteid');
								$.post('usercontroller.php',
								{
								deleteuser : 'deleteuser',
								duid : duid	
									},
									function(data,status){
										alert(data);
										location.reload();
									});
								});
			});
		});
		});
</script>
</html>

