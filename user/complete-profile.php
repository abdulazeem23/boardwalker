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
				<div class="avatar-upload">
					<div class="avatar-edit">
						<input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
						<label for="imageUpload" class="xy-center">
							<img src="assets/images/upload.png" alt="img">
						</label>
					</div> 
					<div class="avatar-preview">
						<div id="imagePreview" style="background-image: url('assets/images/mem2.png');">
						</div>
					</div>
				</div>
				<div class="form-group logInput mb-3">
					<label for="">User Name</label>
					<input type="text" placeholder="john Smith">
					<span class="absIcon"><img src="assets/images/user-icon.png" alt="img" class="w-100"></span>
				</div>
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
				<div class="form-group logInput mb-3">
					<label for="">Location</label>
					<input type="text" placeholder="lorem ipsum lorem ipsum">
					<span class="absIcon"><img src="assets/images/marker-icon.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group">
					<button class="genBtn logBtn mb-4" type="button">Submit</button>	
				</div>
			</form>
		</div>
	</div>
</section>

<?php include 'includes/footer-links.php';?>