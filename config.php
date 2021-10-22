<?php

use Dotenv\Dotenv;

require_once(($path_to_root ?? '.') . '/vendor/autoload.php');

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
$base_url = rtrim(($_ENV['BASE_URL'] ?? 'http://localhost/php'), '/') . '/';
