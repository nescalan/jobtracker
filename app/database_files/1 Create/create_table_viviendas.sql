CREATE TABLE viviendas(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    numero_casa VARCHAR(4) NOT NULL,
    direccion VARCHAR(120) NOT NULL,
    telefono  VARCHAR(10) NOT NULL,
    estado ENUM('activo', 'inactivo'),
    PRIMARY KEY(id)
) ENGINE = InnoDB;

