<?php
//official documentation of huggy: https://developers.huggy.io/API/api-v3.html 
set_time_limit(120);
$contacts = [];
$api_token = "";
$companieId= "";

function deletContact($contact_id, $api_token, $companieId){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.huggy.app/v3/companies/".$companieId."/contacts/".$contact_id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

//curl_setopt($ch, CURLOPT_POSTFIELDS, "{}
//");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json",
  "Authorization: Bearer ".$api_token
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
}

for($i=0;$i < count($contacts); $i++){
  echo $contacts[$i];
  echo "<br/>";
  deletContact($contacts[$i], $api_token,$companieId);
}
 
