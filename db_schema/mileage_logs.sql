CREATE TABLE mileage_logs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT,
  lease_id INT,
  date_logged DATE,
  miles_driven INT,
  source ENUM('Manual', 'GPS'),
  notes TEXT,
  FOREIGN KEY (equipment_id) REFERENCES equipment(id),
  FOREIGN KEY (lease_id) REFERENCES leases(id)
);
