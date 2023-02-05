<?php

$dh = "SELECT countryname, code FROM `country` WHERE 1";
$cou = $conn->query($dh);
if ($cou->num_rows > 0) 
{
	$n = $cou->num_rows;
	echo"<select name = 'country' placeholder='select a country'>";
	echo"<option disabled selected hidden>select a country</option>";
	while($raw = $cou->fetch_assoc())
	{ 
		echo"<option>";
	echo $raw["countryname"];
	echo"</option>";
	}
	
	
	
	
	echo"</select>";
}


?>