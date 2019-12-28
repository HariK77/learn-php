<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
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

 echo pow(5, 2);
 echo "<br>";

 echo strlen("Hari Krishna");
 echo "<br>";

 $array = array(23, 45, 67, 77);
 array_push($array, 109, 209);

 print_r($array);

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>