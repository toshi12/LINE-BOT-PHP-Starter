<?php
$access_token = 'g8qxfQJUFGE2Sd9SRDeht4orhZguT7O1JDGiCNqoeEflvrlJ/aiYuk+zdY5erfuoqu07qso3Vf31UsUAwnRysJXO0M9FkbA7KBuD16QHi7mIdcASS47E4iaEEKaCKsldM9qhba1M/zJecRXAW6ZPSgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
