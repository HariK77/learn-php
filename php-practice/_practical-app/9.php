<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	echo 'Testing Array Implode and Explode <br>';

	$arr1 = ['I', 'am', 'Hari', 'Krishna'];

	echo 'Array implode example <br>';

	$con_arr1 = implode($arr1, ' ');

	echo $con_arr1.'<br>';

	echo 'Array Explode example <br>';

	$con_arr2 = explode(' ', $con_arr1);

	print_r($con_arr2);
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>