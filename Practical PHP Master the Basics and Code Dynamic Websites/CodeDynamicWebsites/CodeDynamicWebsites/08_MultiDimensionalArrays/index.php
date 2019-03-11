<?php
	define("TITLE", "Multi-Dimensional Arrays");
	$my_name	= "Brad Hussey";
	$lesson_num	= 8;
	
	$moustaches = array (

					array (
					
						"name"				=> "Handlebar",
						"creep_factor"		=> "High",
						"avg_growth_days"	=> 14
					
					),
					
					array (
					
						"name"				=> "Salvador Dali",
						"creep_factor"		=> "Extreme",
						"avg_growth_days"	=> 62
					
					),
					
					array (
					
						"name"				=> "Fu Manchu",
						"creep_factor"		=> "Very High",
						"avg_growth_days"	=> 58
					
					)

			  );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			
			<div class="sandbox">	

				<p>This is where we start getting crazy! We can harness the true potential of arrays by using multi-dimensional arrays &mdash; which is simply an array that is comprised of <em>multiple arrays</em>!</p>
			
<pre class="brush: php">
$moustaches = array (

					array (
					
						"name"				=> "Handlebar",
						"creep_factor"		=> "High",
						"avg_growth_days"	=> 14
					
					),
					
					array (
					
						"name"				=> "Salvador Dali",
						"creep_factor"		=> "Extreme",
						"avg_growth_days"	=> 62
					
					),
					
					array (
					
						"name"				=> "Fu Manchu",
						"creep_factor"		=> "Very High",
						"avg_growth_days"	=> 58
					
					)

			  );
</pre>
			
				<p>You're probably wondering how the heck we display this info on the screen! Well, we first have to reference the parent array <code>$moustaches</code>, then the numerical value of the child array <em>(Handlebar is [0], Salvador Dali [1], etc)</em>, and finally the custom key of the information we want to display <em>(name, creep_factor, etc)</em>. It looks like this:</p>

<pre class="brush: php">
&lt;?php echo $moustaches[2]["name"]; ?&gt;
</pre>
			
				<p>The above code will display <strong><?php echo $moustaches[2]["name"]; ?>.</strong></p>
			
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/07_AssociativeArrays" class="button prev">Previous Lecture</a>
				<a href="/09_GetYourHandsDirty" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
