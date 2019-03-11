<?php
	define("TITLE", "Logical Operators");
	$myName	= "Brad Hussey";
	$lessonNum	= 15;
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
				
				<p>Logical Operators are just that: <em>logical!</em> It's like speaking english. They are very helpful when you need your <code>If / Else / Elseif</code> statements to be a little more complex. Check out this table, provided by <a href="http://www.php.net/manual/en/language.operators.logical.php" target="_blank">PHP.net</a>:</p>

				<table cellspacing="0">
				
					<tbody>
						<tr>
							<th>Example</th>
				
							<th>Name</th>
				
							<th>Result</th>
						</tr>
						
						<tr>
							<td><code>$a and $b</code></td>
				
							<td>And</td>
				
							<td><code>TRUE</code> if both <code>$a</code> and <code>$b</code> are <code>TRUE</code>.</td>
						</tr>
				
						<tr>
							<td><code>$a or $b</code></td>
				
							<td>Or</td>
				
							<td><code>TRUE</code> if either <code>$a</code> or <code>$b</code> is <code>TRUE</code>.</td>
						</tr>
				
						<tr>
							<td><code>! $a</code></td>
				
							<td>Not</td>
				
							<td><code>TRUE</code> if <code>$a</code> is not <code>TRUE</code>.</td>
						</tr>
				
						<tr>
							<td><code>$a &amp;&amp; $b</code></td>
				
							<td>And</td>
				
							<td><code>TRUE</code> if both <code>$a</code> and <code>$b</code> are <code>TRUE</code>.</td>
						</tr>
				
						<tr>
							<td><code>$a || $b</code></td>
				
							<td>Or</td>
				
							<td><code>TRUE</code> if either <code>$a</code> or <code>$b</code> is <code>TRUE</code>.</td>
						</tr>
					</tbody>
				</table>
				
				<p>Here is an example of how you would use one of the above logical operators:</p>

<pre class="brush: php">
$username = "johnnyboy";
$password = "qwerty";

if ($username == 'johnnyboy' && $password == 'qwerty') {
	
	// username and password are correct
	
} else {

	echo "Your username and password combination are incorrect";

}
</pre>
				
				<p>Feel free to experiment with all of the above logical operators with some PHP <code>If / Else / Elseif</code> statements using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/14_ComparisonOperators" class="button prev">Previous Lecture</a>
				<a href="/16_ArithmeticOperators" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
