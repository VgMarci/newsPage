
<?php
session_start();
require_once('includes/server.php');


$user_name = $_POST['user_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE user_name = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$user_name, $password]);



if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0 ){
		$_SESSION['userlogin'] = $user;
		  echo 'Sikeres bejelntkezés!';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}