# Grocery PDO Midterm Project

This repository contains my Midterm project for **Working with PDO in PHP**.

## 📁 Project Structure
php-files/
dbconfig.php # Database connection using PDO
fetch_all.php # Displays all grocery items using fetchAll()
fetch_one.php # Displays a single grocery item using fetch()
insert_item.php # Inserts a new item using prepared statements
delete_item.php # Deletes an item using prepared statements
update_item.php # Updates an item using prepared statements
render_table.php # Renders grocery items as an HTML table
sql-files/
schema_and_records.sql # Database schema and sample data


## ⚙️ How to Run Locally
1. Install [XAMPP](https://www.apachefriends.org/) and start Apache + MySQL.
2. Place the `php-files` folder in your XAMPP `htdocs` directory.
3. Import `sql-files/schema_and_records.sql` into phpMyAdmin to create the `grocery_db` database.
4. Open your browser and test:

5. You can view all CRUD operations in the respective PHP files.

## 🧠 Concepts Demonstrated
- Using **PDO (PHP Data Objects)** for secure database access.
- Using **fetch()** and **fetchAll()** methods.
- Performing **INSERT**, **UPDATE**, **DELETE**, and **SELECT** queries with prepared statements.
- Rendering results dynamically into HTML tables.

## 📸 Documentation
All code and output screenshots are included in my submitted Word document for this midterm.
