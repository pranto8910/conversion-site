<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>History</title>

</head>
<body>


	<?php

	// if ($_SERVER['REQUEST_METHOD'] === "GET")
	// {



	$data = file_get_contents("conversion.txt");
	$dataOK = json_decode($data);

	




	$catagory = $dataOK->Catagory;
	$unit = $dataOK->Unit;
	$rate = $dataOK->Rate;

	
	
	


	?>
	



	<h1>Page 3 [History]</h1>

	<p><h2>Conversion site</h2></p>

	<a href="./home.php">1.Home   </a>
	<a href="./conversion.php">2.Conversion Rate   </a>
	<a href="./history.php">3.History </a>



	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">

		<br><br>


		<h2><label for="catagory"><?php echo $catagory ?>  : </label>
			<label for="unit"><?php echo $unit ?>   : </label>
			<label for="Rate"><?php echo $rate ?></label>
		</h2>
		
		

	</form>
	



</body>
</html>