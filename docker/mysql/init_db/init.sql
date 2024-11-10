CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10, 2),
    stock INT
);

INSERT INTO products (name, price, stock) VALUES ('Sample Product', 19.99, 100);
