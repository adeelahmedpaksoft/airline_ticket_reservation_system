<?php
	
include 'admin/db_connect.php'; 

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
		$sql = "INSERT INTO user (name, contact, address, email, password) VALUES ('$name', '$contact', '$address', '$email', '$password')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php?page=login');
?>