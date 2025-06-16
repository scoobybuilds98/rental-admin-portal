<!-- modals/add_reservation.php -->

<div class="modal fade" id="addReservationModal" tabindex="-1" aria-labelledby="addReservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/reservation_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Reservation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Contact Name</label>
              <input type="text" class="form-control" name="contact_name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Company</label>
              <input type="text" class="form-control" name="company" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Equipment Type</label>
              <select name="equipment_type" class="form-select" required>
                <option value="Chassis">Chassis</option>
                <option value="Trailer">Trailer</option>
                <option value="Dry Van">Dry Van</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Quantity</label>
              <input type="number" class="form-control" name="quantity" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Pickup Date</label>
              <input type="date" class="form-control" name="pickup_date" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Unit Numbers (optional)</label>
              <input type="text" class="form-control" name="unit_numbers" placeholder="e.g., CH-1021, CH-1023">
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea class="form-control" name="notes" rows="2"></textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option>Confirmed</option>
                <option>Not Confirmed</option>
              </select>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Create Reservation</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
