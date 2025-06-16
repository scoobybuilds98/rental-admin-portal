 
<?php
$host = 'localhost';
$db   = 'rental_admin';  // make sure this matches what you named it
$user = 'root';
$pass = ''; // XAMPP default is blank

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}
?>
