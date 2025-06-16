<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<main class="container-fluid mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Assets</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAssetModal">
      <i class="bi bi-plus-circle"></i> Add New Asset
    </button>
  </div>

  <!-- Filter Bar -->
  <form class="row g-2 mb-3">
    <div class="col-md-2">
      <select class="form-select" name="type">
        <option selected>Type</option>
        <option>Chassis</option>
        <option>Trailer</option>
        <option>Dry Van</option>
      </select>
    </div>
    <div class="col-md-2">
      <select class="form-select" name="status">
        <option selected>Status</option>
        <option>Available</option>
        <option>Reserved</option>
        <option>On Lease</option>
        <option>In Maintenance</option>
      </select>
    </div>
    <div class="col-md-2">
      <input type="text" class="form-control" placeholder="Search Tags...">
    </div>
    <div class="col-md-2">
      <button class="btn btn-outline-secondary w-100">Filter</button>
    </div>
  </form>

  <!-- Assets Table -->
  <div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Unit #</th>
          <th>Type</th>
          <th>Status</th>
          <th>Ownership</th>
          <th>Tags</th>
          <th>Yard</th>
          <th>VIN</th>
          <th>Tire Size</th>
          <th>Notes</th>
          <th>Documents</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Dummy Row Example -->
        <tr>
          <td>CH-1049</td>
          <td>Chassis</td>
          <td><span class="badge bg-success">Available</span></td>
          <td>Owned</td>
          <td><span class="badge bg-secondary">Heavy-Duty</span></td>
          <td>Yard A</td>
          <td>1XP5DB9X1YN530449</td>
          <td>11R22.5</td>
          <td>Needs repainting</td>
          <td><a href="#">CVI.pdf</a></td>
          <td>
            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editAssetModal"><i class="bi bi-pencil"></i></button>
            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class="bi bi-trash"></i></button>
          </td>
        </tr>
        <!-- More rows will be dynamically loaded here -->
      </tbody>
    </table>
  </div>
</main>

<?php include 'modals/add_asset.php'; ?>
<?php include 'modals/edit_asset.php'; ?>
<?php include 'modals/delete_asset.php'; ?>
</main>

<?php include '../../components/footer.php'; ?>
