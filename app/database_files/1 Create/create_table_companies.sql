CREATE TABLE companies(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    company_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    PRIMARY KEY (id)
)ENGINE = InnoDB;