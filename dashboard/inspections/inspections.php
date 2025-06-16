<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/inspections.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Inspection Logs</h2>
    <button class="btn btn-primary btn-sm">+ New Inspection</button>
  </div>

  <!-- Inspections Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Date</th>
          <th>Lease #</th>
          <th>Equipment #</th>
          <th>Type</th>
          <th>Notes</th>
          <th>Photos</th>
          <th>Staff Signed</th>
          <th>Customer Signed</th>
          <th>Form</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-06-16</td>
          <td>LSE-1021</td>
          <td>CH-1021</td>
          <td>Check-Out</td>
          <td class="note-cell">Rear tires scuffed, otherwise clean. Brake lights working.</td>
          <td><a href="https://example.com/photos/out-ch1021.jpg" class="url-link" target="_blank">View</a></td>
          <td>✅</td>
          <td>✅</td>
          <td><a href="https://example.com/forms/out-ch1021.pdf" class="url-link" target="_blank">PDF</a></td>
        </tr>
        <tr>
          <td>2025-06-09</td>
          <td>LSE-1021</td>
          <td>CH-1021</td>
          <td>Check-In</td>
          <td class="note-cell">Unit returned clean. Paint faded on left rail. Tire OK.</td>
          <td><a href="https://example.com/photos/in-ch1021.jpg" class="url-link" target="_blank">View</a></td>
          <td>✅</td>
          <td>✅</td>
          <td><a href="https://example.com/forms/in-ch1021.pdf" class="url-link" target="_blank">PDF</a></td>
        </tr>
        <tr>
          <td>2025-06-10</td>
          <td>LSE-1052</td>
          <td>TR-8802</td>
          <td>Check-Out</td>
          <td class="note-cell">Clean, noted slight dent on left panel. Customer aware.</td>
          <td><a href="https://example.com/photos/out-tr8802.jpg" class="url-link" target="_blank">View</a></td>
          <td>✅</td>
          <td>❌</td>
          <td><a href="https://example.com/forms/out-tr8802.pdf" class="url-link" target="_blank">PDF</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_inspection.php';
include '../modals/edit_inspection.php';
include '../modals/delete_inspection.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
