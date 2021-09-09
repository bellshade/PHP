<?php

/**
 * File ini digunakan untuk melakukan autoloading
 * pada kelas-kelas yang digunakan oleh file bootstrap index.php
 */

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';
});
