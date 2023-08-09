<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
	  
  	
  	header('location: get_fields.php');
  }
  if (!isset($_SESSION['username'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login2.php");
  }
?>
<?php for($i = 0; $i < $_GET['count']; $i++ ): ?>

<div class="row">
	<div class="col-md-6">
		<label class="control-label">Name</label>
		<input type="text" name="name[]" class="form-control">
	</div>
	<div class="col-md-6">
		<label class="control-label">Contact Number</label>
		<input type="text" name="contact[]" class="form-control">
	</div>
</div>

<div class="row">
<div class="form-group col-md-12">
	<label class="control-label">Address</label>
	<textarea name="address[]" id="" cols="30" rows="2" class="form-control"></textarea>
</div>
</div>

<?php endfor; ?>
<center>
<h3>Payment</h3>
</center>
<div class="row">
	<div class="col-md-6">
		<label class="control-label">Card#</label>
		<input type="text" name="card" class="form-control">
	</div>
	<div class="col-md-6">
		<label class="control-label">Valid Date</label>
		<input type="text" name="date" class="form-control">
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<label class="control-label">CVC</label>
		<input type="text" name="cvc" class="form-control">
	</div>
	
</div>

<a href="http://creditcardimagelogos.com" title=”paypal-Creditcards-253*80.gif”><img src="http://creditcardimagelogos.com/wp-content/themes/e838pqefv3ejmkevzirye533556/files/logos/new/cdn_subdomain/paypal_mc_visa_amex_disc_echeck_253x80.gif" alt="paypal-Creditcards-253*80.gif"/></a></p>

<br>