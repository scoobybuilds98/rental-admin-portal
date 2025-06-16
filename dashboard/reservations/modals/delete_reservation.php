<!-- modals/delete_reservation.php -->

<div class="modal fade" id="deleteReservationModal" tabindex="-1" aria-labelledby="deleteReservationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/reservation_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger">Delete Reservation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="reservation_id" value="123">
          <p class="mb-0">Are you sure you want to <strong class="text-danger">delete</strong> this reservation?</p>
          <p class="text-muted small mt-2">This action cannot be undone.</p>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="delete" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
