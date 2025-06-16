<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/documents.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Documents</h2>
    <button class="btn btn-primary btn-sm">+ Add Document</button>
  </div>

  <!-- Documents Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Equipment #</th>
          <th>Document Type</th>
          <th>Link</th>
          <th>Expiration</th>
          <th>Status</th>
          <th>Notes</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CH-1021</td>
          <td>CVI</td>
          <td><a href="https://example.com/documents/cvi-ch1021.pdf" target="_blank">View</a></td>
          <td>2025-12-01</td>
          <td><span class="badge Valid">Valid</span></td>
          <td>Annual inspection passed</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>TR-8802</td>
          <td>Insurance</td>
          <td><a href="https://example.com/documents/ins-tr8802.pdf" target="_blank">View</a></td>
          <td>2025-06-17</td>
          <td><span class="badge Expiring">Expiring Soon</span></td>
          <td>Renewal email sent to broker</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>CH-1044</td>
          <td>Registration</td>
          <td><a href="https://example.com/documents/reg-ch1044.pdf" target="_blank">View</a></td>
          <td>2025-05-15</td>
          <td><span class="badge Expired">Expired</span></td>
          <td>Parked until renewed</td>
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
include 'modals/add_document.php';
include 'modals/edit_document.php';
include 'modals/delete_document.php';
include 'footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
