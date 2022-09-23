<?php

	$str = 'c:\WebServers\home\testsite\www\myfile.txt';

	echo $str . "<br>";

	// $array = preg_replace('/[^\d]/', ' ', $str);
	// echo "<br>erw: " . $array . "<br>";

	echo "File name is : ";
	print_r (end(explode("\\" ,$str)));

	// $array = str_split($str);

	// foreach ($array as $key) {
	// 	// echo $key . "<br>";
	// 	if ($key == '\') {
	// 		$key = '/';
	// 	}
	// } 
?>