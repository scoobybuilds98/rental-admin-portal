CREATE TABLE inspections (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT,
  lease_id INT,
  inspection_type ENUM('Check-In', 'Check-Out'),
  inspected_by VARCHAR(100),
  notes TEXT,
  signed_by_customer VARCHAR(100),
  signed_by_staff VARCHAR(100),
  inspection_date DATE,
  photo_url VARCHAR(255),
  FOREIGN KEY (equipment_id) REFERENCES equipment(id),
  FOREIGN KEY (lease_id) REFERENCES leases(id)
);
