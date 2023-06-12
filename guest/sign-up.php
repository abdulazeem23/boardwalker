<?php include 'includes/header-links.php';?>

<section class="initial-sec">
	<div class="initial-row">
		<div class="leftCol">
			<a href="javascript:void(0)">
				<img src="assets/images/logo.png" alt="">
			</a>
		</div>
		<div class="rightCol xy-center p-3">
			<form class="loginForm">
				<h1 class="loginHeading text-center">Sign Up</h1>
				<p class="loginDesc mb-3 text-center">Please enter details to Signup</p>
				<div class="form-group logInput mb-3">
					<label for="">Email</label>
					<input type="text" placeholder="john.smith@example.com">
					<span class="absIcon"><img src="assets/images/email-icon.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group logInput mb-3">
					<label for="">Phone Number</label>
					<input type="tel:(123-123-1234)" placeholder="123-123-1234">
					<span class="absIcon"><img src="assets/images/phone-icon.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group">
					<button class="genBtn logBtn mb-4" type="button">Sign Up</button>	
				</div>
				<p class="breakText mb-3">Or Signup With</p>
				<button class="genBtn logBtn mb-3 mt-4 clrG" type="button"> <i class="fa-brands fa-google me-2"></i> Continue with Google</button>
				<button class="genBtn logBtn clrA" type="button"><i class="fa-brands fa-apple me-2"></i> Continue with Apple</button>
			</form>
		</div>
	</div>
</section>

<?php include 'includes/footer-links.php';?>
