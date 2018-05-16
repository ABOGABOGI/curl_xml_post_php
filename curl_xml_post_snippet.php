<?php
/**
* PHP snippet to send XML POST request using CURL
* @author Hem Thapa <mailme@hemthapa.com>
* @website http://hemthapa.com
*/

$url = 'POST_URL_HERE';
$xml = 'VALID XML STRING HERE';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);
curl_close($ch);

print_r($output); // display curl response

?>