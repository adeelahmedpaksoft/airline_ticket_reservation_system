<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
<center>
<h2>Create New Account</h2>
</center>
	<form action="user_add.php" method="POST" id="signup-frm">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact</label>
			<input type="text" name="contact" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
		<button type="submit" class="button btn btn-info btn-sm" name="add">Create</button>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
