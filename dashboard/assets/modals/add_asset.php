<div class="modal fade" id="addAssetModal" tabindex="-1" aria-labelledby="addAssetLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Asset</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row g-3">
        <div class="col-md-4">
          <label class="form-label">Unit Number</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option>Chassis</option>
            <option>Trailer</option>
            <option>Dry Van</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Available</option>
            <option>Leased</option>
            <option>Reserved</option>
            <option>In Maintenance</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Ownership</label>
          <select class="form-select">
            <option>Owned</option>
            <option>Rented</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Tags (comma separated)</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Mileage</label>
          <input type="number" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Condition</label>
          <select class="form-select">
            <option>Excellent</option>
            <option>Good</option>
            <option>Fair</option>
            <option>Poor</option>
          </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add Asset</button>
      </div>
    </form>
  </div>
</div>
