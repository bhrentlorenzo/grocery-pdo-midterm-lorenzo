<?php
// dbconfig.php
// Database configuration file using PDO

$host = '127.0.0.1';
$db   = 'grocery_db';
$user = 'root';        // change if your MySQL user is different
$pass = '';            // change if you have a password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // associative arrays by default
    PDO::ATTR_EMULATE_PREPARES   => false,                  // use native prepares if possible
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // In production, log the error but don't display details to users
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
