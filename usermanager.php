<?php
session_start();
if($_SESSION['status'] != 'loggedin'){
$_SESSION['username'] = "";
header('Location: http://localhost/mycode/login.php');
}
else{$_SESSION['username'] = $_SESSION['username'];}
?>
<html>
<head>
<title>
My Code
</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.5-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-8 jumbotron">
		<h1 class="text-danger">B Global Sourcing Ltd.</h1>
		<!--button type="button" class="btn btn-info" id="registerbtn">Register</button-->
		<!--button type="button" class="btn btn-info" id="loginbtn">Login</button-->
		<button type="button" class="btn btn-info" id="display">Display</button>
		<span><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></span>
		<button type="button" class="btn btn-info" id="logoutbtn">Logout</button>
		<br/><br/>
		<p class="bg-success">
		We offer cost-effective, superior back office interactive and programming services that are tailored to your needs. Our talented team uses the latest in web and open source technologies.
		These interactive services form the backbone of our company, and satisfied clients return to bGlobal time and again to benefit from our extensive expertise, creativity and innovation.
		Our offshore production facility is located in Dhaka, Bangladesh. This allows us to offer you economical solutions that lower and offset your operating costs. We employ some of Bangladesh’s brightest programmers. 
		All of our team members hold at least a degree in computer science. Many have advanced degrees. The wage and benefits costs for our highly skilled, fluent English-speaking staff are less than half those in the West.  
		</p>
		</div>
		<div class="col-md-4 jumbotron" id="registerform">
<h1>User registration form</h1> <br/>
<form action="#" method="post">
User name: <input type="text" name="unam" id="unam"> <br/> <br/>
<p id="show" class="bg-success"></p>
Uesr email id: <input type="email" name="uemail" id="uemail"> <br/> <br/>
User password: <input type="password" name="upass" id="upass"> <br/> <br/>
<button type="button" id="submitbutton" class="btn btn-success">Submit</button> 
<br/> <br/>
<!--p id="message" class="bg-warning"></p-->
</form>
</div>
		</div>
		<div class="row">
			<div class="col-md-12 jumbotron" id="editform"></div>
		
</div>
<div id="userinfo"></div>
</body>
<script src="jquery-3.1.1.js"></script>
<script src="bootstrap-4.0.0-alpha.5-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	//$('#registerform').hide();
	$('#editform').hide();
	$('#loginform').hide();
	//$('#display').hide();
	//$('#logoutbtn').hide();
	$('#registerbtn').click(function(){
		$('#registerform').show();
		});
		/*$('#loginbtn').click(function(){
			$('#loginform').show();
			$('#userlogin').click(function(){
				var logemail = $('#logemail').val();
				var logpass = $('#logpass').val();
				$.post('usercontroller.php',
				{
				login : 'login',
				logemail : logemail,
				logpass : logpass	
					},
					function(data, status){
						if(data == "1"){
						$('#loginbtn').hide();
						alert('Login Successful');
						$('#logoutbtn').show();
						$('#display').show();
						}
						else{
							alert('Login Failed');
							}
						});
				});
			});*/
			$('#logoutbtn').click(function(){
				$.post('logout.php',
				{
					logout : 'logout'
					},
					function(data, status){
						alert(data);
						location.reload();
						});
				});
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
		//$('#message').html(data);
		alert(data);
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
							if(sunam.length > 3){
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
								//$('#action').html(data);
								alert(data);
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

