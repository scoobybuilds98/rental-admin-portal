<div class="modal fade" id="deleteCustomerModal" tabindex="-1">
  <div class="modal-dialog">
<form method="POST" action="backend/delete_customer.php">
      <input type="hidden" name="id" value="1">
      <div class="modal-header">
        <h5 class="modal-title">Delete Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this customer?
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </form>
  </div>
</div>
