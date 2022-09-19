<?php

    //server-side-integration
    $secret_key = "isi_dengan_secret_key";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Google reCAPTCHA</title>
    </head>
    <body>
        
        <!-- client-side-integration -->
        <div class="g-recaptcha" data-sitekey="isi_dengan_site_key"></div>

        <!-- Load Library Google reCaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>