<?php 
function https_request($url){

    $data = curl_init();
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data,CURLOPT_USERAGENT,'Chrome');
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($data);
    curl_close($data);

    return $output;
}

$data_user = https_request("https://api.github.com/users/prayogaea");
$data_user = json_decode($data_user, true);

echo "<pre>";
print_r($data_user);
echo "</pre>";

