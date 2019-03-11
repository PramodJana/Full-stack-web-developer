<?php
	define("TITLE", "Associative Arrays");
	$my_name	= "Brad Hussey";
	$lesson_num	= 7;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			
			<div class="sandbox">	

				<p>Remember how PHP automatically assigns a number to each item in an array? Well, using Associative Arrays you can give a custom name to the key, rather than using a number. It looks like this:</p>
			
<pre class="brush: php">
$handlebar = array(
				
				"name" => "Handlebar",
				
				"creep_factor" => "High",
				
				"avg_growth_days" => 14
				
			);
</pre>
			
			<p>Now, let's say I wanted to display specific information from the array. I would do so by simply referring to a custom key in the array, like this:</p>

<pre class="brush: php">
&lt;?php echo $handlebar["creep_factor"]; ?&gt;
</pre>
	
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/06_Arrays" class="button prev">Previous Lecture</a>
				<a href="/08_MultiDimensionalArrays" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
