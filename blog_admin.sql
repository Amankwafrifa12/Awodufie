USE blog_db;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_first_login BOOLEAN DEFAULT TRUE
);

INSERT INTO admin (username, password) VALUES ('Awo Dufie', 'geniedevgh');