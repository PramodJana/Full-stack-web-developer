<?php
	
	// Constants
	define("TITLE", "Intro to Functions");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 23;

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
				
				<h3>Using <code>sort()</code></h3>
				<?php
					// Custom array
					$dinner = array("Meat", "Potatoes", "Beans", "Rice");
					
					// Add the array as a parameter to sort() function
					sort($dinner);
					
					// Print the sorted array
					foreach ($dinner as $ingredient) {
					    echo "$ingredient <br>";
					}
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					// Custom array
					$dinner = array("Meat", "Potatoes", "Beans", "Rice");
					
					// Add the array as a parameter to sort() function
					rsort($dinner);
					
					// Print the sorted array
					foreach ($dinner as $ingredient) {
					    echo "$ingredient <br>";
					}
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					
					// String of text with upper and lowercase characters
					$text = "Twinkle Twinkle little STAR!";
					
					// Run the $text variable through strtolower()
					// Re-assign the value to the $text variable
					$text = strtolower($text);
					
					// See what you get!
					echo $text;
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					
					$password = "MyPassword";
					echo "Before: $password <br>";
					
					$password = sha1($password);
					echo "After: $password";
					
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
