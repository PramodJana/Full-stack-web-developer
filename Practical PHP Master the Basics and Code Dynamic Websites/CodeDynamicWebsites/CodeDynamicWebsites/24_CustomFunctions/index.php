<?php
	define("TITLE", "Custom Functions");
	$myName	= "Brad Hussey";
	$lessonNum	= 24;
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
				<p>While PHP has a massive library of built-in functions you have at your disposal, sometimes you need to build your own functions &mdash; for both small and large tasks.</p>
				
				<p>Think of a custom functions as a mini-program that performs an action for you &mdash; better yet, think of a custom function as a cute little robot that does a specific task you tell it to do!</p>
				
				<p>Let's look at the basic syntax of a function:</p>

<pre class="brush: php">
&lt;?php

	function myCustomFunction() {
		
		// things my custom function will do
		// go in here
		
	}

?&gt;
</pre>
				<p>To build your custom function, you need to type <code>function myCustomFunction()</code>. Keep in mind that "<code>myCustomFunction()</code>" can be whatever words you want them to be, <strong>but no spaces allowed</strong>. Then add opening and closing curly brackets (or curly braces, as some call it). In between the curly brackets is where you define what your function will perform.</p>
				
				<p>There are two important things to know about functions:</p>
				<ol>
					<li>There are functions that require "arguments", and;</li>
					<li>There are functions that don't require "arguments".</li>
				</ol>
				
				<p>Let's start by building a custom function that <em>does not require an argument.</em></p>

<pre class="brush: php">
&lt;?php
	
	// Build the function
	function hangTen() {
		
		echo &quot;Surf's up! Grab your board!&quot;;
		
	}
	
	// Call the function
	hangTen();
	
?&gt;
</pre>
				
				
				<p>Feel free to experiment with the above Sort Function with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/23_Functions" class="button prev">Previous Lecture</a>
				<a href="/25_SimpleArguments" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
