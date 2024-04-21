<?php

define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'mineraly',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

session_start();

require_once('classes/Page.php');
require_once('classes/Menu.php');
require_once('classes/Database.php');
require_once('classes/Login.php');
