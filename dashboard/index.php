<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/style.css" rel="stylesheet">
</head>
<body>

<?php include '../components/sidebar.php'; ?>
<?php include '../components/header.php'; ?>

<div class="main">
  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="dashboard-card">
        <h5>Asset Utilization</h5>
        <p class="text-muted">75% Active</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="dashboard-card">
        <h5>Monthly Revenue</h5>
        <p class="text-muted">$128,400</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="dashboard-card">
        <h5>Overdue Invoices</h5>
        <p class="text-danger">6 Invoices | $14,200</p>
      </div>
    </div>
  </div>

  <h4>Upcoming Pickups</h4>
  <table class="table table-hover table-sm">
    <thead>
      <tr>
        <th>Unit #</th>
        <th>Customer</th>
        <th>Pickup Date</th>
        <th>Type</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CH-1023</td>
        <td>LogiPro Transport</td>
        <td>June 18, 2025</td>
        <td>Chassis</td>
        <td><span class="badge bg-warning text-dark">Reserved</span></td>
      </tr>
      <tr>
        <td>TR-8811</td>
        <td>FastHaul Inc.</td>
        <td>June 19, 2025</td>
        <td>Dry Van</td>
        <td><span class="badge bg-success">Confirmed</span></td>
      </tr>
    </tbody>
  </table>
</div>

<?php include '../components/footer.php'; ?>
</body>
</html>
