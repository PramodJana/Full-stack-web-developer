<?php
	
	// Constants
	define("TITLE", "Logical Operators");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 15;
	
    $username = "johnnyboy";
    $password = "qwerty";
    
    $cartTotal = 19.99;
    $couponCode = "DiscountPlease";

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
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username == "johnnyboy" and $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cartTotal > 15 or $couponCode == "DiscountPlease") {
						echo "You get a discount!";
					} else {
						echo "You don't get a discount!";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownDog = true;
					
					if (!$ownDog) {
						echo "You do not own a dog.";
					} else {
						echo "You own a dog.";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "johnnyboy" && $password == "qwerty") {
						echo "<p>Login info is correct!</p>";
					} else {
						echo "<p>Wrong login info</p>";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == "DiscountPlease") {
						echo "You get a discount!";
					} else {
						echo "You don't get a discount!";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
