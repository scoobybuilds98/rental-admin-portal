<!-- modals/delete_contract.php -->

<div class="modal fade" id="deleteContractModal" tabindex="-1" aria-labelledby="deleteContractModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/contract_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger">Delete Contract</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="contract_id" value="345">
          <p class="mb-0">Are you sure you want to <strong class="text-danger">delete</strong> this contract file?</p>
          <p class="text-muted small mt-2">This will permanently remove the file from storage.</p>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="delete" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
