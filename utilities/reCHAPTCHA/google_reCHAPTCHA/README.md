## Cara Membuat Captcha dengan Menggunakan Google reCAPTCHA

- step 1 
    - setting google rechptcha
    - Buka link ini : [https://www.google.com/recaptcha](https://www.google.com/recaptcha)
- step 2
    - Untuk Label bisa Anda isikan bebas sesuai nama aplikasi yang Anda buat. Untuk kali ini kita   beri label `Bellshade`. Kemudian untuk tipe reCAPTCHA nya kita pilih yang reCAPTCHA v2.
- step 3
    - Implementsi dengan PHP
    - Buat file chaptcha.php
    ```
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
                <title>Membuat Google reCHAPTCHA</title>
            </head>
            <body>
                
                <!-- client-side-integration -->
                <div class="g-recaptcha" data-sitekey="isi_dengan_site_key"></div>

                <!-- Load Library Google reCaptcha -->
                <script src='https://www.google.com/recaptcha/api.js'></script>
            </body>
        </html>
    ```

- source code juga saya lengkapi dengan gambar di direktori images dari step 1 sampai step 3.
- sekian terimakasih.