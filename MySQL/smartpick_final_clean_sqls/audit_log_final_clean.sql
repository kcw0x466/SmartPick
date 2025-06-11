DROP TABLE IF EXISTS audit_log;
CREATE TABLE `audit_log` (
  `id` BIGINT AUTO_INCREMENT PRIMARY KEY,
  `member_id` BIGINT NOT NULL,
  `action` ENUM('login', 'logout', 'view', 'edit', 'delete'),
  `ip_address` TEXT,
  `user_agent` TEXT,
  `page_url` TEXT,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`member_id`) REFERENCES `member`(`id`) ON DELETE CASCADE
);