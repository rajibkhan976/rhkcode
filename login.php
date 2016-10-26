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
<div class="col-md-12 jumbotron" id="loginform">
		<h1>User Login</h1>
		<form action="#" method="post">
		User email: <input type="email" id="logemail" name="logemail"><br/><br/>
		Password: <input type="password" id="logpass" name="logpass"><br/><br/>
		<button type="button" class="btn btn-primary" id="userlogin">Go</button>
		</form>
		</div>
		</div>
		</div>
		</body>
<script src="jquery-3.1.1.js"></script>
<script src="bootstrap-4.0.0-alpha.5-dist/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		
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
							window.location.href = "http://localhost/mycode/usermanager.php";
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
			});
	</script>
	</html>
