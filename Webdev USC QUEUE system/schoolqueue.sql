-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS school_queue;

-- Use the database
USE school_queue;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id_number VARCHAR(20) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    school VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    queue_number INT NOT NULL DEFAULT 1
);

-- Create the schools table (if it doesn't exist)
CREATE TABLE IF NOT EXISTS schools (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

-- Insert sample schools data
INSERT INTO schools (name) VALUES
('SAFAD'),
('SHCP'),
('SAS'),
('SOE'),
('SBE'),
('SLG'),
('SED');
