# ------------------------ DICCIONARIO DE DATOS -----------------------------#

select t.table_schema as db_name,
t.table_name,
(case when t.table_type = 'BASE TABLE' then 'table'
when t.table_type = 'VIEW' then 'view'
else t.table_type
end) as table_type,
c.column_name,
c.column_type,
c.column_default,
c.column_key,
c.is_nullable,
c.extra,
c.column_comment
from information_schema.tables as t
inner join information_schema.columns as c
on t.table_name = c.table_name
and t.table_schema = c.table_schema
and t.table_schema = 'TIENDA'
order by t.table_schema, t.table_name, c.ordinal_position;

ALTER TABLE AutorizaProducto MODIFY COLUMN ID_AutoProd int(11) auto_increment COMMENT "Llave primaria para Autorizar un producto";
ALTER TABLE AutorizaProducto MODIFY COLUMN FK_Produ int(11) COMMENT "LLave foranea de la tabla producto";
ALTER TABLE AutorizaProducto MODIFY COLUMN FK_Admin varchar(15) COMMENT "LLave foranea de la tabla Administrador(usuario)";
ALTER TABLE AutorizaProducto MODIFY COLUMN Activo bit(1) COMMENT "Columna para aceptar o no una autorizacion de un producto";


ALTER TABLE Carrito MODIFY COLUMN ID_Carrito int(11) auto_increment COMMENT "Llave primaria del Carrito de compras";
ALTER TABLE Carrito MODIFY COLUMN total decimal(10,2) COMMENT "Total a pagar del carrito de compras";
ALTER TABLE Carrito MODIFY COLUMN fecha date COMMENT "Fecha del carrito de compras";
ALTER TABLE Carrito MODIFY COLUMN FK_Comprador varchar(15) COMMENT "Llave foranea de la tabla comprador(usuario)";
ALTER TABLE Carrito MODIFY COLUMN Activo bit(1) COMMENT "Columna de carrito de compras si esta activada o no";

ALTER TABLE Carrito_Detalle MODIFY COLUMN ID_CarritoDetalle int(11) auto_increment COMMENT "Llave primaria para el carrito con productos";
ALTER TABLE Carrito_Detalle MODIFY COLUMN cantidad int(11) COMMENT "Cantidad de productos a comoprar";
ALTER TABLE Carrito_Detalle MODIFY COLUMN precio decimal(10,2) COMMENT "El precio del producto que se agrego al carrito";
ALTER TABLE Carrito_Detalle MODIFY COLUMN fecha date COMMENT "Fecha en que se agrego un producto al carrito de compras";
ALTER TABLE Carrito_Detalle MODIFY COLUMN FK_Producto int(11) COMMENT "Llave foranea de la tabla producto";
ALTER TABLE Carrito_Detalle MODIFY COLUMN FK_Carrito int(11) COMMENT "Llave foranea de la tabla de Carrito";
ALTER TABLE Carrito_Detalle MODIFY COLUMN Activo bit(1) COMMENT "Columna para activar o desactivar productos del carrito";
ALTER TABLE Carrito_Detalle MODIFY COLUMN FK_Vendedor varchar(15) COMMENT "Llave foranea del vendedor";
ALTER TABLE Carrito_Detalle MODIFY COLUMN FK_Comprador varchar(15) COMMENT "Llave foranea del comprador";

ALTER TABLE Categoria MODIFY COLUMN ID_Cat int(11) auto_increment COMMENT "Llave primaria de la tabla Categoria";
ALTER TABLE Categoria MODIFY COLUMN nombre_Cat varchar(100) COMMENT "Nombre de la categoria";
ALTER TABLE Categoria MODIFY COLUMN descripcion text COMMENT "Descripcion corta de una categoria";
ALTER TABLE Categoria MODIFY COLUMN FK_vendedor varchar(15) COMMENT "Llave foranea de la tabla vendedor(usuario)";
ALTER TABLE Categoria MODIFY COLUMN Activo bit(1) COMMENT "Columna para activar o desactivar una categoria";

ALTER TABLE CotizarProducto MODIFY COLUMN ID_CotizarProducto int(11) auto_increment COMMENT "Llave primaria de la tabla Cotizar un Producto";
ALTER TABLE CotizarProducto MODIFY COLUMN fecha date COMMENT "Fecha de la cotizacion.";
ALTER TABLE CotizarProducto MODIFY COLUMN cantidad int COMMENT "Cantidad que quiere cotizar cotizacion.";
ALTER TABLE CotizarProducto MODIFY COLUMN precioCot decimal(10,2) COMMENT "Precio de cotizacion.";
ALTER TABLE CotizarProducto MODIFY COLUMN FK_Product int COMMENT "Llave foranea del producto.";
ALTER TABLE CotizarProducto MODIFY COLUMN FK_Vend  varchar(15) COMMENT "Llave foranea de la tabla Usuarios(Vendedor).";
ALTER TABLE CotizarProducto MODIFY COLUMN FK_Carro int COMMENT "Llave foranea de la tabla Carrito.";
ALTER TABLE CotizarProducto MODIFY COLUMN FK_Compra  varchar(15) COMMENT "Llave foranea de la tabla Usuarios(Comprador).";
ALTER TABLE CotizarProducto MODIFY COLUMN Activo bit(1) COMMENT "Columna para activar o desactivar una cotizacion";



ALTER TABLE Lista MODIFY COLUMN ID_Lista int(11) auto_increment COMMENT "Llave primaria de la tabla Lista";
ALTER TABLE Lista MODIFY COLUMN nombre varchar(50) COMMENT "Nombre de la Lista o Wishlist que se quiera crear";
ALTER TABLE Lista MODIFY COLUMN descripcion text COMMENT "Descripcion corta referente a la lista a crear";
ALTER TABLE Lista MODIFY COLUMN imagen mediumblob COMMENT "Imagen para la lista o Wishlist";
ALTER TABLE Lista MODIFY COLUMN estado enum('Publica','Privada') COMMENT "La lista puede ser Publica o Privada";
ALTER TABLE Lista MODIFY COLUMN FK_Usuario varchar(15) COMMENT "Llave foranea de la tabla Usuario";
ALTER TABLE Lista MODIFY COLUMN Activo bit(1) COMMENT "Saber si esta activa o eliminada la lista para usarla";

ALTER TABLE Lista_Productos MODIFY COLUMN ID_ListaProd int(11) auto_increment COMMENT "LLave primaria de la tabla Lista de Productos";
ALTER TABLE Lista_Productos MODIFY COLUMN FK_Lista int(11) COMMENT "LLave foranea de la tabla Lista";
ALTER TABLE Lista_Productos MODIFY COLUMN FK_producto int(11) COMMENT "LLave foranea de la tabla producto";
ALTER TABLE Lista_Productos MODIFY COLUMN Activo bit(1) COMMENT "Por si se elimina o no un producto de la lista";

ALTER TABLE MetodoPago MODIFY COLUMN id int(11) auto_increment COMMENT "Llave primaria de la tabla Metodo de pago";
ALTER TABLE MetodoPago MODIFY COLUMN Nombre varchar(400) COMMENT "Nombre completo de la persona del propietario de la tarjeta";
ALTER TABLE MetodoPago MODIFY COLUMN NumTarjeta varchar(30) COMMENT "Los 16 digitos de la tarjeta de credito o debito";
ALTER TABLE MetodoPago MODIFY COLUMN MesExp tinyint COMMENT "El mes de expiracion de la tarjeta de credito o debito";
ALTER TABLE MetodoPago MODIFY COLUMN AñoExp tinyint COMMENT "El año de expiracion de la tarjeta de credito o debito";
ALTER TABLE MetodoPago MODIFY COLUMN CVC tinyint COMMENT "Los 3 digitos de seguridad de la tarjeta de credito o debito";
ALTER TABLE MetodoPago MODIFY COLUMN FK_Comprador varchar(15) COMMENT "Llave foranea de la tabla comprador(usuario)";
ALTER TABLE MetodoPago MODIFY COLUMN Activo bit(1) COMMENT "Tarjeta de credito o debito activa o no";

ALTER TABLE Producto MODIFY COLUMN ID_Producto int(11) auto_increment COMMENT "Llave primaria de la tabla producto";
ALTER TABLE Producto MODIFY COLUMN nombre varchar(100) COMMENT "Nombre del producto";
ALTER TABLE Producto MODIFY COLUMN descripcion text COMMENT "Descripcion del producto";
ALTER TABLE Producto MODIFY COLUMN imagen1 mediumblob COMMENT "Imagen 1 del producto";
ALTER TABLE Producto MODIFY COLUMN ruta_imagen1 varchar(255) COMMENT "ruta de la foto del producto uno";
ALTER TABLE Producto MODIFY COLUMN tipo_imagen1 varchar(255) COMMENT "tipo de foto del producto uno";
ALTER TABLE Producto MODIFY COLUMN imagen2 mediumblob COMMENT "Imagen 2 del producto";
ALTER TABLE Producto MODIFY COLUMN ruta_imagen2 varchar(255) COMMENT "ruta de la foto del producto dos";
ALTER TABLE Producto MODIFY COLUMN tipo_imagen2 varchar(255) COMMENT "tipo de foto del producto dos";
ALTER TABLE Producto MODIFY COLUMN imagen3 mediumblob COMMENT "Imagen 3 del producto";
ALTER TABLE Producto MODIFY COLUMN ruta_imagen3 varchar(255) COMMENT "ruta de la foto del producto tres";
ALTER TABLE Producto MODIFY COLUMN tipo_imagen3 varchar(255) COMMENT "tipo de foto del producto tres";
ALTER TABLE Producto MODIFY COLUMN video mediumblob COMMENT "video del producto";
ALTER TABLE Producto MODIFY COLUMN ruta_video varchar(255) COMMENT "ruta del video del producto";
ALTER TABLE Producto MODIFY COLUMN tipo_video varchar(255) COMMENT "tipo del video del producto";
ALTER TABLE Producto MODIFY COLUMN venta enum('Cotizar','Vender') COMMENT "Tipo de venta para el producto Vender o Cotizar";
ALTER TABLE Producto MODIFY COLUMN cantidad int(11) COMMENT "Cantidad disponible del producto";
ALTER TABLE Producto MODIFY COLUMN precio decimal(10,2) COMMENT "Precio establecido del producto";
ALTER TABLE Producto MODIFY COLUMN FK_Categoria int COMMENT "Llave foranea de la tabla Categoria";
ALTER TABLE Producto MODIFY COLUMN FK_Vendedor varchar(15) COMMENT "Llave foranea de la tabla Vendedor(usuario)";
ALTER TABLE Producto MODIFY COLUMN Activo bit(1) COMMENT "Si el producto a sido eliminado o sigue en existencia";

ALTER TABLE Usuarios MODIFY COLUMN ID_usuario varchar(15) COMMENT "Llave primaria de la tabla usuario";
ALTER TABLE Usuarios MODIFY COLUMN email varchar(30) COMMENT "Email del usuario";
ALTER TABLE Usuarios MODIFY COLUMN contraseña varchar(15) COMMENT "Contraseña del usuario";
ALTER TABLE Usuarios MODIFY COLUMN nombre char(30) COMMENT "nombre del usuario";
ALTER TABLE Usuarios MODIFY COLUMN nombre2 char(30) COMMENT "segundo nombre del usuario";
ALTER TABLE Usuarios MODIFY COLUMN ApPat char(30) COMMENT "Apellido Paterno del usuario";
ALTER TABLE Usuarios MODIFY COLUMN ApMat char(30) COMMENT "Apellido Materno del usuario";
ALTER TABLE Usuarios MODIFY COLUMN foto mediumblob COMMENT "foto de perfil del usuario";
ALTER TABLE Usuarios MODIFY COLUMN ruta_foto varchar(100) COMMENT "ruta de la foto de perfil del usuario";
ALTER TABLE Usuarios MODIFY COLUMN tipo_foto varchar(50) COMMENT "tipo de foto de perfil del usuario";
ALTER TABLE Usuarios MODIFY COLUMN FN date COMMENT "Fecha de Nacimiento del usuario";
ALTER TABLE Usuarios MODIFY COLUMN genero enum('Masculino','Femenino') COMMENT "Genero masculino o femenino para el usuario";
ALTER TABLE Usuarios MODIFY COLUMN FechaIngreso date COMMENT "Fecha de Ingreso del usuario";
ALTER TABLE Usuarios MODIFY COLUMN Cuenta enum('Publico','Privado') COMMENT "La cuenta puede ser publica o privada para el usuario";
ALTER TABLE Usuarios MODIFY COLUMN Rol enum('Administrador','Vendedor','Comprador') COMMENT "Rol de usuario para su cuenta";
ALTER TABLE Usuarios MODIFY COLUMN Activo bit(1) COMMENT "Usuario activo o se elimina";

ALTER TABLE venta MODIFY COLUMN ID_venta int(11) auto_increment COMMENT "Llave primaria de la tabla venta";
ALTER TABLE venta MODIFY COLUMN fecha datetime COMMENT "Fecha de la realizacion de la venta";
ALTER TABLE venta MODIFY COLUMN Total decimal(10,2) COMMENT "Total de la venta";
ALTER TABLE venta MODIFY COLUMN FK_Comprador varchar(15) COMMENT "Llave foranea de la tabla comprador(usuario)";
ALTER TABLE venta MODIFY COLUMN Activo bit(1) COMMENT "venta activa o no activa";

ALTER TABLE venta_Detalle MODIFY COLUMN ID_venta int(11) auto_increment COMMENT "Llave primaria de la tabla venta detalle";
ALTER TABLE venta_Detalle MODIFY COLUMN fecha datetime COMMENT "Fecha de la venta con productos";
ALTER TABLE venta_Detalle MODIFY COLUMN cantidad int(11) COMMENT "Cantidad de productos que se vendieron";
ALTER TABLE venta_Detalle MODIFY COLUMN calificacion tinyint(4) COMMENT "La calificacion de cada producto que se vendio";
ALTER TABLE venta_Detalle MODIFY COLUMN comentario text COMMENT "comentario de cada producto que se vendio";
ALTER TABLE venta_Detalle MODIFY COLUMN precioVenta decimal(10,2) COMMENT "precio del producto que se vendio";
ALTER TABLE venta_Detalle MODIFY COLUMN importe decimal(10,2) COMMENT "importe del producto que se vendio";
ALTER TABLE venta_Detalle MODIFY COLUMN FK_Producto int(11) COMMENT "Llave foranea de la tabla producto";
ALTER TABLE venta_Detalle MODIFY COLUMN FK_Comprador varchar(15) COMMENT "Llave foranea de la tabla usuarios(comprador)";
ALTER TABLE venta_Detalle MODIFY COLUMN FK_Vendedor  varchar(15) COMMENT "Llave foranea de la tabla usuarios(vendedor)";
ALTER TABLE venta_Detalle MODIFY COLUMN Activo bit(1) COMMENT "Activo o no los productos de una venta";

