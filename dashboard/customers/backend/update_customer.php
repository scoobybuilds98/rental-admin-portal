<?php
require_once '../../../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $billing_name = $_POST['billing_name'] ?? '';
  $contact_name = $_POST['contact_name'] ?? '';
  $email = $_POST['email'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $company = $_POST['company'] ?? '';

  $stmt = $pdo->prepare("UPDATE customers SET billing_name = ?, contact_name = ?, email = ?, phone = ?, company = ? WHERE id = ?");
  $stmt->execute([$billing_name, $contact_name, $email, $phone, $company, $id]);

  header("Location: ../customers.php");
  exit();
}
?>
