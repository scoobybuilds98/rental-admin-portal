CREATE TABLE invoices (
  id INT AUTO_INCREMENT PRIMARY KEY,
  lease_id INT,
  customer_id INT,
  invoice_number VARCHAR(100) UNIQUE,
  issue_date DATE,
  due_date DATE,
  total_amount DECIMAL(10,2),
  status ENUM('Pending', 'Paid', 'Overdue'),
  pdf_url VARCHAR(255),
  notes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (lease_id) REFERENCES leases(id),
  FOREIGN KEY (customer_id) REFERENCES customers(id)
);
