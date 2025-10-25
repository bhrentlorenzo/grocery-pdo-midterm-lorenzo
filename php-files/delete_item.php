<?php
require 'dbconfig.php';

// delete_item.php
$idToDelete = 5; // change to an existing id for testing

$stmt = $pdo->prepare("DELETE FROM grocery_items WHERE id = :id");
if ($stmt->execute([':id' => $idToDelete])) {
    echo "Deleted record with id = $idToDelete";
} else {
    echo "Deletion failed.";
}
