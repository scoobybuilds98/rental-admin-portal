CREATE TABLE IF NOT EXISTS lease_pricing_overrides (
  id INT AUTO_INCREMENT PRIMARY KEY,
  lease_id INT,
  daily_rate DECIMAL(10,2),
  weekly_rate DECIMAL(10,2),
  monthly_rate DECIMAL(10,2),
  yearly_rate DECIMAL(10,2),
  FOREIGN KEY (lease_id) REFERENCES leases(id)
);
