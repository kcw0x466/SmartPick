DROP TABLE IF EXISTS address;
CREATE TABLE `address` (
  `id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `member_id` BIGINT NOT NULL,
  `name` VARCHAR(255),
  `phone` VARCHAR(50),
  `address_line1` TEXT,
  `address_line2` TEXT,
  `city` VARCHAR(100),
  `zip_code` VARCHAR(20),
  `is_default` TINYINT(1) DEFAULT 0,
  `receiver_name` VARCHAR(100),
  `delivery_note` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`member_id`) REFERENCES `member`(`id`) ON DELETE CASCADE
);