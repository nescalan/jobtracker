CREATE TABLE IF NOT EXISTS jobtracker.article_workorders (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  workorder_id INT UNSIGNED NOT NULL,
  article_id INT UNSIGNED NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_workorder_id
    FOREIGN KEY (workorder_id)
    REFERENCES jobtracker.workorders (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_article_id
    FOREIGN KEY (article_id)
    REFERENCES jobtracker.articles (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB;
