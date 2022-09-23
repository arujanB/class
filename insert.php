<?php
include_once 'database.php';

	// $sku = $_POST['sku'];
	// $name = $_POST['name'];
	// $price = $_POST['price'];
	// $switch = $_POST['size'];
	// $height = $_POST['height'];
	// $width = $_POST['width'];
	// $length = $_POST['length'];
	// $weight = $_POST['weight'];


	// $sql = "INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight');";
	// mysql_query($connect, $sql);

// another vertion

// $sku = $_POST['sku'];
// 	$name = $_POST['name'];
// 	$price = $_POST['price'];
// 	$switch = $_POST['switch'];
// 	$switch = $_POST['size'];
// 	$height = $_POST['height'];
// 	$width = $_POST['width'];
// 	$length = $_POST['length'];
// 	$weight = $_POST['weight'];


// 	$stmp = $connect->prepare("INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight');");
// 	$stmp = bind_param("ssisiiiii", $sku, $name, $price, $switch, $size, $height, $width, $length, $weight);
// 	$stmp->execute();
// 	echo "Successful";
// 	$stmp->close();
// 	$connect->close();

if(isset($_POST['add']))

{    
    $sku = $_POST['sku'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$switch = $_POST['type2'];
	$size = $_POST['size'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$length = $_POST['length'];
	$weight = $_POST['weight'];
	// var_dump($width);
//trying something
	// var_dump($switch);
	if ($switch == 'size') {
		var_dump($switch);
		$switch = 'Size';
		$sql = "INSERT INTO product (sku, name, price, switch, size) VALUES ('$sku', '$name', '$price', '$switch', '$size')";
	}elseif ($switch == 'weight') {
		$switch = 'Weight';
		$sql = "INSERT INTO product (sku, name, price, switch, weight) VALUES ('$sku', '$name', '$price', '$switch', '$weight')";
	}elseif ($switch == 'dimention') {
		$switch = 'Dimention';
		$sql = "INSERT INTO product (sku, name, price, switch, height, width, length) VALUES ('$sku', '$name', '$price', '$switch', '$height', '$width', '$length')";
	}
	// else{
	// 	$sql = "INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0')";
	// }
//end

    // $sql = "INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight')";
	
	echo "Here should show your result:<br>";

    if (mysqli_query($connect, $sql)) {
       echo "New record has been added successfully!";
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($connect);
    }

    mysqli_close($connect);
}

?>