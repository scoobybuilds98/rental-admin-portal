<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/reservations.php
?>

<!DOCTYPE html>






<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Reservations</h2>
    <button class="btn btn-primary btn-sm">+ New Reservation</button>
  </div>

  <!-- Reservations Out -->
  <div class="mb-5">
    <h4 class="mb-3">Reservations Out</h4>
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-sm bg-white align-middle">
        <thead class="table-light">
          <tr>
            <th>Status</th>
            <th>Contact</th>
            <th>Company</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Unit #s</th>
            <th>Pickup Date</th>
            <th>Notes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="badge bg-success">Confirmed</span></td>
            <td>Jasmeet Kaur</td>
            <td>LogiPro</td>
            <td>Chassis</td>
            <td>3</td>
            <td>CH-1021, CH-1022, CH-1023</td>
            <td>2025-06-18</td>
            <td>Need by 8 AM sharp</td>
            <td>
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
              <button class="btn btn-sm btn-outline-dark">Mark Out</button>
            </td>
          </tr>
          <tr>
            <td><span class="badge bg-warning text-dark">Not Confirmed</span></td>
            <td>Mike Thompson</td>
            <td>FastHaul Inc.</td>
            <td>Dry Van</td>
            <td>2</td>
            <td>TR-7751, TR-7752</td>
            <td>2025-06-19</td>
            <td>Customer will confirm by EOD</td>
            <td>
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
              <button class="btn btn-sm btn-outline-dark" disabled>Mark Out</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Reservations In -->
  <div class="mb-5">
    <h4 class="mb-3">Reservations In</h4>
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-sm bg-white align-middle">
        <thead class="table-light">
          <tr>
            <th>Status</th>
            <th>Contact</th>
            <th>Company</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Unit #s</th>
            <th>Return Date</th>
            <th>Notes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="badge bg-success">Confirmed</span></td>
            <td>Sara Bains</td>
            <td>Northline Freight</td>
            <td>Reefer</td>
            <td>1</td>
            <td>TR-7755</td>
            <td>2025-06-20</td>
            <td>Return to YARD 2</td>
            <td>
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
              <button class="btn btn-sm btn-outline-dark">Mark In</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include '../modals/add_reservation.php';
include '../modals/edit_reservation.php';
include '../modals/delete_reservation.php';
include '../components/footer.php';
?>
</main>

<?php include '../../components/footer.php'; ?>
