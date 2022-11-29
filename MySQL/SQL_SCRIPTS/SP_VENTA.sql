#------------------------- SP_VENTA-------------------------------------#
#DROP PROCEDURE SP_Venta;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Venta (
IN opcion			char(1),
IN P_ID_venta int,
IN P_fecha datetime,
IN P_Total decimal(10,2),
IN P_FK_Comprador varchar(15))
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO venta(fecha,Total,FK_Comprador) VALUES (now(),P_Total,P_FK_Comprador);

END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		UPDATE venta
		SET 
             Total = P_Total,
	  FK_Comprador = P_FK_Comprador,
        FK_MetPago = P_FK_MetPago
        WHERE ID_venta = P_ID_venta;
   
END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE venta
	     SET     ID_venta = IFNULL(P_ID_venta,ID_venta),
				 Activo = 0
     WHERE ID_venta = P_ID_venta AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		 SELECT V.ID_venta,V.fecha,V.Total,V.FK_Comprador,V.Activo
        FROM vVentasTodos V;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_venta "CARRITO",total "TOTAL",fecha "FECHA",FK_Comprador "COMPRADOR",Activo "Activo"
        FROM vVentasTodos
        WHERE FK_Comprador =P_FK_Comprador;
END IF;	


END$$