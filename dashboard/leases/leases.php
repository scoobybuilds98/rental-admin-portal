<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/leases.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Leases</h2>
    <button class="btn btn-primary btn-sm">+ New Lease</button>
  </div>

  <!-- Lease Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Lease #</th>
          <th>Customer</th>
          <th>Unit #</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Status</th>
          <th>Contract</th>
          <th>Invoice</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>LSE-1001</td>
          <td>LogiPro Transport</td>
          <td>CH-1021</td>
          <td>2025-06-01</td>
          <td>2025-06-30</td>
          <td><span class="status-badge Active">Active</span></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">PDF</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-secondary">Renew</button>
          </td>
        </tr>
        <tr>
          <td>LSE-0994</td>
          <td>FastHaul Inc.</td>
          <td>TR-8802</td>
          <td>2025-05-01</td>
          <td>2025-06-01</td>
          <td><span class="status-badge Completed">Completed</span></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">PDF</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Clone</button>
          </td>
        </tr>
        <tr>
          <td>LSE-1010</td>
          <td>Northline Freight</td>
          <td>TR-7755</td>
          <td>2025-06-05</td>
          <td>2025-06-20</td>
          <td><span class="status-badge Paused">Paused</span></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">PDF</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Resume</button>
            <button class="btn btn-sm btn-outline-danger">Cancel</button>
          </td>
        </tr>
        <tr>
          <td>LSE-1011</td>
          <td>SwiftFleet</td>
          <td>CH-1044</td>
          <td>2025-06-01</td>
          <td>2025-06-18</td>
          <td><span class="status-badge EarlyReturn">Early Return</span></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
          <td><a href="#" class="btn btn-sm btn-outline-dark">PDF</a></td>
          <td>
            <button class="btn btn-sm btn-outline-secondary">Adjust</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_lease.php';
include '../modals/edit_lease.php';
include '../modals/delete_lease.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
