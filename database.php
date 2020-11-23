<?php

$Server="localhost";

$User="root";

$pw="";//password

$db="bookwizard";//DBname

$con=mysqli_connect($Server,$User,$pw,$db);

if (!$con)

{
	
	die("erro: " . mysqli_connect_error());
	
}
else
	
	echo "DB connected!"."<br>";
	
	//
	
	mysqli_set_charset($con,"utf8");
	?>