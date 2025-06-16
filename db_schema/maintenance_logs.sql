CREATE TABLE maintenance_logs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  equipment_id INT,
  lease_id INT NULL,
  vendor_name VARCHAR(255),
  description TEXT,
  date DATE,
  cost DECIMAL(10,2),
  is_recurring BOOLEAN,
  performed_by ENUM('internal', 'external'),
  downtime_days INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (equipment_id) REFERENCES equipment(id),
  FOREIGN KEY (lease_id) REFERENCES leases(id)
);
