<?php

	try{
		require_once('config/dbc.php');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		$error = $e->getMessage();
	}

	if(isset($error)){
		echo $error;
	}

?>

<!DOCTYPE html>
<html>
	<head>

		<?php include('components/links.php'); ?>

		<title>Gymkhana, IIT ISM Dhanbad</title>

	</head>
	<body>

		<?php include('components/header.php'); ?>

		<div class="body office">
			<section class="single-section" style="background-color: #eee">
				<h4 class="heading">ADMINISTRATIVE BODY</h4>
				<div class="row remove-extra-space">

					<?php
						$sql = "SELECT * FROM `office` WHERE `post` LIKE '%Secretary' OR `post` LIKE '%Nominee' ORDER BY `post`";
						$result = $db->query($sql);

						while($row = $result->fetch(PDO::FETCH_ASSOC)){
					?>

						<div class="col-md-4 remove-extra-space">
							<div class="inner-body person-card">
								<img src="assets/images/avatar/<?php echo $row['avatar']; ?>" class="img-fluid" />
								<div class="details">
									<div class="post"><?php echo $row['post']; ?></div>
									<div class="name">
										<a href="<?php echo $row['fb_profile']; ?>"><?php echo $row['name']; ?></a>
									</div>

									<?php if($row['phone'] != null){ ?>
										<div class="phone">
											<a href="tel:<?php echo $row['phone']; ?>"><i class="fas fa-phone"></i> <?php echo $row['phone']; ?></a>
										</div>
									<?php } ?>

									<?php if($row['email'] != null){ ?>
										<div class="email">
											<a href="mailto:<?php echo $row['email']; ?>"><i class="far fa-envelope"></i> <?php echo $row['email']; ?></a>
										</div>
									<?php } ?>

								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</section>

			<section class="single-section">
				<h4 class="heading">MEDIA TEAM</h4>
				<div class="row remove-extra-space">

					<?php
						$sql = "SELECT * FROM `office` WHERE `post` LIKE '%Head' ORDER BY `name`";
						$result = $db->query($sql);

						while($row = $result->fetch(PDO::FETCH_ASSOC)){
					?>

						<div class="col-md-4 remove-extra-space">
							<div class="inner-body person-card">
								<img src="assets/images/avatar/<?php echo $row['avatar']; ?>" class="img-fluid" />
								<div class="details">
									<div class="post"><?php echo $row['post']; ?></div>
									<div class="name">
										<a href="<?php echo $row['fb_profile']; ?>"><?php echo $row['name']; ?></a>
									</div>

									<?php if($row['phone'] != null){ ?>
										<div class="phone">
											<a href="tel:<?php echo $row['phone']; ?>"><i class="fas fa-phone"></i> <?php echo $row['phone']; ?></a>
										</div>
									<?php } ?>

									<?php if($row['email'] != null){ ?>
										<div class="email">
											<a href="mailto:<?php echo $row['email']; ?>"><i class="far fa-envelope"></i> <?php echo $row['email']; ?></a>
										</div>
									<?php } ?>

								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</section>

			<section class="single-section" style="background-color: #eee">
				<h4 class="heading">SECRETARIES OF INDIVIDUAL SPORTS</h4>
				<div class="row remove-extra-space">

					<?php
						$sql = "SELECT * FROM `office` WHERE `post` LIKE 'Secretary%' ORDER BY `post`";
						$result = $db->query($sql);

						while($row = $result->fetch(PDO::FETCH_ASSOC)){
					?>

						<div class="col-md-4 remove-extra-space">
							<div class="inner-body person-card">
								<img src="assets/images/avatar/<?php echo $row['avatar']; ?>" class="img-fluid" />
								<div class="details">
									<div class="post"><?php echo $row['post']; ?></div>
									<div class="name">
										<a href="<?php echo $row['fb_profile']; ?>"><?php echo $row['name']; ?></a>
									</div>

									<?php if($row['phone'] != null){ ?>
										<div class="phone">
											<a href="tel:<?php echo $row['phone']; ?>"><i class="fas fa-phone"></i> <?php echo $row['phone']; ?></a>
										</div>
									<?php } ?>

									<?php if($row['email'] != null){ ?>
										<div class="email">
											<a href="mailto:<?php echo $row['email']; ?>"><i class="far fa-envelope"></i> <?php echo $row['email']; ?></a>
										</div>
									<?php } ?>

								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</section>
		</div>

		<?php include('components/footer.php'); ?>

		<?php include('components/scripts.php'); ?>

	</body>
</html>
