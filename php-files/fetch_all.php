<?php
require 'dbconfig.php';

// fetch_all.php
$stmt = $pdo->query("SELECT * FROM grocery_items ORDER BY id");
$rows = $stmt->fetchAll(); // returns an array of associative arrays

echo "<h3>fetchAll() output</h3>";
echo "<pre>";
print_r($rows);
echo "</pre>";
