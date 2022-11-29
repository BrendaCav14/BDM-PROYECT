
USE TIENDA;
##     SUBTOTAL       ----//////////////////////////////////////////////////////////////////////////////////////

DROP FUNCTION CalculaSubtotal;

DELIMITER =)
CREATE FUNCTION CalculaSubtotal ( precio decimal(30,2), cantidad int )
RETURNS DECIMAL(30,2)
DETERMINISTIC
BEGIN
   DECLARE subtotal DECIMAL(30,2) default 0.00;
   SET subtotal = precio * cantidad;
   return subtotal;
END =)
DELIMITER ;

##     TOTAL      ----//////////////////////////////////////////////////////////////////////////////////////

DROP FUNCTION CalculaTOTAL;

DELIMITER =)
CREATE FUNCTION CalculaTOTAL ( id varchar(15) )
RETURNS DECIMAL(30,2)
DETERMINISTIC
BEGIN
   DECLARE subtotal DECIMAL(30,2) default 0.00;
   DECLARE vprecio DECIMAL(30,2) default 0.00;
   DECLARE vcant INT;
   
   SELECT SUM(A.precio * A.cantidad) INTO subtotal
    FROM Carrito_Detalle A
        WHERE A.FK_Comprador = id;
        
     RETURN subtotal;
 
END =)
DELIMITER ;

##     Cantidad Update Productos       ----//////////////////////////////////////////////////////////////////////////////////////

DROP FUNCTION UpdateCantidad;

DELIMITER =)
CREATE FUNCTION UpdateCantidad ( CantidadProd int, CantidadVenta int )
RETURNS INT
DETERMINISTIC
BEGIN
   DECLARE CambiaCant INT;
   SET CambiaCant = CantidadProd - CantidadVenta;
   return CambiaCant;
END =)
DELIMITER ;



