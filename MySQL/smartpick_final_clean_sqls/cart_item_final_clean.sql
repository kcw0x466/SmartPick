DROP TABLE IF EXISTS cart_item;
CREATE TABLE `cart_item` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `member_id` BIGINT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL DEFAULT 1,
  `added_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`member_id`) REFERENCES `member`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`) ON DELETE CASCADE
);