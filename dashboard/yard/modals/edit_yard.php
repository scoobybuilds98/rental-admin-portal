<div class="modal fade" id="editYardModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Yard Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body row g-3">
        <div class="col-md-4">
          <label class="form-label">Date/Time</label>
          <input type="datetime-local" class="form-control" value="2025-06-16T09:15">
        </div>
        <div class="col-md-4">
          <label class="form-label">Asset (Unit #)</label>
          <input type="text" class="form-control" value="AXC-1024">
        </div>
        <div class="col-md-4">
          <label class="form-label">Action Type</label>
          <select class="form-select">
            <option selected>Clean</option>
            <option>Check-In</option>
            <option>Check-Out</option>
            <option>Reposition</option>
            <option>Inspect</option>
            <option>Repair Flag</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Performed By</label>
          <input type="text" class="form-control" value="Jason R.">
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Pending</option>
            <option selected>Completed</option>
            <option>Flagged</option>
          </select>
        </div>

        <div class="col-12">
          <label class="form-label">Notes</label>
          <textarea class="form-control" rows="3">Washed, tires checked, no damage found.</textarea>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Task</button>
      </div>
    </form>
  </div>
</div>
