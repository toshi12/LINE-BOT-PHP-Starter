<?php
$access_token = 'kw6zh7XCA4IEyCtWlIrHI6TrUtpaaHo3zQ/n5wzzSPtDR10Ny5n2uLljkEbGz/SNqu07qso3Vf31UsUAwnRysJXO0M9FkbA7KBuD16QHi7l82IkTFqlTC3kneDSZzG97I5VEzlePKysCZ/x7+vmL8wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
