#------------------------- SP_VENTA_DETALLE-------------------------------------#
#DROP PROCEDURE SP_Busqueda;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Busqueda (IN opcion			char(1), IN P_buscar varchar(30))
BEGIN

IF opcion = 'A' #---------------------------------------- AGREGAR
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,
P.imagen1,P.venta,P.cantidad,P.precio,
P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria
WHERE P.nombre LIKE CONCAT('%', P_buscar , '%') OR P.descripcion LIKE CONCAT('%', P_buscar , '%') OR C.nombre_Cat LIKE CONCAT('%', P_buscar , '%') ;


END IF;


IF opcion = 'B' #---------------------------------------- AGREGAR
THEN
SELECT ID_usuario,nombre,nombre2,ApPat,ApMat
FROM Usuarios
WHERE nombre LIKE CONCAT('%', P_buscar , '%') OR nombre2 LIKE CONCAT('%', P_buscar , '%') OR ApPat LIKE CONCAT('%', P_buscar , '%') OR ApMat LIKE CONCAT('%', P_buscar , '%') ;
END IF;


IF opcion = 'C' #---------------------------------------- AGREGAR
THEN
SELECT ID_usuario,nombre,nombre2,ApPat,ApMat,Cuenta, CONCAT(nombre,' ',nombre2,' ',ApPat,' ',ApMat) 'Nombre',Rol
FROM Usuarios
WHERE nombre LIKE CONCAT('%', P_buscar , '%') OR nombre2 LIKE CONCAT('%', P_buscar , '%') OR ApPat LIKE CONCAT('%', P_buscar , '%') OR ApMat LIKE CONCAT('%', P_buscar , '%');
END IF;

IF opcion = 'D' #---------------------------------------- AGREGAR
THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,
P.imagen1,P.venta,P.cantidad,P.precio,
P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
on C.ID_Cat = P.FK_Categoria;

END IF;


END $$