<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?locale=en_US&query=new%20york",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: 1b16c3e269msh00a9cf9fdc56bc6p192bc9jsnc179f72b7880"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>