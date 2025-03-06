create database eat_meet

use eat_meet

create table usuario(
id_usuario int primary key identity(1,1),
nombre_usuario varchar(25) not null,
email varchar(50) not null,
contraseña varchar(50) not null,
telefono varchar(20) null
)

create table roles(
id_rol int primary key identity(1,1),
rol varchar(45) not null
)

create table permisos(
id_permiso int primary key identity(1,1),
permiso varchar(50) not null
)

create table usuario_permiso(
id_registro int primary key identity(1,1),
id_usuario int foreign key references usuario(id_usuario),
id_rol int foreign key references roles(id_rol),
id_permiso int foreign key references permisos(id_permiso)
)


CREATE TABLE CategoriaComida (
	id_categoria INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	categoria VARCHAR(75) NOT NULL
)

CREATE TABLE categoriaIngrediente (
	id_categoria INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	categoria VARCHAR(75) NOT NULL
)

CREATE TABLE ingredientes(
	id_ingrediente INT PRIMARY KEY IDENTITY(1,1),
	nombre VARCHAR(80) NOT NULL,
	categoriaIngrediente INT FOREIGN KEY REFERENCES categoriaIngrediente(id_categoria)
)

CREATE TABLE precio_producto (
	id_precio INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	precio MONEY NOT NULL
);

CREATE TABLE platillos( 
    id_platillos INT PRIMARY KEY IDENTITY(1,1),
    nombre_platillos VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES CategoriaComida(id_categoria)
)


CREATE TABLE CategoriaBebida(
    id_categoria INT PRIMARY KEY IDENTITY(1,1),
    categoria VARCHAR(255) UNIQUE
)


CREATE TABLE bebidas( 
    id_bebidas INT PRIMARY KEY IDENTITY(1,1),
    nombre_bebida VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES CategoriaBebida(id_categoria)
)


CREATE TABLE Recetas(
    id_recetas INT PRIMARY KEY IDENTITY(1,1),
    id_usuario INT,  
    fecha DATETIME
);



CREATE TABLE descripcion_platillo(
    id_descripcion INT PRIMARY KEY IDENTITY(1,1),
    descripcion VARCHAR(255),
    id_platillo INT,
    FOREIGN KEY (id_platillo) REFERENCES platillos(id_platillos)
);


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
id_usuario int FOREIGN KEY REFERENCES usuario(id_usuario)
)

create table restaurante(
	id_restaurante int primary key identity(1,1),
	nombre varchar (50) not null,
	numero_telefonico varchar (20) null
)


CREATE TABLE ingrediente_x_restaurante(
	id_registro INT PRIMARY KEY IDENTITY(1,1),
	id_Restaurante INT FOREIGN KEY REFERENCES restaurante(id_restaurante),
	id_ingrediente INT FOREIGN KEY REFERENCES ingredientes(id_ingrediente),
	id_precio int not null
)



CREATE TABLE restaurante_x_platillo (
	id_registro INT IDENTITY(1,1) PRIMARY KEY,
	id_platillos INT FOREIGN KEY REFERENCES platillos(id_platillos) NOT NULL,
	id_restaurante INT FOREIGN KEY REFERENCES restaurante(id_restaurante) NOT NULL
);



create table token(
id_token int primary key identity(1,1),
token varchar(100) not null,
creado_a datetime default current_timestamp,
finaliza_a datetime null,
confirmado bit default 0
)

create table UsuarioToken(
id_registro int primary key identity(1,1),
id_usuario int foreign key references usuario(id_usuario),
id_token int foreign key references token(id_token)
)



create table categoriaRestaurante(
id_categoria int primary Key identity(1,1),
categoria varchar (40) not null
)

create table Categoria_x_Restaurante(
id_registro int primary key identity(1,1),
id_restaurante int foreign key references restaurante(id_restaurante),
id_categoria int foreign key references categoriaRestaurante(id_categoria)
)


SELECT COUNT(*) AS TABLES_DATABASE FROM sys.tables

Go
CREATE PROCEDURE VencerToken
AS
BEGIN
    SET NOCOUNT ON;

    UPDATE token
    SET confirmado = 1
    WHERE confirmado = 0 AND DATEADD(MINUTE, 20, creado_a) <= GETDATE();
   
END;
Go