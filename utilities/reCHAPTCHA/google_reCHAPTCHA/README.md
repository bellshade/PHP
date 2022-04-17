## Cara Membuat Captcha dengan Menggunakan Google reCAPTCHA

- step 1 
    - setting google rechptcha
    - Buka link ini : [https://www.google.com/recaptcha](https://www.google.com/recaptcha)
- step 2
    - Untuk Label bisa Anda isikan bebas sesuai nama aplikasi yang Anda buat. Untuk kali ini kita   beri label `Bellshade`. Kemudian untuk tipe reCAPTCHA nya kita pilih yang reCAPTCHA v2.
- step 3
    - Sekarang Anda sudah mendapatkan 2 buah key yakni Site Key dan Secret Key. 2 key ini nanti akan kita gunakan sebagai kode/token agar kita bisa menggunakan reCAPTCHA.
    - Site Key:
    ```
        6LdmOH0fAAAAAMQcAFgh7Zw7-H0gQfMN_N0RH2HG
    ```
    - Secret Key:
    ```
        6LdmOH0fAAAAAMQWyrJFHdC1KDLcl5dyI2ltTS4o
    ```
    - ini yang sudah saya simpan di file key.json
    ```
    {
        "see-client-side-integration": 
        {
            "site-key": "6LdmOH0fAAAAAMQcAFgh7Zw7-H0gQfMN_N0RH2HG"
        },
        "see-server-side-integration": 
        {
            "secret-key": "6LdmOH0fAAAAAMQWyrJFHdC1KDLcl5dyI2ltTS4o"
        } 
    }
    ```
- step 4
    - Implementsi dengan PHP
    - Buat file chaptcha.php
    ```
        <?php 
            //server-side-integration
            $secret_key = "6LdmOH0fAAAAAMQWyrJFHdC1KDLcl5dyI2ltTS4o";
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
                <div class="g-recaptcha" data-sitekey="6LdmOH0fAAAAAMQcAFgh7Zw7-H0gQfMN_N0RH2HG"></div>

                <!-- Load Library Google reCaptcha -->
                <script src='https://www.google.com/recaptcha/api.js'></script>
            </body>
        </html>
    ```

- source code juga saya lengkapi dengan gambar di direktori images dari step 1 sampai step 5.
- sekian terimakasih.