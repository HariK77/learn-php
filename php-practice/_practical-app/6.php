
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

 if (isset($_POST['submit'])) {
	 $test = $_POST['test'];
	 echo $test;
 }



	
?>
 <form action="6.php" method="POST">
	<input type="text" name="test" placeholder="Enter any text">
	<br>
	<button type="submit" name="submit">Send</button>
 </form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>