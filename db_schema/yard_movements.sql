CREATE TABLE yard_movements (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT,
  movement_type ENUM('Check-In', 'Check-Out', 'Transfer', 'Audit', 'Note'),
  yard_location VARCHAR(100),
  timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
  performed_by VARCHAR(100),  -- or link to user table later
  notes TEXT,
  FOREIGN KEY (equipment_id) REFERENCES equipment(id)
);
