<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/yard.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Yard Overview</h2>
    <button class="btn btn-primary btn-sm">+ Add Yard Task</button>
  </div>

  <!-- Filters -->
  <form class="row g-3 mb-3">
    <div class="col-md-3">
      <label class="form-label">Yard</label>
      <select class="form-select">
        <option selected>All</option>
        <option>Yard A</option>
        <option>Yard B</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Equipment Type</label>
      <select class="form-select">
        <option selected>All</option>
        <option>Chassis</option>
        <option>Dry Van</option>
        <option>Reefer</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Status</label>
      <select class="form-select">
        <option selected>All</option>
        <option>Available</option>
        <option>Reserved</option>
        <option>Leased</option>
        <option>Maintenance</option>
      </select>
    </div>
    <div class="col-md-3 d-flex align-items-end">
      <button class="btn btn-sm btn-primary">Apply</button>
    </div>
  </form>

  <!-- Yard Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Equipment #</th>
          <th>Type</th>
          <th>Yard</th>
          <th>Status</th>
          <th>Last Action</th>
          <th>Tasks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CH-1021</td>
          <td>Chassis</td>
          <td>Yard A</td>
          <td><span class="status-chip Available">Available</span></td>
          <td>Washed - 2025-06-12</td>
          <td>
            <button class="btn btn-sm btn-outline-success">Reposition</button>
            <button class="btn btn-sm btn-outline-secondary">Clean</button>
          </td>
        </tr>
        <tr>
          <td>TR-8802</td>
          <td>Dry Van</td>
          <td>Yard B</td>
          <td><span class="status-chip Maintenance">Maintenance</span></td>
          <td>Repair - 2025-06-14</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Log Issue</button>
          </td>
        </tr>
        <tr>
          <td>CH-1044</td>
          <td>Chassis</td>
          <td>Yard A</td>
          <td><span class="status-chip Reserved">Reserved</span></td>
          <td>Reserved for Pickup</td>
          <td>
            <button class="btn btn-sm btn-outline-danger">Cancel Reservation</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_yard.php';
include '../modals/edit_yard.php';
include '../modals/delete_yard.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
