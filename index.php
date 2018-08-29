<!DOCTYPE html>
<html>
	<head>

		<?php include('components/links.php'); ?>

		<title>Gymkhana, IIT ISM Dhanbad</title>

	</head>
	<body>

		<?php include('components/header.php'); ?>

		<?php include("components/carousel.php"); ?>

		<div class="body">
			<section class="single-section">
				<h2 class="heading">Students Gymkhana, IIT (ISM) DHANBAD</h2>
				<div class="row remove-extra-space">
					<div class="col-md-8 remove-extra-space">
						<div class="inner-body about-card">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Libero volutpat sed cras ornare arcu dui vivamus. Facilisis mauris sit amet massa.
							Facilisis volutpat est velit egestas dui id ornare arcu odio.
							Vulputate sapien nec sagittis aliquam malesuada bibendum. Odio
							aenean sed adipiscing diam donec. Egestas fringilla phasellus
							faucibus scelerisque. Nec dui nunc mattis enim ut tellus. Amet
							massa vitae tortor condimentum lacinia quis. Nulla facilisi nullam
							vehicula ipsum a arcu cursus. At auctor urna nunc id cursus.
							Est placerat in egestas erat imperdiet sed. Blandit turpis cursus
							in hac habitasse platea dictumst quisque sagittis. Bibendum enim
							facilisis gravida neque convallis a cras semper. Sapien eget mi
							proin sed libero. In mollis nunc sed id semper. Ut consequat semper
							viverra nam libero justo laoreet sit. Adipiscing at in tellus integer
							feugiat scelerisque varius.
						</div>
					</div>
					<div class="col-md-4 remove-extra-space">
						<div class="inner-body happenings-card">
							<h4 class="card-heading">HAPPENINGS</h4>
							<ul>
								<?php for($i=1; $i<=5; $i++){ ?>
									<li>
										<i class="far fa-arrow-alt-circle-right"></i> &nbsp; Lorem ipsum dolor sit amet,
									</li>
								<?php } ?>
							</ul>
							<span>Archive</span>
						</div>
					</div>
				</div>
			</section>
			<section class="single-section" style="margin-top: 5%;">
				<h2 class="heading">President's Word</h2>
				<div class="row remove-extra-space">
					<div class="col-md-2 remove-extra-space">
						<div class="inner-body thumb">
							<img src="assets/images/example2.jpeg" class="img-fluid" />
						</div>
					</div>
					<div class="col-md-6 remove-extra-space">
						<div class="inner-body about-card">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Libero volutpat sed cras ornare arcu dui vivamus. Facilisis mauris sit amet massa.
							Facilisis volutpat est velit egestas dui id ornare arcu odio.
							Vulputate sapien nec sagittis aliquam malesuada bibendum. Odio
							aenean sed adipiscing diam donec. Egestas fringilla phasellus
							faucibus scelerisque. Nec dui nunc mattis enim ut tellus. Amet
							massa vitae tortor condimentum lacinia quis. Nulla facilisi nullam
							vehicula ipsum a arcu cursus. At auctor urna nunc id cursus.
							Est placerat in egestas erat imperdiet sed. Blandit turpis cursus
							in hac habitasse platea dictumst quisque sagittis. Bibendum enim
							facilisis gravida neque convallis a cras semper. Sapien eget mi
							proin sed libero. In mollis nunc sed id semper. Ut consequat semper
							viverra nam libero justo laoreet sit. Adipiscing at in tellus integer
							feugiat scelerisque varius.
						</div>
					</div>
					<div class="col-md-4 remove-extra-space">
						<div class="inner-body">
							<div class="achievements-card">
								<ul class="nav nav-tabs tabs">
									<li class="nav-item">
										<a id="awards" class="nav-link active"><h6>Awards</h6></a>
									</li>
									<li class="nav-item">
										<a id="newsletters" class="nav-link"><h6>Newsletters</h6></a>
									</li>
								</ul>
								<ul id="awards-content" class="content">
									<?php for($i=1; $i<=3; $i++){ ?>
										<li>
											<i class="far fa-arrow-alt-circle-right"></i> &nbsp; Lorem ipsum dolor sit amet,
										</li>
									<?php } ?>
								</ul>
								<ul id="newsletters-content" class="content" style="display: none;">
									<?php for($i=1; $i<=3; $i++){ ?>
										<li>
											<i class="far fa-arrow-alt-circle-right"></i> &nbsp; ipsum dolor sit amet,
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php include('components/footer.php'); ?>

		<?php include('components/scripts.php'); ?>

	</body>
</html>
