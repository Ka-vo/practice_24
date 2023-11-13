<?php

namespace app; 

session_start(); 
require_once 'core' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . "config.php"; 
require_once dirname(__DIR__, 1) . '/vendor/autoload.php'; 
core\Route::start();
require_once DATA . DIRECTORY_SEPARATOR . 'DB.php';

