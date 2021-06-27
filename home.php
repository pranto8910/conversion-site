<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

</head>
<body>



	<?php
	$mes = "";
	$res = 0;


	$data = file_get_contents("conversion.txt");
	$dataOK = json_decode($data);


	$catagory = $dataOK->Catagory;
	$unit = $dataOK->Unit;
	$rate = $dataOK->Rate;


	if ($_SERVER['REQUEST_METHOD'] === "POST")
	{

		$value=basic_validation($_POST['value']);

		
		
		if(is_numeric($value))
		{
			$res = $value * $rate;
		}
		else
		{
			$error = "enter valid number!";
		}
		
	}
	
// validate input
	function basic_validation($data)
	{
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripcslashes($data);
		return $data;
	}

	?>
	


	<h1>Page 1 [Home]</h1>

	<p><h2>Conversion site</h2></p>

	<a href="./home.php">1.Home   </a>
	<a href="./conversion.php">2.Conversion Rate   </a>
	<a href="./history.php">3.History </a>
	



	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">

		<p><h2>Converter:</h2></p>

		Select Catagory:
		<select name="Religion" required > 
			<option value="kg_to_gram" name="conversion" ><?php echo $catagory ?></option> 

		</select>
		<br><br>



		<label for="value">Value:</label>
		<input type="text" id="value" name="value" value="<?php echo $value    ?>" required>
		<input type="submit" value="submit">
		<?php echo $error    ?>
		<br><br><br>

		<label for="result">Result:</label>
		<input type="text" id="result" name="result" value="<?php echo $res ?>"    >
	</form>




</body>
</html>