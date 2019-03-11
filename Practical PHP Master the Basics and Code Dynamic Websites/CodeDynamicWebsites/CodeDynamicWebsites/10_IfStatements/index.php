<?php
	define("TITLE", "If Statements");
	$my_name	= "Brad Hussey";
	$lesson_num	= 10;
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
			
				<p>The point of coding in PHP is to make your website dynamic&mdash;or smart&mdash;so that it can make logical decisions. What I mean by this is your website can make decisions on what to do next based on user input, user conditions, or parameters you've set yourself. Here are some examples:</p>
				<ul>
					<li>When a user logs into their account, they must type both their username and password. What if their password is wrong? What if they didn't type a valid email address? What if they forgot to type their email address altogether? PHP can handle what to do in these situations using <strong>If, Else,</strong> and <strong>Elseif</strong> statements.</li>
					<li>What if a customer tries to buy a product online, but that product is sold out? PHP can let the user know the product is sold out because you can program it to calculate how many items of that product are remaining.</li>
					<li>What if a user uploads an image that is too large? PHP can compare the uploaded image with your parameters and tell the user to upload a smaller image size if it exceeds the limit.</li>
					<li><em>...and so much more!</em></li>
				</ul>
			
				<p>Let's start with the <strong>If Statement</strong>. It works something like this:</p>

<pre class="brush: php">
If THIS then THAT
</pre>
				
				<p>Okay, that was a little vague. Let's expand on that a bit:</p>

<pre class="brush: php">
If expression is TRUE, then do something

If expression is FALSE, then don't do anything
</pre>
				
				<aside>
					<h3>What's an Expression?</h3>
					
					<p>You're probably wondering what an "expression" is. Here's how <a href="http://www.php.net/manual/en/language.expressions.php" target="_blank">PHP.net</a> explains what an expression is:</p>
					<blockquote>
						<p>Expressions are the most important building stones of PHP. In PHP, almost anything you write is an expression. The simplest yet most accurate way to define an expression is "anything that has a value".</p>
						
						<p>The most basic forms of expressions are constants and variables. When you type "<code>$a = 5</code>", you're assigning '5' into <code>$a</code>. '5', obviously, has the value 5, or in other words '5' is an expression with the value of 5 (in this case, '5' is an integer constant).</p>
					</blockquote>
				</aside>
				
				<h3>Back to If Statements</h3>
				
				<p>Let's see what they look like in PHP:</p>

<pre class="brush: php">
if (expression) {

	// code to execute if expression evaluates to TRUE
	
}
</pre>
				
				<p>If we expand on that further, it looks more like this:</p>

<pre class="brush: php">
&lt;?php

	// Set some variables
	$a = 20;
	$b = 50;
	
	if ($a &lt; $b) {
		
		echo &quot;Yep! $a is certainly less than $b.&quot;;
		
	}

?&gt;
</pre>
			
				<p>As you can see, we are using the "less than" symbol (<code>&lt;</code>) to check if the variable <code>$a</code> is smaller than the variable <code>$b</code>. If the expression is <code>TRUE</code>, then PHP will echo the text "Yep! 20 is certainly less than 50."</p>
				
				<p>If statements can be very powerful, but these are just some very basic examples to get you started.</p>
			
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/09_GetYourHandsDirty" class="button prev">Previous Lecture</a>
				<a href="/11_Else" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
