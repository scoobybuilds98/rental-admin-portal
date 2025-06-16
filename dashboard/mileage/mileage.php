<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/mileage.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Mileage Logs</h2>
    <button class="btn btn-primary btn-sm">+ Log Mileage</button>
  </div>

  <!-- Mileage Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Equipment #</th>
          <th>Lease #</th>
          <th>Date Logged</th>
          <th>Miles Driven</th>
          <th>Source</th>
          <th>Notes</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CH-1021</td>
          <td>LSE-1001</td>
          <td>2025-06-15</td>
          <td>325</td>
          <td>GPS</td>
          <td>Daily auto pull from Samsara</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>TR-8802</td>
          <td>LSE-0994</td>
          <td>2025-06-14</td>
          <td>185</td>
          <td>Manual</td>
          <td>Driver submitted via paper log</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>CH-1044</td>
          <td>LSE-1011</td>
          <td>2025-06-13</td>
          <td>92</td>
          <td>GPS</td>
          <td>Short-haul yard loop</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_mileage.php';
include '../modals/edit_mileage.php';
include '../modals/delete_mileage.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
