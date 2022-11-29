create database tienda;

USE tienda;

drop database tienda;

#-----------------------------------------------------------------------------------------------------------#
SELECT * FROM Usuarios;
CREATE TABLE Usuarios(
ID_usuario varchar(15) primary key not null  unique,
email varchar(30)   not null unique,
contraseña varchar(15) not null,
nombre char(30) not null,
nombre2 char(30) not null,
ApPat char(30) not null,
ApMat char(30) not null,
foto mediumblob null,
ruta_foto varchar(100) null,
tipo_foto varchar(50) null,
FN date null,
genero enum('Masculino','Femenino') not null, 
FechaIngreso date null,
Cuenta enum('Publico','Privado')  not null,
Rol enum('Administrador','Vendedor','Comprador') not null
);
drop table Usuarios;
ALTER TABLE Usuarios ADD Activo BIT DEFAULT(1);



#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM Categoria;
CREATE TABLE Categoria(
ID_Cat int primary key not null auto_increment,
nombre_Cat varchar(100) not null unique,
descripcion text not null,
FK_vendedor varchar(15) not null,
CONSTRAINT Cat_Vendedor FOREIGN KEY (FK_vendedor) REFERENCES Usuarios(ID_usuario) 
);
drop table Categoria;
ALTER TABLE Categoria ADD Activo BIT DEFAULT(1);



#-----------------------------------------------------------------------------------------------------------#

SELECT ID_Producto,nombre,FK_Vendedor, cantidad,precio,venta FROM Producto ;
CREATE TABLE Producto(
ID_Producto int primary key not null auto_increment,
nombre varchar(255) not null unique,
descripcion mediumtext not null,
imagen1 mediumblob null,
ruta_imagen1 varchar(255) null,
tipo_imagen1 varchar(255) null,
imagen2 mediumblob null,
ruta_imagen2 varchar(255) null,
tipo_imagen2 varchar(255) null,
imagen3 mediumblob null,
ruta_imagen3 varchar(255) null,
tipo_imagen3 varchar(255) null,
video longblob null,
ruta_video varchar(255) null,
tipo_video varchar(255) null,
venta enum('Cotizar','Vender')  not null,
cantidad int not null,
precio decimal(10,2) not null default 0.00 ,
FK_Categoria int not null,
FK_Vendedor  varchar(15) not null,
CONSTRAINT Prod_Cat FOREIGN KEY (FK_Categoria) REFERENCES Categoria(ID_Cat),
CONSTRAINT Prod_Ven FOREIGN KEY (FK_Vendedor) REFERENCES Usuarios(ID_usuario)

);
drop table Producto;
ALTER TABLE Producto ADD Activo BIT DEFAULT(0);



#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM AutorizaProducto;
CREATE TABLE AutorizaProducto(
ID_AutoProd int primary key not null auto_increment,
FK_Produ int not null,
FK_Admin    varchar(15) not null,
CONSTRAINT Auto_Prod FOREIGN KEY (FK_Produ) REFERENCES Producto(ID_Producto),
CONSTRAINT Auto_Admin FOREIGN KEY (FK_Admin) REFERENCES Usuarios(ID_usuario)
);
drop table AutorizaProducto;
ALTER TABLE AutorizaProducto ADD Activo BIT DEFAULT(1);



#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM CotizarProducto;
CREATE TABLE CotizarProducto(
ID_CotizarProducto int primary key not null auto_increment,
fecha date not null,
cantidad int not null,
precioCot decimal(10,2) not null default 0.00,
FK_Product int not null,
FK_Vend  varchar(15) not null,
FK_Carro int not null,
FK_Compra  varchar(15) not null,
CONSTRAINT Cot_Prod FOREIGN KEY (FK_Product) REFERENCES Producto(ID_Producto) ON DELETE CASCADE,
CONSTRAINT Cot_Vend FOREIGN KEY (FK_Vend) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE,
CONSTRAINT CotCarFK FOREIGN KEY (FK_Carro) REFERENCES Carrito(ID_Carrito) ON DELETE CASCADE,
CONSTRAINT Cot_Compra FOREIGN KEY (FK_Compra) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE
);

drop table CotizarProducto;
ALTER TABLE CotizarProducto ADD Activo BIT DEFAULT(0);



#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM Lista;
CREATE TABLE Lista(
ID_Lista int primary key not null auto_increment,
nombre varchar(50) not null,
descripcion text not null,
imagen mediumblob not null,
estado enum('Publica','Privada') not null,
FK_Usuario varchar(15) not null,
CONSTRAINT LUsuario FOREIGN KEY (FK_Usuario) REFERENCES Usuarios(ID_usuario)
);
DROP TABLE Lista;
ALTER TABLE Lista ADD Activo BIT DEFAULT(1);



#-----------------------------------------------------------------------------------------------------------#
SET FOREIGN_KEY_CHECKS=1;

SELECT  ID_ListaProd,FK_Lista,FK_producto FROM Lista_Productos;

CREATE TABLE Lista_Productos(
ID_ListaProd int primary key not null auto_increment,
FK_Lista int not null,
FK_producto int  not null,
CONSTRAINT Listafk FOREIGN KEY (FK_Lista) REFERENCES Lista(ID_Lista) ON DELETE CASCADE,
CONSTRAINT L_Prod FOREIGN KEY (FK_producto) REFERENCES Producto(ID_Producto) ON DELETE CASCADE

)ENGINE=InnoDB CHARSET=latin1;
DROP TABLE Lista_Productos;
ALTER TABLE Lista_Productos ADD Activo BIT DEFAULT(1);

#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM Carrito;
CREATE TABLE Carrito(
ID_Carrito int primary key not null auto_increment,
total decimal(10,2) default 0.00 null,
fecha date not null,
FK_Comprador varchar(15) not null,
CONSTRAINT Carr_Comprador FOREIGN KEY (FK_Comprador) REFERENCES Usuarios(ID_usuario)
);
DROP TABLE Carrito;
ALTER TABLE Carrito ADD Activo BIT DEFAULT(1);

#-----------------------------------------------------------------------------------------------------------#

SELECT * FROM Carrito_Detalle;
CREATE TABLE Carrito_Detalle(
ID_CarritoDetalle int primary key not null auto_increment,
fecha date not null,
cantidad int not null,
precio decimal(10,2) not null default 0.00,
FK_Producto int not null,
FK_Vendedor  varchar(15) not null,
FK_Carrito int not null,
FK_Comprador  varchar(15) not null,
CONSTRAINT Carr_Prod FOREIGN KEY (FK_Producto) REFERENCES Producto(ID_Producto) ON DELETE CASCADE,
CONSTRAINT CarrDet_Vend FOREIGN KEY (FK_Vendedor) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE,
CONSTRAINT CarritoFK FOREIGN KEY (FK_Carrito) REFERENCES Carrito(ID_Carrito) ON DELETE CASCADE,
CONSTRAINT CarrDet_Comprad FOREIGN KEY (FK_Comprador) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE
);
DROP TABLE Carrito_Detalle;
ALTER TABLE Carrito_Detalle ADD Activo BIT DEFAULT(1);
#-----------------------------------------------------------------------------------------------------------#
UPDATE venta SET fecha = "2022-11-25 11:15:11" WHERE ID_venta=22;
select *from venta;
CREATE TABLE venta(
ID_venta int primary key not null auto_increment,
fecha datetime not null,
Total decimal(10,2) default 0.00 null,
FK_Comprador varchar(15) not null,
CONSTRAINT compraFK FOREIGN KEY (FK_Comprador) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE
);
DROP TABLE venta;
ALTER TABLE venta ADD Activo BIT DEFAULT(1);
      

#-----------------------------------------------------------------------------------------------------------#

select *from venta_Detalle;
CREATE TABLE venta_Detalle(
ID_venta int primary key not null auto_increment,
fecha datetime not null,
cantidad int not null,
calificacion TINYINT null,
comentario text null,
precioVenta decimal(10,2) default 0.00 null,
importe decimal(10,2) default 0.00 null,
FK_Producto int not null,
FK_Comprador varchar(15) not null,
FK_Vendedor  varchar(15) not null,
CONSTRAINT CompraventaFK FOREIGN KEY (FK_Comprador) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE,
CONSTRAINT VendventaFK FOREIGN KEY (FK_Vendedor) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE,
CONSTRAINT Prod FOREIGN KEY (FK_Producto) REFERENCES Producto(ID_Producto) ON DELETE CASCADE
);

DROP TABLE venta_Detalle;
ALTER TABLE venta_Detalle ADD Activo BIT DEFAULT(1);

#----------------------------------------------------------------------------#
CREATE TABLE MetodoPago (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nombre varchar(400) NOT NULL,
	NumTarjeta varchar(30) NOT NULL,
    MesExp tinyint NOT NULL,
    AñoExp tinyint NOT NULL,
    CVC tinyint NOT NULL,
    FK_Comprador varchar(15) NOT NULL,
    CONSTRAINT ComprarFKusu FOREIGN KEY (FK_Comprador) REFERENCES Usuarios(ID_usuario) ON DELETE CASCADE
);
ALTER TABLE MetodoPago ADD Activo BIT DEFAULT(1);
DROP TABLE MetodoPago;
