<?php
$access_token = 'zfqss2oLTI+iZx3P+Ober/8y5FAucS74tgVKaHGL9b4XAPaAlM9nG/Yke5Jb+DJfqu07qso3Vf31UsUAwnRysJXO0M9FkbA7KBuD16QHi7mJkSHS6bMSvPzvoKV9KHKjg6vtWTPbDapd3VCbwziJKQdB04t89/1O/w1cDnyilFU=';

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
