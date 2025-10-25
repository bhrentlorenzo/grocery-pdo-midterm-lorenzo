<?php
require 'dbconfig.php';

// fetch_one.php
$stmt = $pdo->prepare("SELECT * FROM grocery_items WHERE id = :id");
$stmt->execute(['id' => 1]); // change id as needed
$row = $stmt->fetch(); // fetches a single row (associative array)

echo "<h3>fetch() output (id = 1)</h3>";
echo "<pre>";
print_r($row);
echo "</pre>";
