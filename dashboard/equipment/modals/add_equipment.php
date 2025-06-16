<!-- modals/add_equipment.php -->

<div class="modal fade" id="addEquipmentModal" tabindex="-1" aria-labelledby="addEquipmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/equipment_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEquipmentModalLabel">Add New Equipment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Unit Number</label>
              <input type="text" class="form-control" name="unit_number" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type</label>
              <select name="type" class="form-select" required>
                <option value="Chassis">Chassis</option>
                <option value="Trailer">Trailer</option>
                <option value="Dry Van">Dry Van</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Ownership</label>
              <select name="ownership" class="form-select" required>
                <option value="Owned">Owned</option>
                <option value="Rented">Rented</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" class="form-select" required>
                <option value="Available">Available</option>
                <option value="Leased">Leased</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Reserved">Reserved</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Tags (comma separated)</label>
              <input type="text" class="form-control" name="tags">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Add Equipment</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
