<!-- modals/edit_inspection.php -->

<div class="modal fade" id="editInspectionModal" tabindex="-1" aria-labelledby="editInspectionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/inspection_actions.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Inspection</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="inspection_id" value="456">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Equipment</label>
              <select name="equipment_id" class="form-select">
                <option selected>CH-1021</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease</label>
              <select name="lease_id" class="form-select">
                <option selected>LSE-1021</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type</label>
              <select name="type" class="form-select">
                <option selected>Out</option>
                <option>In</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Inspector</label>
              <input type="text" class="form-control" name="inspector" value="A. Singh">
            </div>
            <div class="col-md-6">
              <label class="form-label">Date</label>
              <input type="date" class="form-control" name="inspection_date" value="2025-06-16">
            </div>
            <div class="col-md-6">
              <label class="form-label">Replace File (optional)</label>
              <input type="file" class="form-control" name="inspection_file">
            </div>
            <div class="col-12">
              <label class="form-label">Condition Notes</label>
              <textarea name="notes" class="form-control" rows="3">Minor tire wear, otherwise good.</textarea>
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
