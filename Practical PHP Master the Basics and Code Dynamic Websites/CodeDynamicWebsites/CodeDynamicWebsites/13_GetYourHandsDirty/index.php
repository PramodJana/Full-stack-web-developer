<?php
	
	// Constants
	define("TITLE", "If, Else, Elseif");
	
	// Custom Variables
	$my_name	= "Brad Hussey";
	
	$species			= "Human";
	$nativeLanguage		= "English"; // Note the camelCase: http://en.wikipedia.org/wiki/CamelCase
    $yearsOnEarth 		= 25;

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
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">

				<?php
					if ($species == "Black Rhino") {
         
				        echo "<p>Welcome, Black Rhino. You and the rest of the rhinos will love this big lake.</p>";

				    } elseif ($species == "Human") {
				         
				        echo "<p>Welcome, Human! Please leave the black rhino alone.</p>";
				         
				    } else {
				         
				        echo "<p>Welcome to Earth! Your kind is unknown to us.</p>";
				         
				    }
				?>
				
				<h5>Another example:</h5>
				
				<?php
				
					if ($yearsOnEarth == 20) {
						
						echo "<p>Congratulations for being on Earth for 20 years!</p>";
						
					} elseif ($yearsOnEarth < 20) {
						
						echo "<p>Not quite 20 yet, young grasshopper.</p>";
						
					} else {
						
						echo "<p>You must be more than 20 years old.</p>";
						
					}
				
				?>
				
				<h5>A combination:</h5>
				
				<?php
				
					if ($nativeLanguage == "German") {
						
						echo "<p>Willkommen</p>";
						
					} elseif ($species == "Black Rhino") {
						
						echo "<p>Oh! You must be a rhino.</p>";
						
					} else {
						
						echo "<p>Well then, you do not speak German, nor are you a rhino.</p>";
						
					}
				
				?>
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<div class="navs cf">
				<a href="/12_Elseif" class="button prev">Previous Lecture</a>
				<a href="/14_ComparisonOperators" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
