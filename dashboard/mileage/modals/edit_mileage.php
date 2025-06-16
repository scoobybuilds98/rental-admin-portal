<div class="modal fade" id="editMileageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Mileage Log</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body row g-3">
        <div class="col-md-4">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" value="2025-06-15">
        </div>

        <div class="col-md-4">
          <label class="form-label">Asset (Unit #)</label>
          <input type="text" class="form-control" value="AXC-1024">
        </div>

        <div class="col-md-4">
          <label class="form-label">Logged By</label>
          <input type="text" class="form-control" value="John Doe">
        </div>

        <div class="col-md-6">
          <label class="form-label">Start Mileage</label>
          <input type="number" class="form-control" value="12400">
        </div>

        <div class="col-md-6">
          <label class="form-label">End Mileage</label>
          <input type="number" class="form-control" value="12700">
        </div>

        <div class="col-12">
          <label class="form-label">Total Miles</label>
          <input type="number" class="form-control" value="300">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Log</button>
      </div>
    </form>
  </div>
</div>
