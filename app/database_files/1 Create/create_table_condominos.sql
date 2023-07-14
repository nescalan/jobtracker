CREATE TABLE condominos(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    cedula INT UNSIGNED NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    estado ENUM('activo', 'inactivo'),
    PRIMARY KEY (id)
)ENGINE = InnoDB;