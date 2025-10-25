<?php
require 'dbconfig.php';

// update_item.php
$sql = "UPDATE grocery_items
        SET price = :price, quantity = :quantity, notes = :notes
        WHERE id = :id";
$stmt = $pdo->prepare($sql);

$params = [
    ':price' => 165.00,
    ':quantity' => 18,
    ':notes' => 'Price increased due to supplier cost',
    ':id' => 3
];

if ($stmt->execute($params)) {
    echo "Updated record with id = " . $params[':id'];
} else {
    echo "Update failed.";
}
