<?php 

	$city = $_GET['location'];
	$city = str_replace(" ", "", $city);

	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	preg_match("/<span class=\"phrase\">(.*?)</i", $contents, $matches);


	print_r($matches[1]);

?>