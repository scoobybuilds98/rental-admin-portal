<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/maintenance.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Maintenance Logs</h2>
    <button class="btn btn-primary btn-sm">+ New Entry</button>
  </div>

  <!-- Maintenance Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Equipment #</th>
          <th>Vendor</th>
          <th>Cost</th>
          <th>Date</th>
          <th>Recurring</th>
          <th>Downtime (days)</th>
          <th>Notes</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CH-1021</td>
          <td>ABC Service Garage</td>
          <td>$1,200.00</td>
          <td>2025-06-10</td>
          <td>
            <div class="form-check form-switch m-0">
              <input class="form-check-input" type="checkbox" role="switch" checked disabled>
            </div>
          </td>
          <td>3</td>
          <td>Brake system overhaul</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>TR-8802</td>
          <td>FastFix Mobile</td>
          <td>$350.00</td>
          <td>2025-06-12</td>
          <td>
            <div class="form-check form-switch m-0">
              <input class="form-check-input" type="checkbox" role="switch" disabled>
            </div>
          </td>
          <td>0</td>
          <td>Flat tire replaced on route</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>CH-1044</td>
          <td>Internal</td>
          <td>$0.00</td>
          <td>2025-06-14</td>
          <td>
            <div class="form-check form-switch m-0">
              <input class="form-check-input" type="checkbox" role="switch" checked disabled>
            </div>
          </td>
          <td>1</td>
          <td>Cleaned & inspected axle seals</td>
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
include '../modals/add_maintenance.php';
include '../modals/edit_maintenance.php';
include '../modals/delete_maintenance.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
