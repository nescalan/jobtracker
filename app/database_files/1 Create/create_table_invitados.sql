CREATE TABLE invitados(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    cedula VARCHAR(10) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    acceso ENUM('conceder', 'denegar'),
    PRIMARY KEY(id)
) ENGINE = InnoDB;
