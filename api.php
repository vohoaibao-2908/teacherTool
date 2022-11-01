<?php



function curl_url1($url, $arr = [])
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POSTFIELDS => http_build_query($arr)
  ));


  $resp = curl_exec($curl);
  $result = json_decode($resp, TRUE);
  curl_close($curl);
  return $resp;
}



$url = 'https://ongtrum.pro/api/price.aspx';
$api = 'DnHENAePMW6EsmK87BgwJ3RMPJjRukSZw1siqInlRtrArZrQa3rFj30MD47yJ1lvgMZrndzPXJ11daT3';

$arr = [
  "key" => 'DnHENAePMW6EsmK87BgwJ3RMPJjRukSZw1siqInlRtrArZrQa3rFj30MD47yJ1lvgMZrndzPXJ11daT3',
];




$data =   curl_url1($url, $arr);



print_r($data);
