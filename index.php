<!DOCTYPE html>
<html>
	<head>

		<?php include('components/links.php'); ?>

		<title>SPEC, IIT ISM Dhanbad</title>

	</head>
	<body>

		<?php include('components/header.php'); ?>

		<?php include("components/carousel.php"); ?>

		<div class="body">
			<section class="single-section">
				<h2 class="heading">ABOUT Sports Club, IIT (ISM) DHANBAD</h2>
				<div class="row remove-extra-space">
					<div class="col-md-8 remove-extra-space">
						<div class="inner-body about-card">
							The professional world needs human force skilled in not only IQ but also EQ. The professional spheres require people to learn how to be work as a part of a team, how to be with the people who might not be complimentary to your own self but working with each other to realise each other's potentials to the maximum, how to take orders and give orders when time be,  how to with your team to end of the line. Looks like a lot to do doesn't it? Well, we have got a simple solution for you join a sports club. Welcome to our family of IIT ISM's Sports clubs!😀
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
							COMING UP
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
