CREATE TABLE IF NOT EXISTS jobtracker.companies (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  company_name VARCHAR(150) NOT NULL,
  phone VARCHAR(15) NULL DEFAULT NULL,
  email VARCHAR(150) NULL DEFAULT NULL,
  address VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
