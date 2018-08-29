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
								Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Libero volutpat sed cras ornare arcu dui vivamus. Facilisis mauris sit amet massa.
								Facilisis volutpat est velit egestas dui id ornare arcu odio.
								Vulputate sapien nec sagittis aliquam malesuada bibendum. Odio
								aenean sed adipiscing diam donec. Egestas fringilla phasellus
								faucibus scelerisque. Nec dui nunc mattis enim ut tellus. Amet
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
							<form>
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Enter your Name">
								</div>
								<div class="form-group">
									<label for="contact">Contact Number</label>
									<input type="text" class="form-control" id="contact" placeholder="Enter your Contact Number">
								</div>
								<div class="form-group">
									<label for="email">E-mail Address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter your E-mail Address">
								</div>
								<div class="form-group">
									<label for="feedback">Feedback</label>
									<textarea class="form-control" id="feedback" rows="3">Enter your Feedback</textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
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
