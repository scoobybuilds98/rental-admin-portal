<!-- modals/edit_lease.php -->

<div class="modal fade" id="editLeaseModal" tabindex="-1" aria-labelledby="editLeaseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/lease_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLeaseModalLabel">Edit Lease</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="lease_id" value="123">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Lease #</label>
              <input type="text" class="form-control" name="lease_number" value="LSE-1021">
            </div>
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select class="form-select" name="customer_id">
                <option selected>FastHaul Inc.</option>
                <option>Northline Freight</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Equipment</label>
              <select class="form-select" name="equipment_id">
                <option selected>CH-1021</option>
                <option>TR-8802</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Start Date</label>
              <input type="date" class="form-control" name="start_date" value="2025-06-10">
            </div>
            <div class="col-md-3">
              <label class="form-label">End Date</label>
              <input type="date" class="form-control" name="end_date" value="2025-07-10">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option selected>Active</option>
                <option>Pending</option>
                <option>Completed</option>
                <option>Cancelled</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Custom Rate ($/day)</label>
              <input type="number" step="0.01" class="form-control" name="custom_rate" value="92.50">
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea class="form-control" name="notes" rows="2">Returning July 10, possibly extend.</textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="edit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
