<?php 
require_once('includes/server.php');
?>

<?php
	if(isset($_POST)){

		$user_name	 = $_POST['user_name'];
		$password 	 = $_POST['password'];
		

		$sql= "INSERT INTO user (user_name, password) VALUE (?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert-> execute([$user_name, $password]);
		
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were error';
		}
	
	}else{
        echo 'No data';
    }
    ?>
