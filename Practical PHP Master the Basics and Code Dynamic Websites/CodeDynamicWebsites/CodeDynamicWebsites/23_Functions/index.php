<?php
	define("TITLE", "Intro to Functions");
	$myName	= "Brad Hussey";
	$lessonNum	= 23;
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
				<p>If you've made it this far, congratulations are in order! We've covered a lot of ground, and our PHP coding skills are becoming much more refined and skillful!</p>
				
				<p>I'm going to go ahead and say that functions are the Meat n' Potatoes <em>(vegetarian version: Beans n' Rice)</em> of most programming languages; they are fundamental when cooking a tasty PHP dinner!</p>
				
				<p>In PHP, there is a massive library (over 1000) of baked-in functions&mdash;pun intended&mdash;that do everything from printing text on your screen to adding information to a database, and much  more!</p>
				
				<p>It's good to know that there are two types of PHP functions: Built-in PHP Functions, and Custom Functions (you can write your own custom PHP functions!).</p>
				
				<p>Remember <code>echo</code> and <code>print</code>? Those little guys are functions!</p>
				
				<h2>Important Facts about Functions</h2>
				<blockquote cite="http://www.w3schools.com/php/php_functions.asp">
					<p>A function is a block of statements that can be used repeatedly in a program.</p>
					<p>A function will not execute immediately when a page loads.</p>
					<p>A function will be executed by a call to the function.</p>
					&mdash; <a href="http://www.w3schools.com/php/php_functions.asp" target="_blank">w3schools</a>
				</blockquote>
				
				<p>Let's take a look at the basic syntax of a function:</p>
<pre class="brush: php">
function functionName() {

	// execute code

}
</pre>
				
				<aside>
					<p><strong>Please note:</strong> <q>A function name can start with a letter or underscore (not a number).</q> &mdash; <a href="http://www.w3schools.com/php/php_functions.asp" target="_blank">w3schools</a></p>
					
					<p><strong>Hot tip:</strong> You can name the function whatever you wish! Just try and have it reflect what the function actually does.</p>
				</aside>
				
				<h3>PHP <code>sort()</code> Function</h3>
				<p>Let's take a quick look at the built-in PHP <code>sort()</code> Function. This function allows us to sort an array in alphabetical order.</p>
				
				<p>First, let's create an array:</p>
								
<pre class="brush: php">
// Custom array
$dinner = array("Meat", "Potatoes", "Beans", "Rice");
</pre>
				
				<p>Now let's run our array through the <code>sort()</code> function:</p>

<pre class="brush: php">
// Custom array
$dinner = array("Meat", "Potatoes", "Beans", "Rice");

// Add the array as a parameter to sort() function
sort($dinner);
</pre>

				<p>Now all we have to do is echo our array on the screen, using a Foreach loop:</p>
				
<pre class="brush: php">
// Custom array
$dinner = array("Meat", "Potatoes", "Beans", "Rice");

// Add the array as a parameter to sort() function
sort($dinner);

// Echo the sorted array
foreach ($dinner as $ingredient) {
    echo "$ingredient <br>";
}
</pre>				

				<p>If coded correctly, the above will echo the array in alphabetical order:</p>
				
				<blockquote>
					<?php
						// Custom array
						$dinner = array("Meat", "Potatoes", "Beans", "Rice");
						
						// Add the array as a parameter to sort() function
						sort($dinner);
						
						// Print the sorted array
						foreach ($dinner as $ingredient) {
						    echo "$ingredient <br>";
						}
					?>
				</blockquote>
				
				<p>If you're looking to sort your array in reverse order, you can use the PHP <code>rsort()</code> function. Feel free to read more about the <a href="http://ca3.php.net/sort" target="_blank">sort function</a>, and other <a href="http://www.php.net/manual/en/function.rsort.php" target="_blank">sorting functions here</a>.</p>
				
				<p>We won't be covering <em>all</em> of the built-in PHP functions in this course, because that would take an incredibly long time. Besides, it's fun to be in a situation where you're programming and then you think <em>"Hey! I wonder if there's a PHP function that will do this for me?"</em> &mdash; this is why I'll leave you with the curiosity to experiment. <a href="http://bit.ly/17DDE7C" target="_blank">Google</a> is your best friend, and you may also refer to <a href="http://www.tutorialspoint.com/php/php_function_reference.htm" target="_blank">this directory</a>.</p>
				
				<p>Feel free to experiment with the above Sort Function with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="/22_DoWhileLoop" class="button prev">Previous Lecture</a>
				<a href="/24_CustomFunctions" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
