CREATE TABLE article_accessories(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    accessory VARCHAR(100),
    FOREIGN KEY (id) REFERENCES articles(id)
)ENGINE=InnoDB;
