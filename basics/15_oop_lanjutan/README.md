<p align="center">
<img width="30%" src="../../assets/images/bellshade-inline.png" />
<h1 align="center">Object Oriented Programing  Lanjutan</h1>
</p>

Materi kali ini merupakan materi lanjutan dari _Object Oriented Programming_ (OOP) Dasar. Kita akan membahas lebih mendalam lagi mengenai OOP itu sendiri.

## Daftar isi

- [Inheritance](#1-inheritance)
- [Object Type](#2-object-type)
- [Access Modifier](#3-access-modifier)

## 1. Inheritance

_Inheritance_ merupakan sebuah kata dalam bahasa inggris yang memiliki arti warisan. Dalam OOP _Inheritance_ bisa diartikan sebagai pewarisan sifat. Maksudnya disini adalah sebuah _Class_ yang dibuat memiliki keturunan (anak) yang mewarisi semua yang ada dalam _Class_ tadi ditambah dengan tambahan properti dan method milik _Class_ Turunan itu sendiri.

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](1_inheritance_Kucing.php#L13-L23)
<br/>
<br/>

## 2. Object Type

Perlu diingat, ketika membuat sebuah class maka di dalam class tersebut tentu saja terdapat beberapa method yang bisa diberikan parameter apa saja. Selain dari stirng, integer, atau bahkan boolean ternyata object bisa digunakan juga sebagai sebuah parameter dalam satu method. Dengan begitu method yang ada dalam objek tersebut bisa juga digunakan di dalam method yang parameternya adalah sebuah objek.

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](2_object_type.php#L13-L23)
<br/>
<br/>

## 3. Access Modifier

Properti dan juga method memiliki 3 macam aksesiblitas yaitu public, private, dan juga protected. Properti dan methodu public artinya bisa diakses dimana saja. Kemudian untuk protected berarti property atau method tersebut masih bisa diakses dalam lingkup Class tersebut dan juga turunannya. Dan terakhir ada Private yang membuat property dan method hanya bisa di akses dalam lingkup Class tersebut saja.

Sebagai contoh yang sederhana, gambar berikut ini menunjukkan apa akibat ketika mencoba untuk mengakses sebuah properti Protected dan dipanggil melalui class yang berdiri sendiri.
<br/>
<br/>

<p align="center">
    <img src="../../assets/content/basics/15_oop_lanjutan/3_protected.gif" width="100%" />
</p>
<br/>

Selanjutnya, gambar berikut ini menunjukkan apa akibat yang bisa didapatkan ketika mencoba untuk mengakses sebuah properti Private. Akan di peroleh error karena properti itu hanya bisa di akses di dalam Class yang membuatnya.

<p align="center">
    <img src="../../assets/content/basics/15_oop_lanjutan/3_private.gif" width="100%" />
</p>

[![](https://img.shields.io/static/v1?&label=Demo&message=%3e&color)](3_access_modifier.php#L13-L23)
<br/>
<br/>
