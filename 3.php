<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 // Step 1
 echo "<h2>Step 1</h2>";
 if(4 === 5){
	 echo "<p>4 is exactly equal to 4!</p>";
 } elseif(4 === 5) {
	 echo "I love PHP!";
 } else {
	 echo "This ain't nothin'";
 }

 echo "<br/>";

  // Step 2
  echo "<h2>Step 2</h2>";
 for($i = 0; $i < 10; $i++){
	 echo "<p>";
	 echo $i . " is less than 10";
	 echo "</p>";
 }

   // Step 3
   echo "<h2>Step 3</h2>";
   $number = 230;
   switch($number){
	   case 32:
	   echo "It is " . $number;
   break;
   case 23:
		echo "It is " . $number;
		break;
	case 230:
			echo "It is " . $number;
		 break;
	case 240:
		echo "It is " . $number;
		break;
	default: 
	echo "Sorry, you're just wrong!";
   }


	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>