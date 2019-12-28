<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->

	<article class="main-content col-xs-8">


		<?php

		echo 'PHP Interview Questions : <br>';

		echo "Printing star pattern type 1 <br>";

		$n = 6;

		for ($i = 1; $i <= $n; $i++) {
			for ($j = $n - $i; $j >= 1; $j--) {
				echo '*';
			}
			echo "<br>";
		}

		echo "Printing star pattern type 2 <br>";

		$n = 7;

		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $i; $j++) {
				echo '$';
			}
			echo "<br>";
		}

		echo "Printing star pattern type 3 <br>";

		// for ($i = 0; $i <= 6; $i++) {
		// 	for ($k = 6; $k >= $i; $k--) {
		// 		echo " &nbsp;";
		// 	}
		// 	for ($j = 1; $j <= $i; $j++) {
		// 		echo "* &nbsp;";
		// 	}
		// 	echo "<br>";
		// }
		// for ($i = 5; $i >= 1; $i--) {
		// 	for ($k = 6; $k >= $i; $k--) {
		// 		echo " &nbsp;";
		// 	}
		// 	for ($j = 1; $j <= $i; $j++) {
		// 		echo "* &nbsp;";
		// 	}
		// 	echo "<br>";
		// }
		$n = 7;

		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $i; $j++) {
				echo '$';
			}
			echo "<br>";
		}

		$n = 7;

		for ($i = 1; $i <= $n; $i++) {
			for ($j = $n - $i; $j >= 1; $j--) {
				echo '$';
			}
			echo "<br>";
		}

		echo "Printing star pattern type 4 <br>";

		$n = 5;

		for ($i=1; $i <= $n; $i++) { 
			for ($j=1; $j <= $n; $j++) { 
				echo '*';
			}
			echo '<br>';
		}


		echo "Finding Factorial of Numbers: <br>";

		$number = 10;

		$fact = 1;

		for ($i=1; $i <= $number; $i++) { 
			$fact = $fact * $i;
		}

		echo "Factorial of {$number} is ".$fact. "<br>";

		echo "Checking whether a number is prime or not. <br>";

		
	


		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/

		?>





	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php" ?>