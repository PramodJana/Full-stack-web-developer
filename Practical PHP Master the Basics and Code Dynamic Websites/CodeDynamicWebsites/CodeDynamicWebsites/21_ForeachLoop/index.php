<?php
	define("TITLE", "Foreach Loop");
	$myName	= "Brad Hussey";
	$lessonNum	= 21;
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
				<p>The Foreach Loop! This loop is a very popular loop, and is used extensively in database-driven websites. The purpose of a Foreach Loop is to <em>"loop through each key/value pair in an array" (<a href="http://www.w3schools.com/php/php_looping_for.asp" target="_blank">w3schools</a>).</em></p>
				
				<aside>
					<h6>Need a refresher on arrays?</h6>
					<p>Head back to the <a href="/06_Arrays?ref=21_ForeachLoop">arrays lectures</a> to refresh your memory.</p>
				</aside>
				
				<p>The syntax looks like so:</p>
				
<pre class="brush: php">
foreach ($array as $value) {
	
	// execute code
	
}
</pre>
				
				<p>Basically, here's what happens during each loop iteration:</p>
				<ol>
					<li>Assign value of current array element to <code>$value</code></li>
					<li><code>$value</code> is echoed on the screen</li>
					<li>The array pointer then moves to the next element within the array</li>
					<li>Repeat from beginning until final array element</li>
				</ol>
				
				<p>Let's use a real-world example of how to use a Foreach Loop:</p>

<pre class="brush: php">
// We need to create an array
// Let's resurrect our array of moustaches
$moustaches = array("Handlebar", "Salvador Dali", "Fu Manchu");

// Loop through the $moustaches array
foreach ($moustaches as $moustache) {
	
	// Output each individual value
	echo "I love the $moustache <br>";
	
}
</pre>

				<p>If coded correctly, this should echo the three moustaches in the array on your screen.</p>
				
				<p>Feel free to experiment with the above Foreach Loop with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/20_ForLoop" class="button prev">Previous Lecture</a>
				<a href="/22_DoWhileLoop" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
