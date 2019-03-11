<?php
	define("TITLE", "Comparison Operators");
	$myName	= "Brad Hussey";
	$lessonNum	= 14;
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
				
				<p>At this point, we've been playing with PHP Variables, Arrays, and If Statements. In nearly every lecture so far, we've seen the "<code>=</code>" symbol. You probably have a basic understanding that it sets a value to a variable, like so:</p>

<pre class="brush: php">
$myName = "Brad";
</pre>
				
				<p>In the PHP world, the <code>=</code> symbol is called an "assignment operator". It basically "assigns" the value on the right to the variable on the left. There are many assignment operators, but we'll get into those once we've been introduced to the many other types of operators in PHP.</p>
				
				<p>First, we will start with the "comparison operator".</p>
				
				<p>Comparison operators allow you to <em>compare</em> multiple elements. You can compare whether elements are:</p>
				
				<ul>
					<li>Equal</li>
					<li>Exactly Equal (Identical)</li>
					<li>Greater Than</li>
					<li>Less Than</li>
					<li>Plus a few more combinations of the above</li>
				</ul>
				
				<p>Here is a handy table, provided by <a href="http://php.net/" target="_blank">PHP.net</a></p>
				
				<table cellspacing="0">
					<tbody>
						<tr>
							<th align="left" valign="center" width="15%">Example</th>
				
							<th align="left" valign="center">Name</th>
				
							<th align="left" valign="center" width="55%">Result</th>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>==</code> <code>$b</code></td>
				
							<td align="left" valign="center">Equal</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is equal to
							<code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>===</code> <code>$b</code></td>
				
							<td align="left" valign="center">Identical</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is equal to <code>$b</code>,
							and they are of the same type. (PHP 4 only). You're using PHP <strong><?php echo phpversion(); ?></strong>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>!=</code> <code>$b</code></td>
				
							<td align="left" valign="center">Not equal</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is not equal to
							<code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>&lt;&gt;</code> <code>$b</code></td>
				
							<td align="left" valign="center">Not equal</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is not equal to
							<code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code>&nbsp;<code>!==</code> <code>$b</code></td>
				
							<td align="left" valign="center">Not identical</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is not equal to
							<code>$b</code>, or they are not of the same type. (PHP 4 only)</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>&lt;</code> <code>$b</code></td>
				
							<td align="left" valign="center">Less than</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is strictly less
							than <code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>&gt;</code> <code>$b</code></td>
				
							<td align="left" valign="center">Greater than</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is strictly
							greater than <code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>&lt;=</code> <code>$b</code></td>
				
							<td align="left" valign="center">Less than or equal to</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is less than or
							equal to <code>$b</code>.</td>
						</tr>
				
						<tr>
							<td align="left" valign="center"><code>$a</code> <code>&gt;=</code> <code>$b</code></td>
				
							<td align="left" valign="center">Greater than or equal to</td>
				
							<td align="left" valign="center"><code>TRUE</code> if <code>$a</code> is greater than
							or equal to <code>$b</code>.</td>
						</tr>
					</tbody>
				</table>
				
				<p>Here is an example of how you would use one of the above comparison operators:</p>

<pre class="brush: php">
$yearsOnEarth = 14;

if ($yearsOnEarth <= 25) {
	
	echo "Your age is less than or equal to 25!";
	
}
</pre>
				
				<p>Feel free to experiment with all of the above comparison operators with some PHP <code>If / Else / Elseif</code> statements using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/13_GetYourHandsDirty" class="button prev">Previous Lecture</a>
				<a href="/15_LogicalOperators" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
