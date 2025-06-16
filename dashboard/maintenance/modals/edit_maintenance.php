<div class="modal fade" id="editMaintenanceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Maintenance Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body row g-3">
        <div class="col-md-4">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" value="2025-06-14">
        </div>

        <div class="col-md-4">
          <label class="form-label">Asset (Unit #)</label>
          <input type="text" class="form-control" value="AXC-1024">
        </div>

        <div class="col-md-4">
          <label class="form-label">Vendor</label>
          <input type="text" class="form-control" value="Internal">
        </div>

        <div class="col-md-6">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option selected>Scheduled</option>
            <option>Emergency</option>
            <option>Corrective</option>
            <option>Preventive</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Cost (USD)</label>
          <input type="number" class="form-control" value="950">
        </div>

        <div class="col-md-6">
          <label class="form-label">Downtime (hrs)</label>
          <input type="number" class="form-control" value="6">
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Pending</option>
            <option>In Progress</option>
            <option selected>Completed</option>
          </select>
        </div>

        <div class="col-12">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3">Replaced worn-out brake shoes</textarea>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Record</button>
      </div>
    </form>
  </div>
</div>
