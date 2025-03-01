create database eat_meet

use eat_meet

CREATE TABLE Producto_x_restaurante(
id_Restaurante int primary key identity(1,1),
id_producto INT FOREIGN KEY REFERENCES producto(id_producto),
id_precio int not null
)

CREATE TABLE metodo_pago(
id_metodo int primary key identity (1,1),
metodo VARCHAR(25)
)

create table Moneda(
id_moneda int primary key identity (1,1),
Codigo_moneda varchar(30),
metodo VARCHAR(30)
)

CREATE TABLE Valoraciones(
id_valoraciones int primary key identity(1,1),
id_platillo INT FOREIGN KEY REFERENCES platillos(id_platillos),
comentario VARCHAR(1000),
calificacion INT,
id_usuario int FOREIGN KEY REFERENCES usuarios(id_usuario)
)
