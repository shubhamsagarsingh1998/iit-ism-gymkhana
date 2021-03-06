<!DOCTYPE html>
<html>
	<head>

		<?php include('components/links.php'); ?>

		<title>Gymkhana, IIT ISM Dhanbad</title>

	</head>
	<body>

		<?php include('components/header.php'); ?>

		<div class="body contact">
			<section class="single-section">
				<div class="row remove-extra-space">
					<div class="col-md-5 remove-extra-space">
						<div class="inner-body">
							<h2 class="heading">Contact us</h2>
							<div class="contact-details">
								<div class="address single-detail">
									<div style="font-weight: bold;">Address of office of Gymkhana:</div>
									<div>Mahanadi Hall of Residence,</div>
									<div>Argul Campus IIT Bhubaneswar,</div>
									<div>Odisha, 752050</div>
								</div>
								<div class="email single-detail">Email ID: office.gymkhana@iitbbs.ac.in</div>
								<div class="phone single-detail">Phone No.: 06742114053</div>
							</div>
						</div>
					</div>
					<div class="col-md-7 remove-extra-space">
						<div class="inner-body">
							<img src="assets/images/example.jpeg" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>
			<section class="single-section" style="margin-top: 5%;">
				<div class="row remove-extra-space">
					<div class="col-md-8 remove-extra-space">
						<h2 class="heading">FEEDBACK</h2>
						<div class="inner-body feedback-form">

							<p class="alert"></p>

							<form>
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" placeholder="Enter your Name">
								</div>
								<div class="form-group">
									<label for="contact">Contact Number</label>
									<input type="text" class="form-control" name="contact" placeholder="Enter your Contact Number">
								</div>
								<div class="form-group">
									<label for="email">E-mail Address</label>
									<input type="email" class="form-control" name="email" placeholder="Enter your E-mail Address">
								</div>
								<div class="form-group">
									<label for="feedback">Feedback</label>
									<textarea class="form-control" id="feedback" name="feedback" rows="3" placeholder="Enter your Feedback"></textarea>
								</div>
								<button class="btn btn-outline-primary">SUBMIT</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php include('components/footer.php'); ?>

		<?php include('components/scripts.php'); ?>

	</body>
</html>
