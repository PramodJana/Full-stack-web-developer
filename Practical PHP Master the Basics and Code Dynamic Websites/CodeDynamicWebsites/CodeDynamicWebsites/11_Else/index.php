<?php
	define("TITLE", "Else");
	$my_name	= "Brad Hussey";
	$lesson_num	= 11;
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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<div class="sandbox">
			
				<p>We've figured out how to execute some code if an expression evaluates to <code>TRUE</code>, but what about when the expression evaluates to <code>FALSE</code>? Often you'll want to execute some code if a certain condition has not been met.</p>
				
				<p>This is where <code>Else</code> comes in to play. Look at <code>Else</code> as an extension of the <code>If</code> statement. The syntax looks like this:</p>

<pre class="brush: php">
if (expression) {
	
	// code to execute if TRUE
	
} else {

	// code to execute if FALSE
}
</pre>

				<p>Now, let's take a look at a real-world example:</p>

<pre class="brush: php">
&lt;?php

	$fav_fruit = &quot;orange&quot;;
	
	if ($fav_fruit == &quot;pineapple&quot;) {
	
		echo &quot;YAY! Pineapple is the best.&quot;;
		
	} else {
	
		echo &quot;So, you like oranges...&quot;;
		
	}
	
?&gt;
</pre>
			<aside>
				<h3>Not all "equals" are created equal</h3>
				<p>It's good to remember that "<code>==</code>" is different than "<code>=</code>". The former means <em>is equal to</em> while the latter <em>assigns</em> a value to a variable. For example:</p>
	
<pre class="brush: php">
if ($fav_fruit = "pineapple")
</pre>
				
				<p>Will always evaluate to true because the single "<code>=</code>" symbol <strong>assigns</strong> the value into the variable, rather than comparing it.</p>
			</aside>
			
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/10_IfStatements" class="button prev">Previous Lecture</a>
				<a href="/12_Elseif" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
