<?php
/*
//Database Parameters
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','addressbook');

$db =new PDO("mysql:host=$DB_HOST;dbname=addressbook", $DB_USER, $DB_PASS);
*/


$DB_HOST = 'localhost';
$DB_NAME = 'addressbook';
$DB_USER = 'root';
$DB_PASS = '';

    
$db = new PDO("mysql:DB_HOST=$DB_HOST;DB_NAME=$DB_NAME", $DB_USER, $DB_PASS);
