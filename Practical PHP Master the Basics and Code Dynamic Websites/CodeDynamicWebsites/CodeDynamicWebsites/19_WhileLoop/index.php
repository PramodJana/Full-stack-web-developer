<?php
	define("TITLE", "While Loop");
	$myName	= "Brad Hussey";
	$lessonNum	= 19;
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
				
				<p>When coding PHP, loops can be fantastic! Basically, you can write a piece of code to repeat itself again and again until a certain condition has been met. There are a few types of loops in PHP, in this lecture we'll learn about <strong>While Loops</strong>.</p>
				
				<p>Here's how a while loop works:</p>

<pre class="brush: php">
while (condition is true) {

	// execute code

}
</pre>
				
				<p>At this point, you probably have no idea how to actually use a while loop in PHP. That's okay. Let's dive into how you actually use it.</p>
				
				<p>Let's say you want PHP to echo the numbers from <strong>10 to 20</strong>. First you need to <strong>set a variable with your starting number</strong>:</p>
				
<pre class="brush: php">
&lt;?php

	// Set a variable with your starting number
	$startingNum = 10;

?&gt;
</pre>

				<p>Then you need to start your while loop with a condition. In this case, we want our condition to say <strong>"while my starting number (<code>$startingNum</code>) is less than or equal to 20, the condition is true"</strong>.</p>
				
				<p>To help clarify &mdash; as long as <code>$startingNum</code> is less than or equal to 20, keep on looping!</p>
				
<pre class="brush: php">
&lt;?php

	// Set a variable with your starting number
	$startingNum = 10;
	
	// While $startingNum is less than or equal to 20
	while ($startingNum <= 20) {
		
		// execute code
		
	}

?&gt;
</pre>

				<p>You may be thinking: "our starting number is 10, it will <strong>always</strong> be less than 20, dumbo!".</p>
				
				<p>Well, each time we <em>loop</em> through our function, we will tell PHP to <em>increment</em> our starting number by 1. Therefore, eventually our starting number will be equal to 20!</p>
				<p>Our condition says to stop looping once our starting number is larger than 20. We need to do this to prevent an infinite loop &mdash; something you most definitely don't want! An infinite loop means your function will literally run <em>forever</em>, which can freeze up your computer.</p>
				
				<p>So, let's tell PHP to echo our <code>$startingNum</code> variable, then increment the variable by 1:</p>
				
<pre class="brush: php">
&lt;?php

	// Set a variable with your starting number
	$startingNum = 10;
	
	// While $startingNum is less than or equal to 20
	while ($startingNum &lt;= 20) {
		
		// Echo the variable on the screen
		// We'll also concatenate a <br> tag at the end
		echo $startingNum . "<br>";
		
		// Then increment the value by 1
		$startingNum++;
	}

?&gt;
</pre>

				<blockquote>
					<p>In PHP, you can increment and decrement variables like so:</p>
					<table cellspacing="0">
						<tbody>
							<tr>
								<td><code>$a++;</code></td>
					
								<td>adds 1 to the value of the variable <code>$a</code> each time through</td>
							</tr>
					
							<tr>
								<td><code>$a--;</code></td>
					
								<td>subtracts 1 from the value of the variable <code>$a</code> each time through</td>
							</tr>
						</tbody>
					</table>
				</blockquote>
				
				<p>If coded correctly, this code should echo the numbers 10 to 20 on your screen, and stop at 20. Keep in mind, you can use any of the operators we've used in our past lectures as the conditions that need to be met in the while loop.</p>
				
				<p>Feel free to experiment with the above While Loop with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
				
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/18_AssignmentOperators" class="button prev">Previous Lecture</a>
				<a href="/20_ForLoop" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
