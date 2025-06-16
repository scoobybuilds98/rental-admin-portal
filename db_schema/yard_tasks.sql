CREATE TABLE yard_tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  equipment_id INT,
  task_type ENUM('Clean', 'Reposition', 'Inspect', 'Other'),
  assigned_to VARCHAR(100),
  due_date DATE,
  status ENUM('Pending', 'In Progress', 'Completed'),
  notes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (equipment_id) REFERENCES equipment(id)
);
