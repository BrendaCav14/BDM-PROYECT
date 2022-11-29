#------------------------- SP_CARRITO_PRODUCTOS-------------------------------------#
#DROP PROCEDURE SP_CarritoDet;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_CarritoDet (
IN opcion			char(1),
IN P_ID_CarritoDetalle int,
IN P_fecha date,
IN P_cantidad int,
IN P_precio decimal(10,2),
IN P_FK_Producto int,
IN P_FK_Vendedor  varchar(15),
IN P_FK_Carrito int,
IN P_FK_Comprador  varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
    
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
set sql_safe_updates = 0;

INSERT INTO Carrito_Detalle(fecha,   cantidad,     precio,   FK_Producto,    FK_Vendedor,    FK_Carrito,    FK_Comprador)
                     VALUES(now(),P_cantidad,    P_precio, P_FK_Producto,  P_FK_Vendedor,  P_FK_Carrito,  P_FK_Comprador);

DELETE FROM Carrito_Detalle
  WHERE ID_CarritoDetalle NOT IN (
    SELECT * FROM (
      SELECT MAX(ID_CarritoDetalle) FROM Carrito_Detalle
        GROUP BY FK_Producto,FK_Carrito,FK_Vendedor,FK_Comprador
    )  AS s_alias
  );
END IF;
IF opcion = 'A' #---------------------------------------- AGREGAR
THEN
set sql_safe_updates = 0;

INSERT INTO Carrito_Detalle(fecha,   cantidad,     precio,   FK_Producto,    FK_Vendedor,    FK_Carrito,    FK_Comprador)
SELECT A.fecha,   A.cantidad,  A.precioCot,   A.FK_Product,        A.FK_Vend,      A.FK_Carro,       A.FK_Compra
FROM  CotizarProducto A
WHERE A.FK_Product = P_FK_Producto AND A.FK_Compra=P_FK_Comprador AND A.Activo = 1;

DELETE FROM Carrito_Detalle
  WHERE ID_CarritoDetalle NOT IN (
    SELECT * FROM (
      SELECT MAX(ID_CarritoDetalle) FROM Carrito_Detalle
        GROUP BY FK_Producto,FK_Carrito,FK_Vendedor,FK_Comprador
    )  AS s_alias
  );
END IF;

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE Carrito_Detalle
	     SET     ID_Carrito = IFNULL(P_ID_Carrito,ID_Carrito),
				 Activo = 0
     WHERE ID_CarritoDetalle = P_ID_CarritoDetalle AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
DELETE FROM Carrito_Detalle WHERE ID_CarritoDetalle = P_ID_CarritoDetalle;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_CarritoDetalle, cantidad, precio, fecha,
			   FK_Producto, nombre, 
               FK_Carrito, FK_Comprador, FK_Vendedor,
               CalculaSubtotal(precio,cantidad) "subtotal", total
        FROM vCarritoDetalles;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR TODOS
	THEN
        SELECT ID_CarritoDetalle, cantidad, precio, fecha,
			   FK_Producto, nombre, 
               FK_Carrito, FK_Comprador, FK_Vendedor,
               CalculaSubtotal(precio,cantidad) "subtotal", total
        FROM vCarritoDetalles
        WHERE FK_Comprador =P_FK_Comprador;
END IF;	


END$$