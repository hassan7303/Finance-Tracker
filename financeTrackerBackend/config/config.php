<?php
require (__DIR__ . '/../vendor/autoload.php');

use Dotenv\Dotenv;

session_start();

$dotenv = Dotenv::createImmutable(__DIR__."/../")->load();
