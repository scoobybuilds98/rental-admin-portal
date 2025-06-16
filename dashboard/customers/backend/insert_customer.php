 <?php
require_once '../../../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $billing_name = $_POST['billing_name'] ?? '';
  $contact_name = $_POST['contact_name'] ?? '';
  $email = $_POST['email'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $company = $_POST['company'] ?? '';

  $stmt = $pdo->prepare("INSERT INTO customers (billing_name, contact_name, email, phone, company) VALUES (?, ?, ?, ?, ?)");
  $stmt->execute([$billing_name, $contact_name, $email, $phone, $company]);

  header("Location: ../customers.php");
  exit();
}
?> 

