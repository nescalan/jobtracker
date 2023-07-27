CREATE TABLE article_descriptions (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    description VARCHAR(150) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (description) -- Ensure descriptions are unique
) ENGINE = InnoDB;
