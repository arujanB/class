<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$text = "До1ро2гие д23рузья, повышение уровня гражданского с4ознания влечет за собой процесс внедре3ния и модернизации направлений пр3огрессивного развития! Таким образ4ом, постоянное информаци5онно-техническое обеспечение нашей деят6ельности иг8рает важную роль в формировании соот85ветствующих условий активизации! Сообр0ажения высшего поря9дка, а так9же сло0жив56шаяся структура организации треб0ует о5т на5с ана567лиза экономической целесообра8зности прини5678маемых реше7ний!";
	// echo $text . "<br><br>";
$text1 = "100 32 eref ef23c KJj1j!";
	// $array = str_split($text);
	$array1 = str_split($text);
	$sum = 0;

	// print_r($array);

	// foreach ($array as $key) {
		
	// }

	// echo $array = preg_replace('/[^\d]/', ' ', $text);
	echo $array = preg_replace('/[^\d]/', ' ', $text);
	// for ($i=0; $i <count($array); $i++) { 
		
	// }
	echo "<br>";
	var_dump(array_sum(explode(' ', $array)) );
	
// 	$array2 = str_split($array);

// 	foreach ($array2 as $k) {
// 		echo $k;
// 		$sum += $k;
// 	}
// echo $sum;
?>