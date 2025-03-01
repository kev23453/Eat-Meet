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
rol varchar(45) not null,
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

