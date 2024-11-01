CREATE DATABASE bienesraices;

USE bienes_raices;

CREATE TABLE sellers (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(32) NOT NULL,
    email VARCHAR(32) NOT NULL,
    phone VARCHAR(10),
    PRIMARY KEY (id)
);

CREATE TABLE propiedades (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(64) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(26),
    description LONGTEXT,
    num_rooms INT,
    num_wc INT,
    num_garage INT,
    created DATE,
    seller_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (seller_id) REFERENCES sellers(id)
);

CREATE TABLE ventas (
    id INT NOT NULL AUTO_INCREMENT,
    propiedad_id INT NOT NULL,
    seller_id INT NOT NULL,
    fecha_venta DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (propiedad_id) REFERENCES propiedades(id),
    FOREIGN KEY (seller_id) REFERENCES sellers(id)
);