#------------------------- SP_PRODUCTO-------------------------------------#
#DROP PROCEDURE SP_Producto;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Producto (
IN opcion			char(1),
IN P_ID_Producto int,
IN P_nombre varchar(255),
IN P_descripcion text,
IN P_imagen1 mediumblob,
IN P_ruta_imagen1 varchar(255),
IN P_tipo_imagen1 varchar(255),
IN P_imagen2 mediumblob,
IN P_ruta_imagen2 varchar(255),
IN P_tipo_imagen2 varchar(255),
IN P_imagen3 mediumblob,
IN P_ruta_imagen3 varchar(255),
IN P_tipo_imagen3 varchar(255),
IN P_video longblob,
IN P_ruta_video varchar(255),
IN P_tipo_video varchar(255),
IN P_venta enum('Cotizar','Vender'),
IN P_cantidad int,
IN P_precio decimal(10,2),
IN P_FK_Categoria int,
IN P_FK_Vendedor  varchar(15)

    )
    BEGIN
	DECLARE P_buscar VARCHAR(50);
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO Producto(nombre,descripcion,
							 imagen1,ruta_imagen1,tipo_imagen1,
                             imagen2,ruta_imagen2,tipo_imagen2,
                             imagen3,ruta_imagen3,tipo_imagen3,
                             video,ruta_video,tipo_video,
                             venta,cantidad,precio,FK_Categoria,FK_Vendedor)
		VALUES(P_nombre,P_descripcion,
               P_imagen1,P_ruta_imagen1,P_tipo_imagen1,
               P_imagen2,P_ruta_imagen2,P_tipo_imagen2,
               P_imagen3,P_ruta_imagen3,P_tipo_imagen3,
               P_video,P_ruta_video,P_tipo_video,
               P_venta,P_cantidad,P_precio,P_FK_Categoria,P_FK_Vendedor);
  
END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		UPDATE Producto
		SET  
      nombre = P_nombre,
 descripcion = P_descripcion,
     imagen1 = P_imagen1,
ruta_imagen1 = P_ruta_imagen1,
tipo_imagen1 = P_tipo_imagen1,
     imagen2 = P_imagen2,
ruta_imagen2 = P_ruta_imagen2,
tipo_imagen2 = P_tipo_imagen2,
     imagen3 = P_imagen3,
ruta_imagen3 = P_ruta_imagen3,
tipo_imagen3 = P_tipo_imagen3,
	   video = P_video,
  ruta_video = P_ruta_video,
  tipo_video = P_tipo_video,
	   venta = P_venta,
	cantidad = P_cantidad,
      precio = P_precio,
FK_Categoria = P_FK_Categoria,
FK_Vendedor = P_FK_Vendedor
WHERE ID_Producto = P_ID_Producto;

END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN
		 UPDATE Producto
	     SET nombre = IFNULL(P_nombre,nombre),
	         Activo = 0
		 WHERE ID_Producto=P_ID_Producto AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Producto
	      WHERE ID_Producto=P_ID_Producto AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_Producto, nombre, descripcion,imagen1, imagen2, imagen3,video, venta, cantidad, precio,nombre_Cat, FK_Vendedor
        FROM vProductosTodos;
END IF;	

IF opcion ='F' #---------------------------------------- MOSTRAR TODOS
	THEN

 SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.venta,P.cantidad,P.precio,
               C.ID_Cat,C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
        WHERE P.Activo = 1 and  C.Activo = 1 and P.FK_Vendedor = P_FK_Vendedor
        ORDER BY nombre ASC;
END IF;	


IF opcion ='X' #---------------------------------------- MOSTRAR UN CAMPO
	THEN
		SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.imagen2,P.imagen3,P.video,
               P.venta,P.cantidad,P.precio,
               P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor,U.foto,U.Rol
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
        join Usuarios U
        on U.ID_usuario = P.FK_Vendedor
        WHERE P.ID_Producto = P_ID_Producto;
        
END IF;	

IF opcion ='A' #---------------------------------------- 
	THEN
		SELECT ID_Producto,nombre,descripcion,
               venta,cantidad,precio,
               FK_Categoria,FK_Vendedor
        FROM Producto
        WHERE FK_Vendedor = P_FK_Vendedor AND Activo = P_Activo
        ORDER BY nombre ASC;
END IF;	

IF opcion ='Q' #---------------------------------------- 
	THEN
		SELECT ID_Producto, Rol, FK_Vendedor,nombre, precio, venta, cantidad, nombre_Cat
               FROM vProductosCotizar;
END IF;	

IF opcion ='Z' #---------------------------------------- 
	THEN
		SELECT ID_Producto, Rol, FK_Vendedor, nombre, precio, venta, cantidad, nombre_Cat
               FROM vProductosVender;
END IF;

IF opcion ='W' #---------------------------------------- MOSTRAR PRODUCTOS RANDOM
THEN
        SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,C.ID_Cat,C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
        where C.ID_Cat = P_FK_Categoria
       ORDER BY RAND() LIMIT 4 ;
END IF;

IF opcion ='M' #---------------------------------------- 
	THEN
		SELECT nombre FROM Producto WHERE nombre = P_nombre;

END IF;

IF opcion ='P' #---------------------------------------- MOSTRAR POR CAT
	THEN
		SELECT ID_Producto, nombre, descripcion,imagen1, imagen2, imagen3,video, venta, cantidad, precio,FK_Categoria, FK_Vendedor 
        FROM Producto 
        WHERE FK_Categoria = 11;
END IF;	


IF opcion ='H' #---------------------------------------- MOSTRAR POR CAT
	THEN
   
		SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.imagen2,P.imagen3,P.video,
               P.venta,P.cantidad,P.precio,
               P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
         FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
       WHERE P.nombre LIKE '%P_buscar%' OR P.descripcion LIKE '%P_buscar%' ;
END IF;	


IF opcion ='K' #---------------------------------------- MOSTRAR POR CAT
	THEN
SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,C.ID_Cat,C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
       ORDER BY RAND() LIMIT 4 ;
END IF;


IF opcion ='J' #---------------------------------------- MOSTRAR PRODUCTOS RANDOM
THEN
        SELECT P.ID_Producto,P.nombre,P.descripcion,P.imagen1,P.venta,P.cantidad,P.precio,C.ID_Cat,C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria
       ORDER BY RAND() LIMIT 4 ;
END IF;

IF opcion ='G' #---------------------------------------- MOSTRAR PRODUCTOS RANDOM
THEN
        SELECT U.Rol
        FROM Usuarios U
        WHERE U.ID_usuario= "DebaC15" AND U.Rol = "Comprador";
END IF;


END$$

