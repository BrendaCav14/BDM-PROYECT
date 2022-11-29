#RANGO DE PRECIOS------------------

#DROP PROCEDURE SP_RangoProducto;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_RangoProducto (IN opcion char(1))

BEGIN

IF opcion ='B' #---------------------------------------- MOSTRAR PRODUCTOS RANGO
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria  
WHERE precio BETWEEN 0 AND 500;

END IF;

IF opcion ='C' #---------------------------------------- MOSTRAR PRODUCTOS RANGO
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria  
WHERE precio BETWEEN 500 AND 1000;

END IF;

IF opcion ='D' #---------------------------------------- MOSTRAR PRODUCTOS RANGO
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria  
WHERE precio BETWEEN 1000 AND 2000;

END IF;

IF opcion ='E' #---------------------------------------- MOSTRAR PRODUCTOS RANGO
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria  
WHERE precio BETWEEN 2000 AND 5000;

END IF;

IF opcion ='F' #---------------------------------------- MOSTRAR PRODUCTOS RANGO
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria  
WHERE precio BETWEEN 3000 AND 10000;

END IF;

END$$
