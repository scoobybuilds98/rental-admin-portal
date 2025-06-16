<!-- modals/add_lease.php -->

<div class="modal fade" id="addLeaseModal" tabindex="-1" aria-labelledby="addLeaseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/lease_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLeaseModalLabel">Add New Lease</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Lease #</label>
              <input type="text" class="form-control" name="lease_number" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select class="form-select" name="customer_id" required>
                <option selected disabled>Select Customer</option>
                <option value="1">FastHaul Inc.</option>
                <option value="2">Northline Freight</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Equipment</label>
              <select class="form-select" name="equipment_id" required>
                <option selected disabled>Select Unit</option>
                <option value="1">CH-1021</option>
                <option value="2">TR-8802</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Start Date</label>
              <input type="date" class="form-control" name="start_date" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">End Date</label>
              <input type="date" class="form-control" name="end_date">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option>Active</option>
                <option>Pending</option>
                <option>Completed</option>
                <option>Cancelled</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Custom Rate ($/day)</label>
              <input type="number" step="0.01" class="form-control" name="custom_rate">
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea class="form-control" name="notes" rows="2"></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Create Lease</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
