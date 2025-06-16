<!-- modals/add_inspection.php -->

<div class="modal fade" id="addInspectionModal" tabindex="-1" aria-labelledby="addInspectionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/inspection_actions.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Inspection</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Equipment</label>
              <select name="equipment_id" class="form-select" required>
                <option value="">Select Unit</option>
                <option value="1">CH-1021</option>
                <option value="2">TR-8802</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease (optional)</label>
              <select name="lease_id" class="form-select">
                <option value="">None</option>
                <option value="21">LSE-1021</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type</label>
              <select name="type" class="form-select" required>
                <option value="In">In</option>
                <option value="Out">Out</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Inspector</label>
              <input type="text" class="form-control" name="inspector" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Date</label>
              <input type="date" class="form-control" name="inspection_date" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Upload Photos / Form</label>
              <input type="file" class="form-control" name="inspection_file">
            </div>
            <div class="col-12">
              <label class="form-label">Condition Notes</label>
              <textarea name="notes" class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Add Inspection</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
