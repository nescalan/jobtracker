CREATE TABLE users(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    affiliated_company_id INT UNSIGNED NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_affiliated_company_id_users FOREIGN KEY(affiliated_company_id) REFERENCES affiliated_companies(id)
)ENGINE = InnoDB;