CREATE TABLE IF NOT EXISTS workorders(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    consecutive INT UNSIGNED NOT NULL,
    workorder_date DATE NOT NULL,
    comments VARCHAR(255),
    customer_id INT UNSIGNED NOT NULL,
    article_id INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_customer_id_reports FOREIGN KEY(customer_id) REFERENCES customers(id), 
    CONSTRAINT fk_article_id_reports FOREIGN KEY(article_id) REFERENCES articles(id)
)ENGINE=InnoDB;