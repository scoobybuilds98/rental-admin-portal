CREATE TABLE audit_log (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_email VARCHAR(255),
  action_type ENUM('Create', 'Update', 'Delete', 'Upload', 'Login'),
  table_affected VARCHAR(100),
  record_id INT,
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  notes TEXT
);
