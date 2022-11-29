#------------------------- SP_COTIZAR_PRODUCTO-------------------------------------#
#DROP PROCEDURE SP_CotizaProd;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_CotizaProd (
IN opcion char(1),
IN P_ID_CotizarProducto int,
IN P_fecha date,
IN P_cantidad int,
IN P_precioCot decimal(10,2),
IN P_FK_Product int,
IN P_FK_Vend  varchar(15),
IN P_FK_Carro int,
IN P_FK_Compra  varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =0;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO CotizarProducto( fecha,  cantidad,  precioCot,  FK_Product,    FK_Vend,    FK_Carro,    FK_Compra,    Activo) 
                             VALUES(now(), P_cantidad,P_precioCot,P_FK_Product,  P_FK_Vend,  P_FK_Carro,  P_FK_Compra,  P_Activo);

END IF;

IF opcion ='U' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
          UPDATE CotizarProducto SET precioCot = P_precioCot, Activo= 1 WHERE FK_Product=  P_FK_Product;
	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM CotizarProducto WHERE  FK_Product = P_FK_Product AND FK_Compra= P_FK_Compra AND Activo = 1;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT C.ID_CotizarProducto,C.FK_Compra "Comprador",
               C.FK_Product,C.FK_Vend "Vendedor",P.nombre,C.precioCot "Precio",P.imagen1,P.FK_Categoria,A.nombre_Cat,
               P.venta,C.FK_Carro,C.Activo
        FROM CotizarProducto C
        JOIN Producto P
        ON P.ID_Producto = C.FK_Product 
        JOIN Categoria A
        on A.ID_Cat = P.FK_Categoria
         WHERE C.Activo = 1 AND C.FK_Compra = P_FK_Compra AND C.FK_Product = P_FK_Product;
       
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT C.ID_CotizarProducto,C.FK_Compra "Comprador",
               C.FK_Product,C.FK_Vend "Vendedor",P.nombre,C.precioCot "Precio",P.imagen1,P.FK_Categoria,A.nombre_Cat,
               P.venta,C.FK_Carro,C.Activo
        FROM CotizarProducto C
        JOIN Producto P
        ON P.ID_Producto = C.FK_Product 
		JOIN Categoria A
        on A.ID_Cat = P.FK_Categoria
        WHERE C.Activo = 0 AND C.FK_Vend = P_FK_Vend;
       
END IF;	

IF opcion ='A' #---------------------------------------- MOSTRAR TODOS
	THEN
			SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.cantidad,P.precio,
               P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
        WHERE P.ID_Producto = P_FK_Product;
       
END IF;	

END$$