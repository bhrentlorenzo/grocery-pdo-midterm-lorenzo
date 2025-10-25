-- schema_and_records.sql
CREATE DATABASE IF NOT EXISTS grocery_db;
USE grocery_db;

CREATE TABLE IF NOT EXISTS grocery_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item_name VARCHAR(100) NOT NULL,
  category VARCHAR(50) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  quantity INT NOT NULL DEFAULT 0,
  unit VARCHAR(20) NOT NULL,
  supplier VARCHAR(100),
  date_added DATE DEFAULT CURRENT_DATE,
  notes TEXT
);

-- sample records (you can add more or make them more complex)
INSERT INTO grocery_items (item_name, category, price, quantity, unit, supplier, notes)
VALUES
('Rice, 5kg', 'Grains', 2500.00, 12, 'pack', 'Local Farm Co', 'Long grain white rice'),
('Ground Coffee 250g', 'Beverages', 180.00, 30, 'pack', 'JavaSuppliers', 'Roasted medium'),
('Cooking Oil 1L', 'Cooking Essentials', 150.00, 25, 'bottle', 'OilsInc', NULL),
('Canned Corn 400g', 'Canned Goods', 60.00, 40, 'can', 'Canning House', 'Best before 2026-05-01');