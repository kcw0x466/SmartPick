DROP TABLE IF EXISTS product;
CREATE TABLE `product` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `category` VARCHAR(255),
  `name` VARCHAR(255),
  `price` DOUBLE,
  `rating` DOUBLE
);