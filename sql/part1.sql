--Adding categoriy names
INSERT INTO categories (category_name) VALUES ('FootLocker');
INSERT INTO categories (category_name) VALUES ('Watches');

--Adding products
INSERT INTO products (category_id, product_name, price, quantity_remaining, description, image)
VALUES (1, 'Nike', 200.00, 4, 'Basketball Nike, by DRose.', 'nike.jpg');

INSERT INTO products (category_id, product_name, price, quantity_remaining, description, image)
VALUES (1, 'Reebok', 160.00, 4, 'Soccer Cleats, by Casillas.', 'reebok.jpg');

INSERT INTO products (category_id, product_name, price, quantity_remaining, description, image)
VALUES (2, 'Michael Kors', 600.00, 5, 'Michael Kors Watch.', 'kors.jpg');

INSERT INTO products (category_id, product_name, price, quantity_remaining, description, image)
VALUES (2, '', 1999.00, 2, 'Louis Moinet Franc Macon Watch', 'moinet.jpg');