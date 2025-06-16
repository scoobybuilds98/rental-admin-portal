<div class="modal fade" id="editCustomerModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
<form method="POST" action="backend/update_customer.php">
      <input type="hidden" name="id" value="1">
      <div class="modal-header">
        <h5 class="modal-title">Edit Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body row g-3">
        <div class="col-md-6">
          <label class="form-label">Company</label>
          <input type="text" name="company" class="form-control" value="ACME Logistics">
        </div>
        <div class="col-md-6">
          <label class="form-label">Billing Name</label>
          <input type="text" name="billing_name" class="form-control" value="John Billing">
        </div>
        <div class="col-md-6">
          <label class="form-label">Contact Name</label>
          <input type="text" name="contact_name" class="form-control" value="Jane Contact">
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="admin@acme.com">
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control" value="+1 555-1234">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
