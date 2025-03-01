CREATE DATABASE eat_meet;

USE eat_meet;

CREATE TABLE CategoriaComida (
	id_categoria INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	categoria VARCHAR(75) NOT NULL
);

CREATE TABLE categoriaIngrediente (
	id_categoria INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	categoria VARCHAR(75) NOT NULL

);

CREATE TABLE restaurante_x_platillo (
	id_registro INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	id_platillos INT FOREIGN KEY (id_platillo) REFERENCES valoraciones(id_platillo) NOT NULL,
	id_restaurante INT FOREIGN KEY (id_restaurante) REFERENCES valoraciones(id_restaurante) NOT NULL
);

CREATE TABLE precio_producto (
	id_precio INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	precio MONEY NOT NULL
);