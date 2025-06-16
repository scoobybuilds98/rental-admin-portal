CREATE TABLE IF NOT EXISTS customer_pricing (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  equipment_type ENUM('Chassis', 'Dry Van', 'Reefer', 'Trailer', 'Other'),
  daily_rate DECIMAL(10,2),
  weekly_rate DECIMAL(10,2),
  monthly_rate DECIMAL(10,2),
  yearly_rate DECIMAL(10,2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (customer_id) REFERENCES customers(id)
);
