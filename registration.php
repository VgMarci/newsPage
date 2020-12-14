<?php 
require_once('includes/server.php');
?>
<!DOCTYPE html>
<html>
<head>

<title>Registration</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

?>

</div>
	<div class="container">
	<div class= "row">
		<div class="col-sm-3">
		<div>
		
			<h2>Register</h2>

		</div>

		<form action= "registration.php" method="post">
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
		<input type="submit" class="btn btn-primary" name="create" id="register" value="Sign up"</input>

		<p>Already a user<a href="login.php"><b> Log in</b></a></p>
	
	
	
	
			</form>

		</div>
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var user_name 	= $('#user_name').val();
			var password	= $('#password').val();
			
		
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'procces.php',
					data: {user_name: user_name,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}
		

		});		

		
	});
	
</script>
</body>
</html>

