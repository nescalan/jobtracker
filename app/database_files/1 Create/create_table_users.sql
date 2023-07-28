CREATE TABLE IF NOT EXISTS jobtracker.users (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  fullname VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  affiliated_company_id INT(10) UNSIGNED NOT NULL,
  user_password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_affiliated_company_id_users (affiliated_company_id ASC),
  CONSTRAINT fk_affiliated_company_id_users
    FOREIGN KEY (affiliated_company_id)
    REFERENCES jobtracker.affiliated_companies (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
