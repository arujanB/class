<?php

	// echo "Random<br>";

	// $random = new SplFixedArray(3);
	// $random->toArray();
	// echo gettype($random);

	// foreach ($random as $key) {
	// 	$key = rand(1, 100);
	// 	echo $key . "; ";
	// }

	// $x = rand(1, 100);
	// echo "<br> Your number X = " . $x ."<br>";

	// echo '<br>';

	// return $myArray;

	// foreach ($random as $number) {
	// 	echo $number . '<br>';
	// 	// if ($x == $number) {
	// 	// 	echo $x . " is contain your massive <br>";
	// 	// 	return;
	// 	// }
	// 	// return "Is does not exist!";
	// }

	$a1=array(rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100));

	foreach ($a1 as $key) {
		// $key = rand(1, 100);
		echo $key . "; ";
	}

	echo '<br>The size is given as = ' . count($a1) . "<br>";

	$x = rand(1, 100);
	echo "<br> Your number X = " . $x ."<br>";

	echo '<br>';

	foreach ($a1 as $number) {

		if ($x == $number) {
			echo $x . " is contain your massive <br>";
			return;
		}
	}
	echo "Is does not exist!";

?>