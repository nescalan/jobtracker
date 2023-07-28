CREATE TABLE IF NOT EXISTS jobtracker.customers (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  fullname VARCHAR(100) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  company_id INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_company_id_customers_idx (company_id ASC) VISIBLE,
  CONSTRAINT fk_company_id_customers
    FOREIGN KEY (company_id)
    REFERENCES jobtracker.companies (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
