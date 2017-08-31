<?php
$access_token = 'IKb/dsgr+Bi76jDTvRTKwUecKuzgCSdyhvmEBk+lYNEOp+AdnQFfmzh8qyf+3nEsaPJIhGfkvBarE0g+T3v2vh83dAPRTYuzWsW9bEj0vomWYDa4mVmLOEroqQGR0yx9JoATnB2Tq7JFv0aZQy8pWQdB04t89/1O/w1cDnyilFU=';

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
