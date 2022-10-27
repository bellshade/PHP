<?php

function http_request($url)
{
    $data = curl_init();
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($data);
    curl_close($data);

    return $output;
}

$data_user = http_request("https://api.github.com/users/prayogaea");
$data_user = json_decode($data_user, true);

echo "<pre>";
print_r($data_user);
echo "</pre>";
