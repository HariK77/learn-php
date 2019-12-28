<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	echo "Logical Problems<br>";

	echo "Remove duplicate elements from an array <br>";

	$arr = [2, 4, 8, 2, 4, 8];

	$mod_arr = array();

	foreach ($arr as $ca) {
		foreach ($mod_arr as $ma) {
			if ($ca == $ma) {
				continue 2;
			}
		}
		$mod_arr[] = $ca;
	}

	print_r($mod_arr);

	echo "<br>";

	echo "Printing only duplicate elements from an array <br>";

	$arr = array(3, 5, 2, 5, 3, 9);
	$temp_array = array();
	$dup_array = array();
	foreach($arr as $val)
	{
		if(isset($temp_array[$val]))
		{
			$temp_array[$val] = $val;
		}else{
			$temp_array[$val] = 0;
		}
	}

	foreach($temp_array as $val2)
	{
		if($val2 > 0)
		{
			$dup_array[] = $val2;
		}
	}
	
	print_r($dup_array);

	echo "<br>";

	echo "Finding largest number in an array <br>";

	$arr3 = [2, 14, 23, 2, 96];

	$greatest = 0;

	foreach ($arr3 as $ca3) {
		if ($ca3 >= $greatest) {
			$greatest = $ca3;
		}
	}

	print_r($greatest);

	echo "<br>";


function test($n) {

$n=$n+10;

}

$m=5;

test($m);

echo $m;


echo "<br>";

function test2(&$n) {

    $n=$n+10;

}

$m=5;

test2($m);

echo $m;





	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>