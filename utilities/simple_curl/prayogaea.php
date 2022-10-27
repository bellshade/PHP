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

// echo "<pre>";
// print_r($data_user);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl | <?= $data_user['login']; ?></title>
</head>
<body>

    <table>
        <tr>
            <td><img src="<?= $data_user['avatar_url']; ?>" width="100px" height="100px"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?= $data_user['name']; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $data_user['login']; ?></td>
        </tr>
        <tr>
            <td>Link Github</td>
            <td>:</td>
            <td><a href="https://github.com/prayogaea" style="color: blue;"><?= $data_user['html_url']; ?></a></td>
        </tr>
        <tr>
            <td>Organizations</td>
            <td>:</td>
            <td><?= $data_user['company']; ?></td>
        </tr>
        <tr>
            <td>Location</td>
            <td>:</td>
            <td><?= $data_user['location']; ?></td>
        </tr>
    </table>
 
</body>
</html>