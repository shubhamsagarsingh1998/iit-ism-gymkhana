<?php
	error_reporting(0);

	$reqURI = end(explode('/', $_SERVER['REQUEST_URI']));
?>

<div class="row remove-extra-space header">
	<div class="col-md-2 remove-extra-space logo">
		<img src="assets/images/ismlogo.png" class="img-fluid" />
	</div>
	<div class="col-md-8 remove-extra-space">
		<h1>STUDENTS' GYMKHANA</h1>
		<h4>Indian Institute of Technology (Indian School of Mines) - Dhanbad</h4>
	</div>
</div>
<div class="sections-navbar">
	<div class="row remove-extra-space">
		<div class="col-md-1 remove-extra-space section-tab <?php if($reqURI == '' || $reqURI == 'index.php') echo 'active-section-tab'; ?>" onclick="location='index.php'">HOME</div>
		<div class="col-md-1 remove-extra-space section-tab <?php if($reqURI == 'gallery.php') echo 'active-section-tab'; ?>" onclick="location='gallery.php'">GALLERY</div>
		<div class="col-md-1 remove-extra-space section-tab <?php if($reqURI == 'office.php') echo 'active-section-tab'; ?>" onclick="location='office.php'">OFFICE</div>
		<div class="col-md-1 remove-extra-space section-tab <?php if($reqURI == 'contact.php') echo 'active-section-tab'; ?>" onclick="location='contact.php'">CONTACT</div>
	</div>
</div>
