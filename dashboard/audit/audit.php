<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/audit.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Audit Log</h2>
    <button class="btn btn-outline-dark btn-sm">Export Log</button>
  </div>

  <!-- Filters -->
  <form class="row g-3 mb-3">
    <div class="col-md-3">
      <label class="form-label">User</label>
      <input type="text" class="form-control" placeholder="Search by name or email">
    </div>
    <div class="col-md-3">
      <label class="form-label">Action</label>
      <select class="form-select">
        <option selected>All</option>
        <option>Created</option>
        <option>Updated</option>
        <option>Deleted</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">From</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-md-3">
      <label class="form-label">To</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-12 d-flex justify-content-end">
      <button class="btn btn-sm btn-primary">Filter</button>
    </div>
  </form>

  <!-- Audit Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Timestamp</th>
          <th>User</th>
          <th>Action</th>
          <th>Object</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-06-17 09:32 AM</td>
          <td>Amrita Gill</td>
          <td><span class="badge Created">Created</span></td>
          <td>Lease LSE-1011</td>
          <td>New lease started for CH-1044</td>
        </tr>
        <tr>
          <td>2025-06-16 03:12 PM</td>
          <td>Priya Menon</td>
          <td><span class="badge Updated">Updated</span></td>
          <td>Customer FastHaul Inc.</td>
          <td>Updated billing address & contact</td>
        </tr>
        <tr>
          <td>2025-06-15 11:58 AM</td>
          <td class="system-log">System</td>
          <td><span class="badge Deleted">Deleted</span></td>
          <td>Reservation RS-2209</td>
          <td>Auto-cleanup of expired reservation</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</main>

<?php include '../../components/footer.php'; ?>
