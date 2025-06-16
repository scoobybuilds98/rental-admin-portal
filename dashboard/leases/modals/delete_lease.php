<!-- modals/delete_lease.php -->

<div class="modal fade" id="deleteLeaseModal" tabindex="-1" aria-labelledby="deleteLeaseModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/lease_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="deleteLeaseModalLabel">Delete Lease</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="lease_id" value="123">
          <p class="mb-0">Are you sure you want to <strong class="text-danger">delete</strong> this lease?</p>
          <p class="text-muted small mt-2">Deleting a lease may also remove associated documents and inspection logs.</p>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="delete" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
