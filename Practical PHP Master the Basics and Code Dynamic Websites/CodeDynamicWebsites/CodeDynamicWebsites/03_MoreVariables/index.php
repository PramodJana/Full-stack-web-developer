<?php
	
	$my_name = "Brad";

	$my_age = 25;
	
	$fav_colour = "Blue";
	
	$lesson_num = 3;
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>More PHP Variables</title>
		
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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small>More Variables</small></h1>
			<hr>

			<div class="sandbox">
				<p>Here are some more basic variables:</p>
				
<pre class="brush: php">
&lt;?php
	$my_name = "Brad";
	
	$my_age = 25;
	
	$fav_colour = "Blue";
?&gt;
</pre>
				
				<p>If I want to display these variables on the page in some meaningful way, I could use the PHP Print Function:</p>
				
<pre class="brush: php">
&lt;?php
print("My name is $my_name! <br>
I'm $my_age years old, and like the colour $fav_colour.");
?&gt;
</pre>
				
				<p>PHP will spit out the following phrase:</p>
				<p><em><?php print("My name is <strong>$my_name</strong>! <br> I'm <strong>$my_age</strong> years old, and like the colour <strong>$fav_colour</strong>."); ?></em></p>
			</div><!-- end sandbox -->
			
			<div class="navs cf">
				<a href="/02_Variables" class="button prev">Previous Lecture</a>
				<a href="/04_DefiningConstants" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
		
	</body>
</html>
