<?php

$db_name = 'zap936258-1';
$db_pass = 'LsXrjV4iHWKwjmVs';
$db_user = 'zap936258-1';
$db_host = 'mysql-mariadb-27-104-lax.zap-hosting.com';

// define("DB_HOST", "185.249.199.70");
// define("DB_USER", "sasrpgroup");
// define("DB_PASS", "SaSrP2023");
// define("DB_NAME", "sasrpdatabase");

$mysqli = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error() . "<br> In simpler terms there was and error connecting to our servers");
}

include 'functions.php';

// include_once 'functions.php';

// $pdoOptions = array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
//     PDO::ATTR_EMULATE_PREPARES => false
// );

// try {
//     $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $pdoOptions);
// }

// catch(Exception $e) {
//     throwError('Unable to connect to database.', true);
//     die('Unable to connect to database.');
// }

// function mysqli_result($res, $row, $field) {
//     $res->data_seek($row);
//     $datarow = $res->fetch_array();
//     return $datarow[$field];
// }