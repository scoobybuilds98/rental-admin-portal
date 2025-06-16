<!-- modals/edit_reservation.php -->

<div class="modal fade" id="editReservationModal" tabindex="-1" aria-labelledby="editReservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form method="POST" action="/actions/reservation_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Reservation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="reservation_id" value="123">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Contact Name</label>
              <input type="text" class="form-control" name="contact_name" value="Avi Singh">
            </div>
            <div class="col-md-6">
              <label class="form-label">Company</label>
              <input type="text" class="form-control" name="company" value="Blue Capital Equipment">
            </div>
            <div class="col-md-6">
              <label class="form-label">Equipment Type</label>
              <select name="equipment_type" class="form-select">
                <option selected>Chassis</option>
                <option>Trailer</option>
                <option>Dry Van</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Quantity</label>
              <input type="number" class="form-control" name="quantity" value="2">
            </div>
            <div class="col-md-3">
              <label class="form-label">Pickup Date</label>
              <input type="date" class="form-control" name="pickup_date" value="2025-06-20">
            </div>
            <div class="col-md-12">
              <label class="form-label">Unit Numbers</label>
              <input type="text" class="form-control" name="unit_numbers" value="CH-1021, CH-1022">
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea class="form-control" name="notes" rows="2">Customer requested inspection before release.</textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option selected>Confirmed</option>
                <option>Not Confirmed</option>
              </select>
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
