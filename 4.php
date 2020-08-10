<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */
// Step 1
 function calc1(){
	 $n1 = 50;
	 $n2 = 4;
	 $sum = $n1 * $n2;
	 return $sum;
 }

 // Got this from the answers...
 $theSum = calc1();
echo $theSum;
echo "<br/>";

 // Step 2
 function calc2($num1, $num2) {
	 $sum = $num1 * $num2;
	 echo $sum;
 }

 calc2(12,24);

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>