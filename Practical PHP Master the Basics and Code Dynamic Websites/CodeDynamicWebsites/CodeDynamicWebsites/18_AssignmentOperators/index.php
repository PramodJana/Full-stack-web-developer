<?php
	define("TITLE", "Assignment Operators");
	$myName	= "Brad Hussey";
	$lessonNum	= 18;
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
				
				<p>Assignment Operators "assign" values from the right argument to the left argument &mdash; usually in the form of variables. The basic assignment operator is "<code>=</code>", which assigns the value on the right to the variable on the left. Here is a table of more assignment operators:</p>
				
				<table cellspacing="0">
					<tr>
						<th>Assignment</th>
						<th>Same as</th>
						<th>Description</th>
					</tr>
					<tr>
						<td><code>$a += $b</code></td>
						<td><code>$a = $a + $b</code></td>
						<td>Addition</td>
					</tr>
					<tr>
						<td><code>$a -= $b</code></td>
						<td><code>$a = $a - $b</code></td>
						<td>Subtraction</td>
					</tr>
					<tr>
						<td><code>$a *= $b</code></td>
						<td><code>$a = $a * $b</code></td>
						<td>Multiplication</td>
					</tr>
					<tr>
						<td><code>$a /= $b</code></td>
						<td><code>$a = $a / $b</code></td>
						<td>Division</td>
					</tr>
					<tr>
						<td><code>$a %= $b</code></td>
						<td><code>$a = $a % $b</code></td>
						<td>Modulus</td>
					</tr>
					<tr>
						<td><code>$a .= $b</code></td>
						<td><code>$a = $a . $b</code></td>
						<td>Concatenation</td>
					</tr>
				</table>
				
				<p>Here's an example of how to use one of the above operators:</p>

<pre class="brush: php">
&lt;?php

	$a = 71;
	$b = 36;
	
	$a -= $b;
	
	echo $a; // Prints 35

?&gt;
</pre>
				
				<p>Feel free to experiment with the above assignment operators with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
				
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/17_StringOperators" class="button prev">Previous Lecture</a>
				<a href="/19_WhileLoop" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
