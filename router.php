<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|md)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    // echo substr_count(basename($_SERVER["REQUEST_URI"]), '.php') > 0;
    // die;
    if (substr_count(basename($_SERVER["REQUEST_URI"]), '.php') != '') {
        return false;
    }
    require __DIR__ . '/index.php';
}
