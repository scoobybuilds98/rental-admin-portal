<!-- modals/add_contract.php -->

<div class="modal fade" id="addContractModal" tabindex="-1" aria-labelledby="addContractModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/contract_actions.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Contract</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select name="customer_id" class="form-select" required>
                <option value="">Select Customer</option>
                <option value="1">Blue Capital</option>
                <option value="2">Northline Freight</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease</label>
              <select name="lease_id" class="form-select">
                <option value="">None</option>
                <option value="21">LSE-1021</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contract Type</label>
              <select name="type" class="form-select" required>
                <option value="Lease Agreement">Lease Agreement</option>
                <option value="Insurance">Insurance</option>
                <option value="Warranty">Warranty</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Upload PDF</label>
              <input type="file" class="form-control" name="contract_file" accept=".pdf" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Start Date</label>
              <input type="date" class="form-control" name="start_date">
            </div>
            <div class="col-md-6">
              <label class="form-label">End Date</label>
              <input type="date" class="form-control" name="end_date">
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option>Active</option>
                <option>Expired</option>
                <option>Cancelled</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea name="notes" class="form-control" rows="2"></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Add Contract</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
