# Operator

Dalam bahasa pemrograman, operator digunakan untuk melakukan operasi terhadap variabel dan nilai. Dalam PHP, operator dibagi menjadi beberapa bagian yakni:
1. Operator Aritmatika
2. Operator Penugasan/Assignment
3. [Operator Pembanding/Comparison](#operator-pembanding)
4. [Operator Logika/Logical](#operator-logical)
5. Operator Bitwise
6. Conditional Assignment

## Operator Pembanding
Operator pembanding ini digunakan untuk membandingkan dua variabel yang nilainya sama atau berbeda.

Operator | Nama | Contoh | Keterangan
:-------:|------|:------:|-----------
== | Sama/Setara | $a == $b | Akan bernilai `true` apabila nilai $a sama dengan $b
=== | Identik | $a === $b | Akan bernilai `true` apabila $a dan $b nilai dan tipe datanya itu sama
!= | Tidak sama | $a != $b | Akan bernilai `true` apabila nilai $a tidak sama dengan $b
\<> | Tidak sama | $a <> $b | Sama seperti di atas
!== | Tidak identik | $a !== $b | Akan bernilai `true` apabila $a dan $b nilai **atau** tipe datanya itu tidak sama
\> | Lebih besar dari | $a > $b | Akan bernilai `true` apabila nilai $a lebih besar dari $b
\< | Lebih kecil dari | $a < $b | Akan bernilai `true` apabila nilai $a lebih kecil dari $b
\>= | Lebih besar dari | $a > $b | Akan bernilai `true` apabila nilai $a lebih besar dari atau sama dengan $b
\<= | Lebih kecil dari | $a < $b | Akan bernilai `true` apabila nilai $a lebih kecil dari atau sama dengan $b
\<=> | Spaceship | $a <=> $b | Akan bernilai -1 apabila $a < $b, bernilai 0 apabila $a == $b, bernilai 1 apabila $a > $b

Contoh kodenya dapat dilihat [di sini](./3_comparison_operator.php).

## Operator Logika
Operator logika ini digunakan untuk menggabungkan pernyataan yang bersifat kondisional.

Operator | Nama | Contoh | Keterangan
:-------:|------|:------:|-----------
and / && | And | $x && $y | Akan bernilai `true` apabila $x **dan** $y bernilai `true`
or / \|\| | Or | $x \|\| $y | Akan bernilai `true` apabila $x **atau** $y bernilai `true`
xor | Xor | $x xor $y | Akan bernilai `true` apabila **hanya di antara** $x **atau** $y yang bernilai `true`, sebaliknya akan bernilai `false`
\! | Not | !$x | Akan bernilai `true` apabila $x bernilai `false` dan sebaliknya.

Contoh kodenya dapat dilihat [di sini](./4_logical_operator.php).

### Referensi
- [W3School - PHP Operator](https://www.w3schools.com/php/php_operators.asp)
