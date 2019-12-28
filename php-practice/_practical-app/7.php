<?php include "functions.php" ?>
<?php include "includes/header.php" ?>


<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		$number = 5;

		for ($i = 1; $i <= $number; $i++) {
			// echo $i.'<br>';
			for ($j = $number; $j >= 1; $j--) {
				if ($i < $j) {
					echo '-';
				} else {
					echo $i;
				}
			}
			echo '<br>';
		}
		echo '<hr>';

		$a = 7;

		echo '$a = ' . $a . '<br>';

		$b = 19;

		echo '$b = ' . $b . '<br>';

		$a = $a + $b;

		$b = $a - $b;

		$a = $a - $b;

		echo '$a  = ' . $a . ' and $b = ' . $b;

		echo '<hr>';

		echo "second Swap with built in functions<br>";

		list($a, $b) = array($b, $a);

		echo '$a  = ' . $a . ' and $b = ' . $b;

		echo '<hr>';

		echo "Sorting Arrays<br>";

		$array1 = array(120, 34, 26, 2345, 654);

		$array2 = array(1220, 345, 246, 2345, 654);

		echo "before sorting arrays : <br>";

		print_r($array1);
		echo '<br>';
		print_r($array2);
		echo '<br>';

		echo "After sorting arrays : <br>";

		array_multisort($array1, $array2);

		print_r($array1);
		echo '<br>';
		print_r($array2);
		echo '<br>';

		$number = 6;                   /*number to get factorial */
		$fact   = 1;
		for ($k = 1; $k <= $number; ++$k) {
			$fact =  $fact * $k;
		}
		echo "Factorial of {$number} is " . $fact;

		/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

		?>





	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php" ?>