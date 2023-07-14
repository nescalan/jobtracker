# TABLE "CONDOMINOS"
CREATE TABLE IF NOT EXISTS condominos(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    cedula INT UNSIGNED NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    estado ENUM('activo', 'inactivo'),
    PRIMARY KEY (id)
)ENGINE = InnoDB;

#TABLE "VIVIENDAS"
CREATE TABLE IF NOT EXISTS viviendas(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    numero_casa VARCHAR(120) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    telefono  VARCHAR(10) NOT NULL,
    estado ENUM('activo', 'inactivo'),
    PRIMARY KEY(id)
) ENGINE = InnoDB;


# TABLE "INVITADOS"
CREATE TABLE IF NOT EXISTS invitados(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    cedula VARCHAR(10) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    acceso ENUM('conceder', 'denegar'),
    PRIMARY KEY(ID)
) ENGINE = InnoDB;

# TABLE "VISITAS"
CREATE TABLE IF NOT EXISTS visitas(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha_ingreso DATE NOT NULL,
    fecha_salida DATE NOT NULL,
    tipo_visita VARCHAR(60) NOT NULL,
    placa_vehiculo VARCHAR(7) NOT NULL,
    numero_acompanantes INT UNSIGNED NOT NULL,
    invitado_id INT UNSIGNED NOT NULL,
    vivienda_id INT UNSIGNED NOT NULL,
    observaciones VARCHAR(300),
    PRIMARY KEY(id),
    CONSTRAINT fk_invitado_id FOREIGN KEY(invitado_id) REFERENCES invitados(id),
    CONSTRAINT fk_vivienda_id FOREIGN KEY(vivienda_id) REFERENCES viviendas(id)
)ENGINE=InnoDB;

# TABLE REPORTES 
CREATE TABLE IF NOT EXISTS reportes(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha_reporte DATE NOT NULL,
    invitado_id INT UNSIGNED NOT NULL,
    vivienda_id  INT UNSIGNED NOT NULL,
    visita_id  INT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_invitado_id_reportes FOREIGN KEY(invitado_id) REFERENCES invitados(id), 
    CONSTRAINT fk_vivienda_id_reportes FOREIGN KEY(vivienda_id) REFERENCES viviendas(id),
    CONSTRAINT fk_visita_id_reportes FOREIGN KEY(visita_id) REFERENCES visitas(id)
)ENGINE=InnoDB;