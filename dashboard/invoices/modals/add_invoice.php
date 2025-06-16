<!-- modals/add_invoice.php -->

<div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/invoice_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Invoice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select name="customer_id" class="form-select" required>
                <option value="">Select Customer</option>
                <option value="1">Blue Capital</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease</label>
              <select name="lease_id" class="form-select">
                <option value="">None</option>
                <option value="101">LSE-101</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Invoice #</label>
              <input type="text" class="form-control" name="invoice_number" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Amount ($)</label>
              <input type="number" step="0.01" class="form-control" name="amount" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Issue Date</label>
              <input type="date" class="form-control" name="issue_date" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Due Date</label>
              <input type="date" class="form-control" name="due_date">
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option>Unpaid</option>
                <option>Paid</option>
                <option>Overdue</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea name="notes" class="form-control" rows="2"></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="action" value="add" class="btn btn-primary">Create Invoice</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
