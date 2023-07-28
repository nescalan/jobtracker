CREATE TABLE IF NOT EXISTS jobtracker.article_descriptions (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  description VARCHAR(150) NOT NULL,
  PRIMARY KEY (id), -- Ensure descriptions are unique
  INDEX description_idx (description ASC)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
