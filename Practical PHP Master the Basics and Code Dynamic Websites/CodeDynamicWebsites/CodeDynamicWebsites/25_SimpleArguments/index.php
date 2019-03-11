<?php
	define("TITLE", "Simple Arguments");
	$myName	= "Brad Hussey";
	$lessonNum	= 25;
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
				<p>Functions can be incredibly powerful, because you can program them to do almost anything you want them to. One important step in making your functions even smarter is to use "arguments" within your function. Not the type of argument where you and a friend are bickering about a disagreement, I'm talking about arguments within functions &mdash; two very different things.</p>
				
				<p>Think of an argument like a variable. Your program can pass extra information to your functions using arguments. You specify your arguments within the parenthesis after your function name, and you can have as many as you want, as long as they're comma separated.</p>
				
				<p>Let's look at an example of a function with a single argument:</p>

<pre class="brush: php">
&lt;?php

	function hangTen($location) {
		
		echo "We're surfing in $location!<br>";
		
	}
	
	hangTen("Hawaii");
	hangTen("California");
	hangTen("Newfoundland");

?&gt;
</pre>

				<p>So, in the above example, we're passing an argument to the <code>hangTen()</code> function. Later in our script, we call our function several times with a string of text within each parenthesis, and each time we call our function with a new argument value, that value will display on the screen along with the text we provided in our function.</p>
				
				<p>The output will look like this:</p>
				
				<p>
				<strong>
				<?php
					function hangTen($location) {
	
						echo "We're surfing in $location!<br>";
						
					}
					
					hangTen("Hawaii");
					hangTen("California");
					hangTen("Newfoundland");
				?>
				</strong>
				</p>
				
				<p>Let's look at an example with two arguments:</p>
				
<pre class="brush: php">
&lt;?php

	function multiplyTogether($val1, $val2) {
		
		$product = $val1 * $val2;
		echo "The product of the two numbers is: $product";
		
	}
	
	multiplyTogether(14, 27);

?&gt;
</pre>

				<p>All we did here was add another argument, separated by comma, then when we called our <code>multiplyTogether()</code> function later in the script, we provided two values to take the place of our <code>$val1</code> and <code>$val2</code> arguments.</p>
				
				<p>The result?</p>
				
				<p><strong>
				<?php
					function multiplyTogether($val1, $val2) {
						
						$product = $val1 * $val2;
						echo "The product of the two numbers is: $product";
						
					}
					
					multiplyTogether(14, 27);
				?>
				</strong></p>
				
				<p>Feel free to experiment with Custom Functions using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/24_CustomFuncions" class="button prev">Previous Lecture</a>
				<a href="/26_Final" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
