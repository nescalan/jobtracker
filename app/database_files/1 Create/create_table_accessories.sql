CREATE TABLE accessories (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    accessory VARCHAR(150) NOT NULL,
    article_id INT UNSIGNED NOT NULL, -- This is the foreign key for articles
    PRIMARY KEY (id),
    FOREIGN KEY (article_id) REFERENCES article_descriptions (description_id),
    FOREIGN KEY (model_brand_id) REFERENCES models_brands (model_brand_id)
) ENGINE = InnoDB;
