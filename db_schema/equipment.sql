CREATE TABLE IF NOT EXISTS equipment (
  id INT AUTO_INCREMENT PRIMARY KEY,
  unit_number VARCHAR(50) UNIQUE,
  type ENUM('Chassis', 'Dry Van', 'Reefer', 'Trailer', 'Other'),
  vin VARCHAR(100),
  serial_number VARCHAR(100),
  ownership ENUM('Owned', 'Leased'),
  status ENUM('Available', 'On Lease', 'Reserved', 'In Maintenance'),
  tags TEXT,
  tire_size VARCHAR(50),
  current_mileage INT,
  gps_tracking_id VARCHAR(100),
  yard_location VARCHAR(100),
  condition_notes TEXT,
  photo_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
