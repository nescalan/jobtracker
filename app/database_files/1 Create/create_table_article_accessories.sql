CREATE TABLE article_accessories (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    accesory VARCHAR(150) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_article_accessories_id FOREIGN KEY (id) REFERENCES articles (id)
) ENGINE = InnoDB;
