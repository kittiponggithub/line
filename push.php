<?php
 $strAccessToken = 'IKb/dsgr+Bi76jDTvRTKwUecKuzgCSdyhvmEBk+lYNEOp+AdnQFfmzh8qyf+3nEsaPJIhGfkvBarE0g+T3v2vh83dAPRTYuzWsW9bEj0vomWYDa4mVmLOEroqQGR0yx9JoATnB2Tq7JFv0aZQy8pWQdB04t89/1O/w1cDnyilFU=';
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "USER_ID";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
