CREATE DATABASE IF NOT EXISTS sql_demo;

USE sql_demo;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password) VALUES 
('john_doe', 'password123'), 
('jane_smith', 'securePass!'), 
('alice_jones', 'alice2024'), 
('bob_brown', 'brownie'), 
('charlie_white', 'charlie2024'), 
('danielle_black', 'danielle!'), 
('eve_green', 'eve1234'), 
('frank_hill', 'frank!pass'), 
('george_adams', 'george2024'), 
('hannah_clark', 'hannahSecure!'), 
('ivan_morris', 'ivan@2024'), 
('julia_turner', 'julia2024'), 
('kevin_miller', 'kevinPass123'), 
('lisa_scott', 'lisa2024'), 
('michael_lee', 'michaelLee!'), 
('nancy_davis', 'nancy@2024'), 
('oliver_wilson', 'oliver2024'), 
('peter_martin', 'peter@pass'), 
('quincy_king', 'quincyKing123'), 
('rachel_green', 'rachel2024');