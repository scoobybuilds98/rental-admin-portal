CREATE TABLE IF NOT EXISTS leases (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  equipment_id INT,
  lease_number VARCHAR(100) UNIQUE,
  lease_start DATE,
  lease_end DATE,
  rate_type ENUM('Daily', 'Weekly', 'Monthly', 'Yearly'),
  custom_rate DECIMAL(10,2),
  mileage_estimate INT,
  mileage_actual INT,
  lease_status ENUM('Active', 'Paused', 'Completed', 'Early Return'),
  notes TEXT,
  contract_pdf_url VARCHAR(255),
  inspection_in_url VARCHAR(255),
  inspection_out_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (customer_id) REFERENCES customers(id),
  FOREIGN KEY (equipment_id) REFERENCES equipment(id)
);
