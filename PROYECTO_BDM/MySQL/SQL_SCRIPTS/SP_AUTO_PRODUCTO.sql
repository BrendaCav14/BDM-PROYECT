#------------------------- SP_AUTORIZAR_PRODUCTO-------------------------------------#
#DROP PROCEDURE SP_AutoProd;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_AutoProd (
IN opcion char(1),
IN P_ID_AutoProd int,
IN P_FK_Produ int,
IN P_FK_Admin varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo = 0;


IF opcion ='D' #----------------------------------------BORRAR
	THEN

     DELETE FROM AutorizaProducto WHERE ID_AutoProd = P_ID_AutoProd;
     
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_AutoProd,FK_Admin,
               ID_Producto,FK_Vendedor,nombre,
               imagen1,nombre_Cat,precio,venta
        FROM vAutorizarProductos;
       
END IF;	

END$$