DROP TABLE IF EXISTS member;
CREATE TABLE `member` (
  `id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `name` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20),
  `birth_date` DATE,
  `gender` ENUM('M', 'F') DEFAULT NULL,
  `profile_image` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `last_login_at` DATETIME
);