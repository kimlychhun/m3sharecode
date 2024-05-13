<?php
	$page = "home.php";
	$slider = true;
	$aside = true;
	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		switch($p)
		{
			case "shop":
				$page = "shop.php";
				$slider = false;
				break;
			case "contact":
				$page = "contact.php";
				$slider = false;
				$aside = false;
				break;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"?>

<body>
	<?php include "includes/header.php"?>
	<?php if($slider) include "includes/slider.php"?>
	<section>
		<div class="container">
			<div class="row">
			<?php if($aside) include "includes/aside.php"?>
			<?php include $page ?>
			</div>
		</div>
	</section>
	<?php include "includes/footer.php"?>
</body>
</html>