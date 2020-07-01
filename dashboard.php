<?php
$endpoint = 'http://www.coinmine.pw/api.php?method=coinprofit';
// setup curl to make a call to the endpoint
$session = curl_init($endpoint);
// indicates that we want the response back
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
// exec curl and get the data back
$data = curl_exec($session);
// remember to close the curl session once we are finished retrieveing the data
curl_close($session);
// decode the json data to make it easier to parse the php
$search_results = json_decode($data, true);
if ($search_results === NULL) die('Error parsing json');
//print_r($search_results);

echo '<table>';
foreach ($search_results as $coin) {

$name = $coin["name"];
$profit = $coin["profit"];

echo '<tr><td>' . $name . '</td></tr>';
echo '<tr><td>' . $profit . '</td></tr>';

}
echo '</table>';
?>