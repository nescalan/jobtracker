CREATE TABLE customers(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    company_id INT UNSIGNED NOT NULL ,
    PRIMARY KEY (id),
    CONSTRAINT fk_company_id_customers FOREIGN KEY(company_id) REFERENCES companies(id)
)ENGINE = InnoDB;