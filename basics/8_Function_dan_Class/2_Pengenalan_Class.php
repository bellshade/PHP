<?php

echo "<h1>2. Pengenalan Class</h1>";
class Buah
{
    // Properties
    //Properti atau Atribut apa aja yang akan dibutuhkan dari kelas buah
    public $nama;
    public $rasa;

    // Methods
    //Method apa aja yang akan dilakukan oleh kelas buah
    function set_name($nama)
    {
        $this->nama = $nama;
    }
    function get_name()
    {
        return $this->nama;
    }
}

  $pisang = new Buah();

  $apel = new Buah();
  $apel->set_name('Apel');
  $pisang->set_name('Pisang');

  echo $apel->get_name();
  echo "<br>";
  echo $pisang->get_name();
