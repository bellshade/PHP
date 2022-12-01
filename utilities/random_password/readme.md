# Fungsi Untuk Membuat Password Acak
Kode untuk membuat password acak/random dengan panjang yang bisa kita tentukan sendiri:
```
function generate_password($length = 8)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 !@#$%^&*()_-=+;:,.?{}[]/|\\-";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}
```

Untuk penggunaannya sangat mudah, cukup panggil fungsi `generate_password()` dan masukkan parameternya sebagai panjang password yang diinginkan, jika tidak dimasukkan apapun maka panjang defaultnya adalah 8.