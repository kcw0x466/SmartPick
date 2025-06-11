DROP TABLE IF EXISTS review;
CREATE TABLE `review` (
  `id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `product_id` INT NOT NULL,
  `member_id` BIGINT NOT NULL,
  `rating` INT NOT NULL,
  `comment` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`member_id`) REFERENCES `member`(`id`) ON DELETE CASCADE
);