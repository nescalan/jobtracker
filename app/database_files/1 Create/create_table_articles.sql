CREATE TABLE IF NOT EXISTS jobtracker.articles (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  serial_number VARCHAR(45) NOT NULL,
  order_status ENUM('Recibido', 'En espera de revisión', 'En diagnóstico', 'Esperando aprobación del cliente', 'En reparación', 'Esperando piezas o repuestos', 'En pruebas/calibración', 'Listo para entrega', 'Entregado', 'Requiere revisión adicional') NULL,
  description_id INT(10) UNSIGNED NOT NULL,
  model_brand_id INT(10) UNSIGNED NOT NULL,
  article_accessories_id INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_description_id_articles (description_id ASC) VISIBLE,
  INDEX fk_model_brand_id_articles (model_brand_id ASC) VISIBLE,
  INDEX fk_article_accessories_id_articles_idx (article_accessories_id ASC) VISIBLE,
  CONSTRAINT fk_description_id_articles
    FOREIGN KEY (description_id)
    REFERENCES jobtracker.article_descriptions (id),
  CONSTRAINT fk_model_brand_id_articles
    FOREIGN KEY (model_brand_id)
    REFERENCES jobtracker.models_brands (id),
  CONSTRAINT fk_article_accessories_id_articles
    FOREIGN KEY (article_accessories_id)
    REFERENCES jobtracker.article_accessories (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4;
