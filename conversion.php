<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversion</title>

</head>
<body>


	<?php


	if ($_SERVER['REQUEST_METHOD'] === "POST")
	{ 

		$array = array( "Catagory"=>basic_validation($_POST['catagory']),"Unit"=>basic_validation($_POST['unit']),
			"Rate"=>basic_validation($_POST['rate']) 
		);

		

		$array = json_encode($array);
		write($array);
	}

	// validate input
	function basic_validation($data)
	{
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripcslashes($data);
		return $data;
	}

 	// write in data.txt
	function write($content)
	{
		$data = fopen("conversion.txt","w");
		//$dataOK = json_decode($data,true);

		//$dataOK[] = $dataOK;
		
		//$new_data = json_encode($dataOK);
		
		fwrite($data, $content."\n");
		fclose($data);
	}



	?>



	<h1>Page 2 [Conversion Rate]</h1>

	<p><h2>Conversion site</h2></p>

	<a href="./home.php">1.Home   </a>
	<a href="./conversion.php">2.Conversion Rate   </a>
	<a href="./history.php">3.History </a>
	



	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">

		<p><h2>Conversion Rate:</h2></p>



		<label for="catagory">Catagory:</label>
		<input type="text" id="catagory" name="catagory" required>

		<label for="unit">Unit:</label>
		<input type="text" id="unit" name="unit" required>

		<label for="rate">Rate:</label>
		<input type="text" id="rate" name="rate" required>

		<input type="submit" value="submit">

	</form>




</body>
</html>