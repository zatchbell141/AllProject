<?php
$chatApiToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MjA1Mzk3NTgsInVzZXIiOiI5MTg4OTg0NTA4MTgifQ.15IN6EsVhp4p5AHMvBgjvwVsZzip1hJkdk4fKkIzGTY"; // Get it from https://www.phphive.info/255/get-whatsapp-password/
$number = "+919167218889"; // Number
$message = "Hello :)"; // Message
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'http://chat-api.phphive.info/message/send/text',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS =>json_encode(array("jid"=> $number."@s.whatsapp.net", "message" => $message)),
CURLOPT_HTTPHEADER => array(
'Authorization: Bearer '.$chatApiToken,
'Content-Type: application/json'
),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;