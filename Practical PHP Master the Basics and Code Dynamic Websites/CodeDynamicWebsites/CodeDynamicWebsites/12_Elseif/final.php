<?php
	
	// Constants
	define("TITLE", "Else if");
	
	// Custom Variables
	$my_name	= "Brad Hussey";
	$lesson_num	= 12;
	
    $native_language = "Spanish";

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
			
			<h1>Tutorial <? echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">

				<?php
					if ($native_language == "French") {
         
				        echo "Bonjour! Vouz parlez Fran&ccedil;ais.";

				    } else if ($native_language == "Spanish") {
				         
				        echo "&iexcl;Hola! Usted habla Espa&ntilde;ol.";
				         
				    } else {
				         
				        echo "Hello! You probably speak English.";
				         
				    }
				?>
				
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
