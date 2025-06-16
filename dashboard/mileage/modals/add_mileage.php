<div class="modal fade" id="addMileageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Mileage Log</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body row g-3">
        <div class="col-md-4">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" required>
        </div>

        <div class="col-md-4">
          <label class="form-label">Asset (Unit #)</label>
          <input type="text" class="form-control" placeholder="e.g. AXC-1024" required>
        </div>

        <div class="col-md-4">
          <label class="form-label">Logged By</label>
          <input type="text" class="form-control" placeholder="e.g. John Doe">
        </div>

        <div class="col-md-6">
          <label class="form-label">Start Mileage</label>
          <input type="number" class="form-control" placeholder="e.g. 12400">
        </div>

        <div class="col-md-6">
          <label class="form-label">End Mileage</label>
          <input type="number" class="form-control" placeholder="e.g. 12700">
        </div>

        <div class="col-12">
          <label class="form-label">Total Miles (optional override)</label>
          <input type="number" class="form-control" placeholder="e.g. 300">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add Log</button>
      </div>
    </form>
  </div>
</div>
