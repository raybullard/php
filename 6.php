
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global
 */

if(isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	if (strlen($name) >= 5 ) {
		echo "This worked!";
	} elseif(strlen($name) < 4) {
		echo "This isn't anywhere near long enough.";
	} else {
		echo "You needs to type something yo!";
	}

}
	
?>

<form action="6.php" method="post" >
	<input name="name" placeholder="Enter name here" type="text"/><br/>
	<input type="submit" name="submit">
</form>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>