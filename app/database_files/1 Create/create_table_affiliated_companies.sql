CREATE TABLE affiliated_companies(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    company_name VARCHAR(150) NOT NULL,
    phone VARCHAR(45),
    email VARCHAR(150),
    address VARCHAR(255),
    PRIMARY KEY (id)
)ENGINE = InnoDB;