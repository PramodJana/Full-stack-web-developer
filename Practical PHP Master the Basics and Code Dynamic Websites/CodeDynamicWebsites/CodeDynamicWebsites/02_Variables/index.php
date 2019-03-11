<?php
	
	$lesson_num = 2;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Variables</title>
		
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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small>Variables</small></h1>
			
			<hr>

			
			<div class="sandbox">
				<p>Think of a variable as a bucket. Literally, a bucket. That bucket can hold stuff in it &mdash; like food, or dirt. In PHP, variables are buckets, but instead of holding food or dirt, they hold information &mdash; like numbers, text, images, or logic! All you need to know at this point is that variables are buckets that store information for later use. We'll get to <em>how we actually use the variables</em> in an upcoming lecture.</p>
				
				<p>The basic syntax of a variable is a dollar sign ($) directly followed by a variable name (using text, with no spaces), then an equal sign, followed by the contents of the variable, ending with a semi-colon. Ex: <code>$variable_name = 'my first variable';</code></p>
				
				<p>There are 4 basic variable types, and each type of variable (or "bucket") is meant to hold specific information.</p>
				
				<h3>Boolean</h3>
				<p>A boolean variable specifies a value of true or false.</p>
<pre class="brush: php">
&lt;?php
	$logged_in = true;
?&gt;
</pre>
				
				<h3>Integer</h3>
				<p>An integer variable is any whole number.</p>
<pre class="brush: php">
&lt;?php
	$fav_num = 2940;
?&gt;
</pre>
				
				<h3>Floating Point</h3>
				<p>Usually a fractional number, with a decimal.</p>
<pre class="brush: php">
&lt;?php
	$top_speed = 104.87;
?&gt;
</pre>

				<h3>String</h3>
				<p>Simple text that must be enclosed within double quotations " " or single quotations ' '</p>
<pre class="brush: php">
&lt;?php
	$vehicle = &quot;Subaru&quot;;
?&gt;
</pre>
			</div><!-- end sandbox -->
			
			<div class="navs cf">
				<a href="/01_FirstPage" class="button prev">Previous Lecture</a>
				<a href="/03_MoreVariables" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
		
	</body>
</html>
