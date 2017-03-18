create database dbsistemaventa;

use dbsistemaventa;

create table tusuario
(
	dniUsuario varchar(15) not null,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	sexo varchar(10),
	email varchar(255) not null,
	password varchar(60) not null,
	celular varchar(20) not null,	
	imagen varchar(255),
	cargo varchar(20) not null,
	fechaRegistro datetime not null,
	fechaModificacion datetime not null,
	primary key(dniUsuario)
);

create table tproducto
(
	nombreProducto varchar(50) not null,
	imagen varchar(255),	
	descripcion text not null,
	stock int not null,
	precio float not null,
	fechaRegistro datetime,
	fechaModificacion datetime,
	primary key (nombreProducto)
);


create table tregistrarproducto(
	idRegistrar int auto_increment not null,
	dniUsuario varchar(15) not null,
	nombreProducto varchar(50) not null,
	primary key(idRegistrar),
	foreign key (dniUsuario) references tusuario(dniUsuario),
	foreign key(nombreProducto) references tproducto(nombreProducto)
);



create table tcliente
(
	dniCliente varchar(15) not null,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	direccion varchar(60) not null,
	email varchar(255) not null,
	telefono varchar(40) not null,
	sexo varchar(10) not null,
	fechaRegistro datetime not null,
	fechaModificacion datetime not null,
	primary key(dniCliente)
);



create table tventa
(
	idVenta int auto_increment not null primary key,
	dniUsuario varchar(15) not null,
	dniCliente varchar(15) not null,
	nombreProducto varchar(50) not null,
	unidadVendida int not null,
	fechaModificacion datetime,
	foreign key (dniUsuario) references tusuario(dniUsuario),
	foreign key (dniCliente) references tcliente(dniCliente),
	foreign key (nombreProducto) references tProducto(nombreProducto)
);
/*calcular inventario*/

create table tdetalleventa(
	idDetalle int auto_increment not null primary key,
	idVenta int not null,
	dniUsuario varchar(15) not null,
	dniCliente varchar(15) not null,
	nombreProducto varchar(50) not null,
	descripcion text not null,
	cantidad int not null,
	precioUnitario float not null,
	importe float not null,
	precioTotal float not null,
	fechaVenta datetime,
	foreign key (idVenta) references tventa(idVenta),
	foreign key (dniUsuario) references tusuario(dniUsuario),
	foreign key (dniCliente) references tcliente(dniCliente),
	foreign key (nombreProducto) references tProducto(nombreProducto)
);