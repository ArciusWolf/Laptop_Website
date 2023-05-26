
USE c_1405;

CREATE TABLE accounts(
email VARCHAR(500),
username VARCHAR(500),
passwords VARCHAR(60),
phone_num INT NOT NULL
);

CREATE TABLE products(
Item_ids INT PRIMARY KEY AUTO_INCREMENT,
Product_name VARCHAR(500),
price INT NOT NULL
);
INSERT INTO accounts VALUES 
	( 'gamilfh@mail.com', 'gambitd2', 'gam123876', 09228273),
	('hoffman@mail.com', 'hoffulf', 'holf1234', 09211456),
   ( 'hf1233@mail.com', 'hgfd234', 'jhgfd76526', 098765422), 
	( 'aaaaaa@mail.com', 'waccountssdfgjmn', 'dcfvgbhn', 07876547);
	
INSERT INTO products VALUES
	( 1, 'Gucci Bag', 9990),
	( 2, 'Fried Chickens', 100),
	( 3, 'Nike Shoes', 5500),
	( 4, 'Ice cream', 50);