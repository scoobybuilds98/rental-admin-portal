<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/invoices.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Invoices</h2>
    <button class="btn btn-primary btn-sm">+ Create Manual Invoice</button>
  </div>

  <!-- Invoices Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Invoice #</th>
          <th>Customer</th>
          <th>Lease #</th>
          <th>Amount</th>
          <th>Due Date</th>
          <th>Status</th>
          <th>PDF</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>INV-20250601</td>
          <td>LogiPro Transport</td>
          <td>LSE-1001</td>
          <td>$1,450.00</td>
          <td>2025-06-20</td>
          <td><span class="badge Paid">Paid</span></td>
          <td><a href="#">Download</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">View</button>
            <button class="btn btn-sm btn-outline-secondary">Resend</button>
          </td>
        </tr>
        <tr>
          <td>INV-20250602</td>
          <td>FastHaul Inc.</td>
          <td>LSE-0994</td>
          <td>$780.00</td>
          <td>2025-06-22</td>
          <td><span class="badge Unpaid">Unpaid</span></td>
          <td><a href="#">Download</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">View</button>
            <button class="btn btn-sm btn-outline-danger">Send Reminder</button>
          </td>
        </tr>
        <tr>
          <td>INV-20250603</td>
          <td>Northline Freight</td>
          <td>LSE-1010</td>
          <td>$940.00</td>
          <td>2025-06-10</td>
          <td><span class="badge Overdue">Overdue</span></td>
          <td><a href="#">Download</a></td>
          <td>
            <button class="btn btn-sm btn-outline-primary">View</button>
            <button class="btn btn-sm btn-outline-danger">Send Reminder</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include '../modals/add_invoice.php';
include '../modals/edit_invoice.php';
include '../modals/delete_invoice.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
