#------------------------- SP_METODO_PAGO-------------------------------------#
#DROP PROCEDURE SP_MetodoPago;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_MetodoPago (
    IN opcion			char(1),
	IN P_id int,
	IN P_Nombre varchar(400),
	IN P_NumTarjeta varchar(16),
    IN P_MesExp tinyint,
    IN P_AñoExp tinyint,
    IN P_CVC tinyint,
    IN P_FK_Comprador varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO MetodoPago(Nombre,NumTarjeta,MesExp,AñoExp,CVC,FK_Comprador,Activo) VALUES(P_Nombre,P_NumTarjeta,P_MesExp,P_AñoExp,P_CVC,P_FK_Comprador,P_Activo);
DELETE FROM MetodoPago
  WHERE id NOT IN (
    SELECT * FROM (
      SELECT MAX(id) FROM MetodoPago
        GROUP BY FK_Comprador
    )  AS s_alias
  );
END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		REPLACE INTO Metodo_Pago
		SET 
ID_MetPago = P_ID_MetPago,
NombreTarjeta = P_NombreTarjeta,
numTarjeta = P_numTarjeta,
MesExp = P_MesExp,
AñoExp = P_AñoExp,
CVV = P_CVV,
Banco = P_Banco,
Fecha = P_Fecha,
FK_Comprador = P_FK_Comprador;
   
END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE Metodo_Pago
	     SET     ID_MetPago = IFNULL(P_ID_MetPago,ID_MetPago),
				 Activo = 0
     WHERE ID_MetPago = P_ID_MetPago AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Metodo_Pago
				 WHERE  ID_MetPago = P_ID_MetPago AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
        SELECT id,Nombre,NumTarjeta,MesExp,AñoExp,CVC,FK_Comprador,Activo
        FROM vMetodoPagoTodos;
       
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT id,Nombre,NumTarjeta,MesExp,AñoExp,CVC,FK_Comprador,Activo
        FROM vMetodoPagoTodos
        WHERE FK_Comprador=P_FK_Comprador;
END IF;	

update MetodoPago set NumTarjeta= "1456-1133-5678-1121" where FK_Comprador="Alo_2";


END$$