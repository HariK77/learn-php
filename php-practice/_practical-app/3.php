<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

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


 if (1>2) {
	 echo "this is not true";
 } elseif (4<2) {
	 echo "This is also not true";
 } else {
	 echo "I Love PHP";
 }

 echo "<br>";

 for ($i = 1; $i <=10; $i++) {
	 echo $i."<br>";
 }

 echo "<br>";

 $test = 7;

 switch ($test) {
	case 1:
		echo 'Number is 1';
		break;
	case 2:
		echo 'Number is 2';
		break;
	case 3:
		echo 'Number is 3';
		break;
	case 4:
		echo 'Number is 4';
		break;
	case 5:
		echo 'Number is 5';
		break;
	case 6:
		echo 'Number is 6';
		break;
	 case 7:
		 echo 'Number is 7';
		 break;
	 
	 default:
		 echo "Can not find the number";
		 break;
 }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>