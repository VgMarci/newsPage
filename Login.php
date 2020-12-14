<?php 
    session_start();
    if(isset ($_SESSION['userlogin'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>

<title>Log in</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


</div>
	<div class="container">
	<div class= "row">
		<div class="col-sm-3">
		<div>
		
			<h2>Log in</h2>

		</div>

		<form action= "login.php" method="post">
			<div>
			<hr class="mb-3">
			<label for= "user_name">Username </label>
			<input type="text" class="form-control" id="user_name" name="user_name" required>
		</div>
		<div>
			<label for= "password">Password  </label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
	
		<hr class="mb-3">
		<input type="button" class="btn btn-primary" name="button" id="login" value="Login"</input>
        

		<p>Do not a user? <a href="registration.php"><b> Register here</b></a></p>
	
	
	
	
			</form>

		</div>
	</div>
	</div>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var user_name = $('#user_name').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {user_name: user_name, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>


