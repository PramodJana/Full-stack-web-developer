<?php
	
	// Constants
	define("TITLE", "Arrays");
	
	// Custom Variables
	$my_name	= "Brad Hussey";
	$lesson_num	= 6;
	
	// Moustache Array
	$moustaches = array("Handlebar", "Salvador Dali", "Fu Manchu");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $moustaches[0]; ?></li>
					<li><?php echo $moustaches[1]; ?></li>
					<li><?php echo $moustaches[2]; ?></li>
				</ul>
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
