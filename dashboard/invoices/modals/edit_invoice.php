<!-- modals/edit_invoice.php -->

<div class="modal fade" id="editInvoiceModal" tabindex="-1" aria-labelledby="editInvoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="/actions/invoice_actions.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Invoice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="invoice_id" value="345">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Customer</label>
              <select name="customer_id" class="form-select">
                <option selected>Blue Capital</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Linked Lease</label>
              <select name="lease_id" class="form-select">
                <option selected>LSE-101</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Invoice #</label>
              <input type="text" class="form-control" name="invoice_number" value="INV-4501">
            </div>
            <div class="col-md-6">
              <label class="form-label">Amount ($)</label>
              <input type="number" step="0.01" class="form-control" name="amount" value="1800.00">
            </div>
            <div class="col-md-6">
              <label class="form-label">Issue Date</label>
              <input type="date" class="form-control" name="issue_date" value="2025-06-01">
            </div>
            <div class="col-md-6">
              <label class="form-label">Due Date</label>
              <input type="date" class="form-control" name="due_date" value="2025-06-30">
            </div>
            <div class="col-md-12">
              <label class="form-label">Status</label>
              <select name="status" class="form-select">
                <option selected>Unpaid</option>
                <option>Paid</option>
                <option>Overdue</option>
              </select>
            </div>
            <div class="col-md-12">
              <label class="form-label">Notes</label>
              <textarea name="notes" class="form-control" rows="2">Payment expected before June 25.</textarea>
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
