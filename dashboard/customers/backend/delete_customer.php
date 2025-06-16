<?php
require_once '../../../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
  $stmt->execute([$id]);

  header("Location: ../customers.php");
  exit();
}
?>
