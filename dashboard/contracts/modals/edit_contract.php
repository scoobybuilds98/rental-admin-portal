<!-- modals/edit_contract.php -->

<div class="modal fade" id="editContractModal" tabindex="-1" aria-labelledby="editContractModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/contract_actions.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Contract</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="contract_id" value="345">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select name="customer_id" class="form-select">
                <option selected>Blue Capital</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease</label>
              <select name="lease_id" class="form-select">
                <option selected>LSE-1021</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contract Type</label>
              <select name="type" class="form-select">
                <option selected>Lease Agreement</option>
                <option>Insurance</option>
                <option>Warranty</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Replace PDF (optional)</label>
              <input type="file" class="form-control" name="contract_file" accept=".pdf">
            </div>
            <div class="col-md-6">
              <label class="form-label">Start Date</label>
              <input type="date" class="form-control" name="start_date" value="2025-06-01">
            </div>
            <div class="col-md-6">
              <label class="form-label">End Date</label>
              <input type="date" class="form-control" name="end_date" value="2026-06-01">
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option selected>Active</option>
                <option>Expired</option>
                <option>Cancelled</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea name="notes" class="form-control" rows="2">Signed by customer on-site.</textarea>
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
