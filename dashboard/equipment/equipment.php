<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/equipment.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Equipment</h2>
    <button class="btn btn-primary btn-sm">+ Add Equipment</button>
  </div>

  <!-- Filter Bar -->
  <div class="mb-4">
    <div class="row g-2">
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Search by Unit #">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option value="">All Types</option>
          <option>Chassis</option>
          <option>Dry Van</option>
          <option>Reefer</option>
          <option>Trailer</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option value="">All Statuses</option>
          <option>Available</option>
          <option>Reserved</option>
          <option>On Lease</option>
          <option>In Maintenance</option>
        </select>
      </div>
      <div class="col-md-3">
        <button class="btn btn-outline-secondary w-100">Clear Filters</button>
      </div>
    </div>
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Unit #</th>
          <th>Type</th>
          <th>Ownership</th>
          <th>Status</th>
          <th>Tire Size</th>
          <th>Tags</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CH-1021</td>
          <td>Chassis</td>
          <td>Owned</td>
          <td><span class="status-chip Available">Available</span></td>
          <td>11R22.5</td>
          <td>Port, Heavy</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>TR-8802</td>
          <td>Dry Van</td>
          <td>Leased</td>
          <td><span class="status-chip On Lease">On Lease</span></td>
          <td>295/75R22.5</td>
          <td>Highway, Long Haul</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>CH-1044</td>
          <td>Chassis</td>
          <td>Owned</td>
          <td><span class="status-chip In Maintenance">In Maintenance</span></td>
          <td>11R24.5</td>
          <td>Repair, Suspension</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>TR-7755</td>
          <td>Reefer</td>
          <td>Leased</td>
          <td><span class="status-chip Reserved">Reserved</span></td>
          <td>275/80R24.5</td>
          <td>Frozen, Route A</td>
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
include '../modals/add_equipment.php';
include '../modals/edit_equipment.php';
include '../modals/delete_equipment.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
