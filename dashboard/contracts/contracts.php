<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/contracts.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Lease Contracts & Inspection Forms</h2>
    <button class="btn btn-primary btn-sm">+ Upload Document</button>
  </div>

  <!-- Contracts Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Lease #</th>
          <th>Customer</th>
          <th>Equipment #</th>
          <th>Contract</th>
          <th>Check-In Form</th>
          <th>Check-Out Form</th>
          <th>Signed By</th>
          <th>Date Uploaded</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>LSE-1021</td>
          <td>FastHaul Inc.</td>
          <td>CH-1021</td>
          <td><a href="https://example.com/contracts/lse-1021.pdf" target="_blank" class="url-link">Lease PDF</a></td>
          <td><a href="https://example.com/forms/checkin-1021.pdf" target="_blank" class="url-link">Check-In</a></td>
          <td><a href="https://example.com/forms/checkout-1021.pdf" target="_blank" class="url-link">Check-Out</a></td>
          <td>James Tucker</td>
          <td>2025-06-16</td>
          <td>
            <button class="btn btn-sm btn-outline-secondary">Replace</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>LSE-1052</td>
          <td>Northline Freight</td>
          <td>TR-8802</td>
          <td><a href="https://example.com/contracts/lse-1052.pdf" target="_blank" class="url-link">Lease PDF</a></td>
          <td><a href="https://example.com/forms/checkin-8802.jpg" target="_blank" class="url-link">Check-In</a></td>
          <td>—</td>
          <td>Amrita Gill</td>
          <td>2025-06-15</td>
          <td>
            <button class="btn btn-sm btn-outline-secondary">Replace</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_contract.php';
include '../modals/edit_contract.php';
include '../modals/delete_contract.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
