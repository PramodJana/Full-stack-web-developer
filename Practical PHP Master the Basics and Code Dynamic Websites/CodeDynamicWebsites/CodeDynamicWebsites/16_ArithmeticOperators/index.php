<?php
	define("TITLE", "Arithmetic Operators");
	$myName	= "Brad Hussey";
	$lessonNum	= 16;
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
				
				<p>This is where we start getting into some math! It's very basic, but incredibly useful. Check out this table, provided by <a href="http://php.net/manual/en/language.operators.arithmetic.php" target="_blank">PHP.net</a>:</p>

				<table cellspacing="0">
					<tbody>
						<tr>
							<th>Example</th>
				
							<th>Name</th>
				
							<th>Result</th>
						</tr>
				
						<tr>
							<td><code>$a + $b</code></td>
				
							<td>Addition</td>
				
							<td>Sum of <code>$a</code> and <code>$b</code></td>
						</tr>
				
						<tr>
							<td><code>$a - $b</code></td>
				
							<td>Subtraction</td>
				
							<td>Difference of <code>$a</code> and <code>$b</code></td>
						</tr>
				
						<tr>
							<td><code>$a * $b</code></td>
				
							<td>Multiplication</td>
				
							<td>Product of <code>$a</code> and <code>$b</code></td>
						</tr>
				
						<tr>
							<td><code>$a / $b</code></td>
				
							<td>Division</td>
				
							<td>Quotient of <code>$a</code> and <code>$b</code></td>
						</tr>
				
						<tr>
							<td><code>$a % $b</code></td>
				
							<td>Modulus</td>
				
							<td>Remainder of <code>$a</code> divided by <code>$b</code></td>
						</tr>
					</tbody>
</table>
				
				<p>The <strong>modulus</strong> operator is usually a pretty confusing concept at first, but <a href="http://mathforum.org/library/drmath/view/54363.html" target="_blank">mathforum.org</a> provides a pretty good explanation here:</p>
				
				<blockquote>
					<p>The "mod" operator in computer languages is simply the remainder. For example,</p>
					
					<code>17 mod 3 = 2</code>
					
					<p>because</p>
					
					<code>17 / 3 = 5 rem 2</code>
					
					<p>which in turn means</p>
					
					<code>17 = 3 * 5 + 2</code>
				</blockquote>
				
				<p>Here is an example of how you would use one of the above arithmetic operators:</p>

<pre class="brush: php">
&lt;?php

	$birthYear = 1988;
	$thisYear = date('Y');
	
	$myAge = ($thisYear - 1988);
	
	echo $myAge;

?&gt;
</pre>
				
				<p>Feel free to experiment with all of the above arithmetic operators with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/15_LogicalOperators" class="button prev">Previous Lecture</a>
				<a href="/17_StringOperators" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
