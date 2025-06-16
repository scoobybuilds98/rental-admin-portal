<div class="modal fade" id="editDocumentModal" tabindex="-1" aria-labelledby="editDocLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Document</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body row g-3">
        <!-- Same fields as Add, with dummy values pre-filled -->
        <div class="col-md-6">
          <label class="form-label">Document Name</label>
          <input type="text" class="form-control" value="AXC-1024 Registration">
        </div>
        <div class="col-md-6">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option selected>Registration</option>
            <option>CVI</option>
            <option>Inspection</option>
            <option>Insurance</option>
            <option>Other</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Linked To</label>
          <select class="form-select">
            <option selected>Asset: AXC-1024</option>
            <option>Lease: #2031</option>
            <option>Customer: ABC Logistics</option>
            <option>Inspection: May 2025</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Expiration Date</label>
          <input type="date" class="form-control" value="2025-12-31">
        </div>

        <div class="col-md-12">
          <label class="form-label">Document Link (URL)</label>
          <input type="url" class="form-control" value="https://example.com/doc1.pdf">
        </div>

        <div class="col-md-12">
          <label class="form-label">Tags</label>
          <input type="text" class="form-control" value="CVI, Expiring">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
