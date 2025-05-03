CREATE DATABASE nyca_db;

USE nyca_db;

CREATE TABLE registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  course VARCHAR(100),
  address TEXT,
  payment_method VARCHAR(20),
  payment_id VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
