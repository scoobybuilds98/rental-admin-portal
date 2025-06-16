<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="addDocLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Document</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body row g-3">
        <div class="col-md-6">
          <label class="form-label">Document Name</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option>Registration</option>
            <option>CVI</option>
            <option>Inspection</option>
            <option>Insurance</option>
            <option>Other</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Linked To</label>
          <select class="form-select">
            <option>Asset: AXC-1024</option>
            <option>Lease: #2031</option>
            <option>Customer: ABC Logistics</option>
            <option>Inspection: May 2025</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Expiration Date</label>
          <input type="date" class="form-control">
        </div>

        <div class="col-md-12">
          <label class="form-label">Document Link (URL)</label>
          <input type="url" class="form-control">
        </div>

        <div class="col-md-12">
          <label class="form-label">Tags (comma separated)</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add Document</button>
      </div>
    </form>
  </div>
</div>
