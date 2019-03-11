<?php
	define("TITLE", "For Loop");
	$myName	= "Brad Hussey";
	$lessonNum	= 20;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
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
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<div class="sandbox">
				<p>For Loops are a little trickier to wrap your head around, so hang in there!</p>

				<blockquote>
					<q>The for loop is used when you know in advance how many times the script should run.</q>
					<cite>&mdash; <a href="http://www.w3schools.com/php/php_looping_for.asp" target="_blank">w3schools</a></cite>
				</blockquote>
				
				<p>The syntax looks like so:</p>
				
<pre class="brush: php">
for (initialize counter; test if TRUE; increment counter) {

	// execute code

}
</pre>
				
				<p>Essentially, the For Loop will:</p>
				<ol>
					<li>Initialize where the loop will start counting by adding a value to a variable</li>
					<li>Evaluate a certain condition to test if the condition is either TRUE or FALSE (<em>if the condition is FALSE, the loop will stop running</em>)</li>
					<li>Increment the value by 1 each time we loop through</li>
				</ol>
				
				<p>So, if we want to have our For Loop spit out the numbers 0 to 20, we would code the following:</p>

<pre class="brush: php">
for ($a = 0; $a <= 20; $a++) {

	echo "Number: $a <br>";

}
</pre>

				<p>If coded correctly, this code should echo the numbers 0 to 20 on your screen, and stop at 20.</p>
				
				<p>Feel free to experiment with the above For Loop with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/19_WhileLoop" class="button prev">Previous Lecture</a>
				<a href="/21_ForeachLoop" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
