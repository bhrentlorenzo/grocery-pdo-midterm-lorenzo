<?php
require 'dbconfig.php';

// render_table.php
$stmt = $pdo->query("SELECT * FROM grocery_items ORDER BY id");
$rows = $stmt->fetchAll();

echo "<h2>Grocery Items</h2>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<thead><tr>
        <th>ID</th><th>Item Name</th><th>Category</th><th>Price</th><th>Quantity</th><th>Unit</th><th>Supplier</th><th>Date Added</th><th>Notes</th>
      </tr></thead>";
echo "<tbody>";
foreach ($rows as $r) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($r['id']) . "</td>";
    echo "<td>" . htmlspecialchars($r['item_name']) . "</td>";
    echo "<td>" . htmlspecialchars($r['category']) . "</td>";
    echo "<td>" . htmlspecialchars(number_format($r['price'], 2)) . "</td>";
    echo "<td>" . htmlspecialchars($r['quantity']) . "</td>";
    echo "<td>" . htmlspecialchars($r['unit']) . "</td>";
    echo "<td>" . htmlspecialchars($r['supplier']) . "</td>";
    echo "<td>" . htmlspecialchars($r['date_added']) . "</td>";
    echo "<td>" . htmlspecialchars($r['notes']) . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
