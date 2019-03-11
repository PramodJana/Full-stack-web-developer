<?php
	define("TITLE", "Else if");
	$my_name	= "Brad Hussey";
	$lesson_num	= 12;
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
			
				<p>There's one last piece in the <code>IF / ELSE</code> puzzle. It's called <code>else if</code> (or <code>elseif</code> &mdash; pronounced "Else If"). <code>ELSE IF</code> is a kind of combination of <code>IF</code> and <code>ELSE</code>. <a href="http://www.php.net/manual/en/control-structures.else if.php" target="_blank">PHP.net</a> puts it nicely:</p>
				<blockquote>Like <code>ELSE</code>, it extends an <code>IF</code> statement to execute a different statement in case the original <code>IF</code> expression evaluates to <code>FALSE</code>. However, unlike <code>ELSE</code>, it will execute that alternative expression only if the <code>else if</code> conditional expression evaluates to <code>TRUE</code>.</blockquote>
				
				<p>If the above explanation is as clear as mud, the syntax looks like this:</p>

<pre class="brush: php">
if (expression) {
	
	// code to execute if the above expression is TRUE
	
} else if (different expression) {

	/* code to execute if first expression is FALSE
	   but the else if expression is TRUE */

} else {

	/* code to execute if neither
	   of the above expressions are TRUE */

}
</pre>
			
				<p>Now, if we added some real PHP, it would look like this:</p>

<pre class="brush: php">
&lt;?php
	
	$native_language = &quot;Spanish&quot;;
	
	if ($native_language == &quot;French&quot;) {
		
		echo &quot;Bonjour! Vous parlez Fran&ccedil;ais.&quot;;
		
	} else if ($native_language == &quot;Spanish&quot;) {
		
		echo &quot;&iexcl;Hola! Usted habla Espa&ntilde;ol.&quot;;
		
	} else {
		
		echo &quot;Hello! You probably speak English.&quot;;
		
	}

?&gt;
</pre>
				<p>Here's the commented code:</p>

<pre class="brush: php">
&lt;?php
	
	// Setting the variable
	$native_language = &quot;Spanish&quot;;
	
	// IF native language is French
	if ($native_language == &quot;French&quot;) {
		
		// Echo some french!
		echo &quot;Bonjour! Vous parlez Fran&ccedil;ais.&quot;;
		
	// else if native language is Spanish	
	} else if ($native_language == &quot;Spanish&quot;) {
		
		// Echo some spanish!
		echo &quot;&iexcl;Hola! Usted habla Espa&ntilde;ol.&quot;;
		
	// ELSE native language is neither of the above
	} else {
		
		// Echo some english!
		echo &quot;Hello! You probably speak English.&quot;;
		
	}

?&gt;
</pre>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/11_Else" class="button prev">Previous Lecture</a>
				<a href="/13_GetYourHandsDirty" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
