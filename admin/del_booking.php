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
include 'db_connect.php'; 
$id=$_GET['data-id'];
$errors = array();
	// LOGIN USER

  	$query = "DELETE FROM booked_flight WHERE id='$id'";
  	$results = mysqli_query($conn, $query);
	
	
  	if (mysqli_num_rows($results) == 1) {
	  ?>
	 <script>
	window.alert("Booking Deleted Successfully.");
	location.href ='index.php?page=booked';
	</script>
  	 
  	  <?php
  	}else 
	{
		?>
<script>
	window.alert("Booking Deleted Successfully.");
	location.href ='index.php?page=booked';
</script>	
		
	<?php	
	
  	}
  
		
	

	
	

	//header('location: index.php?page=login');
?>
</body>
</html>