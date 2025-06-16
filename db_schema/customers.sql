CREATE TABLE IF NOT EXISTS customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_name VARCHAR(255),
  contact_name VARCHAR(255),
  phone VARCHAR(20),
  email VARCHAR(255),
  billing_address TEXT,
  shipping_address TEXT,
  billing_entity VARCHAR(255),
  tax_id VARCHAR(100),
  dot_number VARCHAR(50),
  notes TEXT,
  portal_enabled BOOLEAN DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
