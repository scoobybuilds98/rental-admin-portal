<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/reports.php
?>

<!DOCTYPE html>






<div class="main">
  <h2 class="mb-4">Reports</h2>

  <!-- Filters -->
  <form class="row g-3 mb-4">
    <div class="col-md-3">
      <label class="form-label">Customer</label>
      <select class="form-select">
        <option selected>All</option>
        <option>LogiPro</option>
        <option>FastHaul Inc.</option>
        <option>Northline Freight</option>
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
      <label class="form-label">From</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-md-3">
      <label class="form-label">To</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-12 d-flex justify-content-end gap-2">
      <button type="submit" class="btn btn-primary btn-sm">Apply</button>
      <button type="reset" class="btn btn-outline-secondary btn-sm">Clear</button>
    </div>
  </form>

  <!-- Export Buttons -->
  <div class="mb-3 d-flex justify-content-end gap-2">
    <button class="btn btn-outline-success btn-sm">Export CSV</button>
    <button class="btn btn-outline-danger btn-sm">Export PDF</button>
  </div>

  <!-- Data Table -->
  <div class="table-responsive mb-5">
    <table class="table table-bordered table-hover table-sm bg-white align-middle">
      <thead class="table-light">
        <tr>
          <th>Date</th>
          <th>Customer</th>
          <th>Equipment</th>
          <th>Revenue</th>
          <th>Utilization</th>
          <th>Downtime</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-06-01</td>
          <td>LogiPro</td>
          <td>CH-1021</td>
          <td>$1,200</td>
          <td>95%</td>
          <td>1 day</td>
        </tr>
        <tr>
          <td>2025-06-02</td>
          <td>FastHaul</td>
          <td>TR-8802</td>
          <td>$850</td>
          <td>82%</td>
          <td>0 days</td>
        </tr>
        <tr>
          <td>2025-06-03</td>
          <td>Northline</td>
          <td>CH-1044</td>
          <td>$920</td>
          <td>78%</td>
          <td>2 days</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Chart -->
  <div class="card shadow-sm">
    <div class="card-body">
      <h6 class="mb-3">Revenue Trend</h6>
      <canvas id="reportChart" height="120"></canvas>
    </div>
  </div>
</div>



<script>
  const ctx = document.getElementById('reportChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jun 01', 'Jun 02', 'Jun 03'],
      datasets: [{
        label: 'Revenue ($)',
        data: [1200, 850, 920],
        backgroundColor: '#0d6efd'
      }]
    },
    options: {
      responsive: true,
      scales: { y: { beginAtZero: true } }
    }
  });
</script>
</main>

<?php include '../../components/footer.php'; ?>
