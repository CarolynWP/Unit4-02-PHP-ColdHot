<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Tanoak Tree favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>Hot Or Cold?</title>
	</head>
	
	<!-- Body -->
	<body>
<?php echo "<h1>Hot Or Cold?</h1>" ?>

		<!-- input boxes -->
		<h3>
			<?php echo '<h2>Is it hot or cold outside? Use this website to find out!</h2>' ?>
			<form method = "post">
				<?php echo '<p>Temperature (in Celsius):</p>' ?><input type="number" name="temperature">  
				<br>
				<br>
	
				<!-- button -->
				<input type = "submit" name = "submit" value="Enter">  

				<!-- calculation -->
				<?php   
if(isset($_POST["submit"]))  
{   
	// variable
	$temp= $_POST["temperature"]; 
	
	// if statement for if the temperature is greater than 15
if ($temp >= 15) {
  echo '<h4>It is hot outside!</h4>'; 

}

	//else statement
else {
	echo '<h4>It is cold outside!</h4>';
}
}   
	?>
	</body>
</html>