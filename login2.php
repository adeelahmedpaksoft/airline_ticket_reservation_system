<?php
include('header.php');
    include('admin/db_connect.php');
	?>
	<style>
    	header.masthead {
		  background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
	<body id="page-top">
	<div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
	   
	   
<div class="container-fluid">
<center>
<h2>LOG IN</h2>
</center>	
	<form action="login_user.php" method="POST" id="login-frm">
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
			<small><a href="index.php?page=signup2" id="new_account">Create New Account</a></small>
		</div>
		<button type="submit" class="button btn btn-info btn-sm" name="login_user">Login</button>
	</form>
</div>

</body>
<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>

<script>
	$('#new_account').click(function(){
		uni_modal("Create an Account",'signup.php?redirect=index.php?page=checkout')
	})
	
</script>