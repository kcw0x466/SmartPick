DROP TABLE IF EXISTS orders;
CREATE TABLE `orders` (
  `id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `member_id` BIGINT NOT NULL,
  `status` ENUM('pending', 'paid', 'shipped', 'delivered', 'cancelled') NOT NULL,
  `total_amount` DOUBLE NOT NULL,
  `ordered_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`member_id`) REFERENCES `member`(`id`) ON DELETE CASCADE
);