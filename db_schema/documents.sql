CREATE TABLE documents (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT,
  lease_id INT,
  customer_id INT,
  document_type ENUM('CVI', 'Registration', 'Contract', 'Inspection', 'Insurance', 'Other'),
  document_name VARCHAR(255),
  file_url VARCHAR(255),
  expires_on DATE,
  uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (equipment_id) REFERENCES equipment(id),
  FOREIGN KEY (lease_id) REFERENCES leases(id),
  FOREIGN KEY (customer_id) REFERENCES customers(id)
);
