CREATE TABLE
    articles (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        description_id INT UNSIGNED NOT NULL,
        model_brand_id INT UNSIGNED NOT NULL,
        -- This is the foreign key for model and brand
        serial_number VARCHAR(45) NOT NULL,
        PRIMARY KEY (id),
        CONSTRAINT fk_description_id_articles FOREIGN KEY (description_id) REFERENCES article_descriptions (id),
        CONSTRAINT fk_model_brand_id_articles FOREIGN KEY (model_brand_id) REFERENCES models_brands (model_brand_id)
    ) ENGINE = InnoDB;