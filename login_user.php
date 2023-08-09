<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>
<?php
	session_start();
include 'admin/db_connect.php'; 

$errors = array();
	// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT name FROM user WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($results)) {
    $name = $row['name'];
    
}
	
  	if (mysqli_num_rows($results) == 1) {
	  
	 
  	  $_SESSION['username'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php?page=home');
  	}else 
	{
		?>
<script>
	window.alert("Wrong Username or Password!Try Again");
	location.href ='index.php?page=login';
</script>	
		
	<?php	
	
  	}
  }
}
		
	

	
	

	//header('location: index.php?page=login');
?>
</body>
</html>