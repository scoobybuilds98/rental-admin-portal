<!-- modals/edit_equipment.php -->

<div class="modal fade" id="editEquipmentModal" tabindex="-1" aria-labelledby="editEquipmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/equipment_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editEquipmentModalLabel">Edit Equipment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="equipment_id" value="123">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Unit Number</label>
              <input type="text" class="form-control" name="unit_number" value="CH-1021">
            </div>
            <div class="col-md-6">
              <label class="form-label">Type</label>
              <select name="type" class="form-select">
                <option selected>Chassis</option>
                <option>Trailer</option>
                <option>Dry Van</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Ownership</label>
              <select name="ownership" class="form-select">
                <option selected>Owned</option>
                <option>Rented</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option selected>Available</option>
                <option>Leased</option>
                <option>Maintenance</option>
                <option>Reserved</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Tags</label>
              <input type="text" class="form-control" name="tags" value="steel,2022,new">
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
