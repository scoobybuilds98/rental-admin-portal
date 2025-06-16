<!-- modals/delete_equipment.php -->

<div class="modal fade" id="deleteEquipmentModal" tabindex="-1" aria-labelledby="deleteEquipmentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/equipment_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="deleteEquipmentModalLabel">Delete Equipment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="equipment_id" value="123">
          <p class="mb-0">Are you sure you want to <strong class="text-danger">delete</strong> this equipment unit?</p>
          <p class="text-muted small mt-2">This will not delete associated leases, but it will remove availability and visibility.</p>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="delete" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
