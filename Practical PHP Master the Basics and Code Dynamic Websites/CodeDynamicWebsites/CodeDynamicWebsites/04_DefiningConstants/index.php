<?php
	
	// Define a Constant
	define("TITLE", "Defining Constants");
	
	// Variables
	$my_name = "Brad";
	$lesson_num = 4;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?></title>
		
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
	
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<div class="sandbox">
				
				<p>A constant is similar to a variable in the sense that you can store information in a keyword that can be used throughout your web page. However, the value of a constant cannot be changed, unlike a variable. It's literally "constant".</p>
				
				<p>It's also worth noting that constants are case-sensitive and are written in ALL CAPS by convention. Here's how you define a constant in PHP:</p>

<pre class="brush: php">
define("TITLE", "Defining Constants");
</pre>

				<p>To display a constant on your page, you can echo it using PHP, like this:</p>

<pre class="brush: php">
&lt;?php echo TITLE; ?&gt;
</pre>
				
			</div><!-- end sandbox -->
			
			<div class="navs cf">
				<a href="/03_MoreVariables" class="button prev">Previous Lecture</a>
				<a href="/05_GetYourHandsDirty" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
		
	</body>
</html>
