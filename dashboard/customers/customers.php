<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<main class="container-fluid mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Customers</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
      <i class="bi bi-plus-circle"></i> Add Customer
    </button>
  </div>

  <table class="table table-bordered table-hover table-sm">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Billing Name</th>
        <th>Contact Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ACME Logistics</td>
        <td>John Billing</td>
        <td>Jane Contact</td>
        <td>admin@acme.com</td>
        <td>+1 555-1234</td>
        <td>
          <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editCustomerModal">Edit</button>
          <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</main>

<?php include 'modals/add_customer.php'; ?>
<?php include 'modals/edit_customer.php'; ?>
<?php include 'modals/delete_customer.php'; ?>
</main>

<?php include '../../components/footer.php'; ?>
