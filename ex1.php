<?php

	$text = "До1ро2гие д23рузья, повышение уровня гражданского с4ознания влечет за собой процесс внедре3ния и модернизации направлений пр3огрессивного развития! Таким образ4ом, постоянное информаци5онно-техническое обеспечение нашей деят6ельности иг8рает важную роль в формировании соот85ветствующих условий активизации! Сообр0ажения высшего поря9дка, а так9же сло0жив56шаяся структура организации треб0ует о5т на5с ана567лиза экономической целесообра8зности прини5678маемых реше7ний!";
	echo $text . "<br><br>";

	// $array = str_split($text);
	$array1 = str_split($text);
	$sum = 0;

	// print_r($array);

	// foreach ($array as $key) {
		
	// }

	echo $array = preg_replace('/[^\d]/', ' ', $text);
	// foreach ($array as $key) {
	// 	echo $array[$key] . "<br>";
	// }
	// $array2 = array();
	// array_push($array2, $array)
	foreach ($array1 as $charAt) {

		if ($charAt == 1 || $charAt == 2 || $charAt == 3 || $charAt == 4 || $charAt == 5 || $charAt == 6 || $charAt == 7 || $charAt == 8 || $charAt == 9 || $charAt == 0) {
				


			if ($charAt+1 == 1 || $charAt+1 == 2 || $charAt+1 == 3 || $charAt+1 == 4 || $charAt+1 == 5 || $charAt+1 == 6 || $charAt+1 == 7 || $charAt+1 == 8 || $charAt+1 == 9 || $charAt+1 == 0) {
				$other = " ";
				// $other = $charAt + $charAt;
				// $sum += $other;
				

				if ($charAt+2 == 1 || $charAt+2 == 2 || $charAt+2 == 3 || $charAt+2 == 4 || $charAt+2 == 5 || $charAt+2 == 6 || $charAt+2 == 7 || $charAt+2 == 8 || $charAt+2 == 9 || $charAt+2 == 0) {

					if ($charAt+3 == 1 || $charAt+3 == 2 || $charAt+3 == 3 || $charAt+3 == 4 || $charAt+3 == 5 || $charAt+3 == 6 || $charAt+3 == 7 || $charAt+3 == 8 || $charAt+3 == 9 || $charAt+3 == 0) {

						// if ($charAt+4 == 1 || $charAt+4 == 2 || $charAt+4 == 3 || $charAt+4 == 4 || $charAt+4 == 5 || $charAt+4 == 6 || $charAt+4 == 7 || $charAt+4 == 8 || $charAt+4 == 9 || $charAt+4 == 0) {

						// 	$other = $charAt + ($charAt + 1) + ($charAt + 2) + ($charAt + 3) + ($charAt + 4);
						// 	$sum += $other;
						// }else {
							$other = $charAt + " " + ($charAt + 1) + " " + ($charAt + 2) + " " + ($charAt + 3);
							$sum += $other;
						// }

						
					}else {
						$other = $charAt + " " + ($charAt + 1) + " " + ($charAt + 2);
						$sum += $other;
					}

					
				}else {
					$other = $charAt + " " + ($charAt + 1);
					$sum += $other;
				}

				
			}else {
				$sum += $charAt;
			}

			




		}
		// $sum += 1;



	}
	echo "<br>" . $sum;

?>