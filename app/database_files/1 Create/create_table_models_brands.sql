CREATE TABLE models_brands (
    model_brand_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    model VARCHAR(45) NOT NULL,
    brand VARCHAR(45) NOT NULL,
    PRIMARY KEY (model_brand_id),
    UNIQUE (model, brand) -- Ensure model and brand combinations are unique
) ENGINE = InnoDB;
