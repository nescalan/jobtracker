CREATE TABLE IF NOT EXISTS jobtracker.models_brands (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  model VARCHAR(45) NOT NULL,
  brand VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  INDEX model_brand_idx (model, brand) 
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
