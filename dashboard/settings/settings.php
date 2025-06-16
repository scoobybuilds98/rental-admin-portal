<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/settings.php
?>

<!DOCTYPE html>






<div class="main">
  <h2 class="mb-4">System Settings</h2>

  <form>
    <div class="row mb-4">
      <div class="col-md-6">
        <label class="form-label">Company Name</label>
        <input type="text" class="form-control" value="Blue Capital Equipment Finance">
      </div>
      <div class="col-md-6">
        <label class="form-label">Support Email</label>
        <input type="email" class="form-control" value="support@bluecapfinance.com">
      </div>
    </div>

    <div class="mb-4">
      <label class="form-label">Terms & Conditions (Customer Portal)</label>
      <textarea class="form-control" rows="5">All leases are subject to approval...</textarea>
    </div>

    <div class="row mb-4">
      <div class="col-md-4">
        <label class="form-label">Timezone</label>
        <select class="form-select">
          <option selected>America/Los_Angeles</option>
          <option>America/New_York</option>
          <option>Canada/Mountain</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">Currency</label>
        <select class="form-select">
          <option selected>USD ($)</option>
          <option>CAD ($)</option>
          <option>INR (₹)</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">Default Lease Status</label>
        <select class="form-select">
          <option selected>Pending</option>
          <option>Confirmed</option>
          <option>Draft</option>
        </select>
      </div>
    </div>

    <div class="form-check form-switch mb-4">
      <input class="form-check-input" type="checkbox" checked>
      <label class="form-check-label">Enable Customer Portal</label>
    </div>

    <div class="form-check form-switch mb-4">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Send Expiration Reminders by Email</label>
    </div>

    <div class="text-end">
      <button type="submit" class="btn btn-primary">Save Settings</button>
    </div>
  </form>
</div>
</main>

<?php include '../../components/footer.php'; ?>
