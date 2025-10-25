<?php
require 'dbconfig.php';

// insert_item.php
$sql = "INSERT INTO grocery_items (item_name, category, price, quantity, unit, supplier, notes)
        VALUES (:item_name, :category, :price, :quantity, :unit, :supplier, :notes)";
$stmt = $pdo->prepare($sql);

$params = [
    ':item_name' => 'Fresh Eggs 12pcs',
    ':category'  => 'Dairy',
    ':price'     => 120.00,
    ':quantity'  => 20,
    ':unit'      => 'carton',
    ':supplier'  => 'PoultryFarm',
    ':notes'     => 'Free range'
];

if ($stmt->execute($params)) {
    echo "Insert successful. New ID: " . $pdo->lastInsertId();
} else {
    echo "Insert failed.";
}
