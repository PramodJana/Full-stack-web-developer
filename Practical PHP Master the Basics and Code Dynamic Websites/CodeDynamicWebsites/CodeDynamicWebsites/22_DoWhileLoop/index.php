<?php
	define("TITLE", "Do While Loop");
	$myName	= "Brad Hussey";
	$lessonNum	= 22;
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
				<p>The Do While Loop is a bit like the While Loop, but there's one major difference: the While Loop will only start if the condition is TRUE; whereas the Do While Loop will <em>always</em> execute the first time, and then evaluate whether the condition is TRUE afterwards.</p>
				
				<p>Here's what the syntax looks like:</p>

<pre class="brush: php">
do {
	
	// execute code
	
} while ( condition to be met );
</pre>

				<p>Let's look at a real example:</p>
				
<pre class="brush: php">
// Set a variable
$i = 1;

do {
	// Do this code
	echo "Number: $i <br>";
	$i++;
	
}
// Then evaluate this condition
// Repeat loop if TRUE
while ( $i <= 10 );
</pre>
				
				<p>If coded correctly, this should echo the numbers 1 to 10 on your screen.</p>
				
				<p>Feel free to experiment with the above Do While Loop with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/21_ForeachLoop" class="button prev">Previous Lecture</a>
				<a href="/23_Functions" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
