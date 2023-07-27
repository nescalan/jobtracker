CREATE TABLE article_descriptions (
    description_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    description VARCHAR(150) NOT NULL,
    PRIMARY KEY (description_id),
    UNIQUE (description) -- Ensure descriptions are unique
) ENGINE = InnoDB;
