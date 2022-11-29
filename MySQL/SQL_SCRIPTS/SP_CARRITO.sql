#------------------------- SP_CARRITO-------------------------------------#
#DROP PROCEDURE SP_Carrito;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Carrito (
IN opcion			char(1),
IN P_ID_Carrito int,
IN P_total decimal(10,2),
IN P_fecha date,
IN P_FK_Comprador varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Carrito
				 WHERE  ID_Carrito = P_ID_Carrito AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_Carrito ,total,fecha ,FK_Comprador,Activo
        FROM Carrito;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR UN USUARIO
	THEN
		SELECT ID_Carrito ,total,fecha ,FK_Comprador,Activo
        FROM Carrito
        WHERE FK_Comprador = P_FK_Comprador;
END IF;	





END$$