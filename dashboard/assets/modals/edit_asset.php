<div class="modal fade" id="editAssetModal" tabindex="-1" aria-labelledby="editAssetLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Asset</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row g-3">
        <!-- Same fields as Add Asset but pre-filled (static dummy data for now) -->
        <div class="col-md-4">
          <label class="form-label">Unit Number</label>
          <input type="text" class="form-control" value="AXC-1024">
        </div>
        <div class="col-md-4">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option selected>Chassis</option>
            <option>Trailer</option>
            <option>Dry Van</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Available</option>
            <option selected>Leased</option>
            <option>Reserved</option>
            <option>In Maintenance</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Ownership</label>
          <select class="form-select">
            <option selected>Owned</option>
            <option>Rented</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Tags</label>
          <input type="text" class="form-control" value="GPS, AirRide">
        </div>

        <div class="col-md-6">
          <label class="form-label">Mileage</label>
          <input type="number" class="form-control" value="12430">
        </div>

        <div class="col-md-6">
          <label class="form-label">Condition</label>
          <select class="form-select">
            <option>Excellent</option>
            <option selected>Good</option>
            <option>Fair</option>
            <option>Poor</option>
          </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
