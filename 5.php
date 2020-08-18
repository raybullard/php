<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
<?php 

	/*  Step1: Use a pre-built math function here and echo it


		Step 2:  Use a pre-built string function here and echo it


		Step 3:  Use a pre-built Array function here and echo it

	*/

	//Step 1
	echo "<h2>Step 1</h2>";
	echo pow(3,3);
	echo "<br/>";
	echo sqrt(36);
	echo "<br/>";
	echo floor(39.4);
	echo "<br/>";
	echo rand(1,1000);
	echo "<br/>";

	//Step 2
	echo "<h2>Step 2</h2>"; 
	$string = "This is section 5!";
	echo strlen($string);
	echo "<br/>";
	echo strtoupper($string);
	echo "<br/>";
	echo strtolower($string);
	echo "<br/>";
	echo count_chars($string);
	echo "<br/>";
	echo join($string);
	echo "<br/>";

	$debug_stack

	//Step 3
	echo "<h2>Step 3</h2>"; 
	$array = [12, 1, 92, 1494, $string];
	array_push($array, 567, 452);
	sort($array);
	print_r($array);
	echo "<br/>";

	$found = in_array($string, $array);

	if($found) {
		echo "We found it!";
	} else {
		echo "We didn't find it...";
	}

	//Bonus 

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>