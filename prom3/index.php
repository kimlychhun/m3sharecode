<?php
	$page = "home.php";
	if(isset($_GET['p'])) 
	{
		$p = $_GET['p'];
		switch($p) {
			case "shop":
				$page = "shop.php";
				break;
			case "about":
				$page = "about.php";
				break;
			case "services":
				$page = "services.php";
				break;
			case "blog":
				$page = "blog.php";
				break;
			case "contact":
				$page = "contact.php";
				break;
		}
	}
?>
<!doctype html>
<html lang="en">
	<?php include('./includes/head.php') ?>
	<body>

		<!-- Start Header/Navigation -->
		<?php include('./includes/navbar.php') ?>
		<!-- End Header/Navigation -->

		<?php include $page ?>	

		<!-- Start Footer Section -->
		<?php include('./includes/footer.php') ?>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
