<!-- modals/delete_inspection.php -->

<div class="modal fade" id="deleteInspectionModal" tabindex="-1" aria-labelledby="deleteInspectionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/inspection_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger">Delete Inspection</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="inspection_id" value="456">
          <p class="mb-0">Are you sure you want to <strong class="text-danger">delete</strong> this inspection log?</p>
          <p class="text-muted small mt-2">Uploaded files will also be removed.</p>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="delete" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
