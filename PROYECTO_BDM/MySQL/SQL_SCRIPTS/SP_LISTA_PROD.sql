#------------------------- SP_LISTA_PRODUCTOS-------------------------------------#
#DROP PROCEDURE SP_ListaProd;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_ListaProd (
IN opcion			char(1),
P_ID_ListaProd int,
P_FK_Lista int,
P_FK_producto int
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO Lista_Productos(ID_ListaProd,FK_Lista,FK_producto,Activo)VALUES(P_ID_ListaProd,P_FK_Lista,P_FK_producto,P_Activo);
DELETE FROM Lista_Productos
  WHERE ID_ListaProd NOT IN (
    SELECT * FROM (
      SELECT MAX(ID_ListaProd) FROM Lista_Productos
        GROUP BY FK_Producto,FK_Lista
    )  AS s_alias
  );
END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		REPLACE INTO Lista_Productos
		SET 
        ID_ListaProd = P_ID_ListaProd,
        FK_Lista = P_FK_Lista,
        FK_producto = P_FK_producto;
   
END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE Lista_Productos
	     SET     ID_ListaProd = IFNULL(P_ID_ListaProd,ID_ListaProd),
				 Activo = 0
     WHERE ID_ListaProd = P_ID_ListaProd AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Lista_Productos
				 WHERE  ID_ListaProd = P_ID_ListaProd AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT A.ID_ListaProd "N°",A.FK_Lista "N° Lista",L.nombre "Nombre Lista",L.FK_Usuario "Usuario Lista", U.Rol "ROL Lista",
               A.FK_producto "N° Producto",P.nombre "Nombre Producto",P.precio "Precio",P.venta "Venta",C.nombre_Cat "Categoria",P.FK_Vendedor"Vendedor Producto", A.Activo "Activo"
        FROM Lista_Productos A
		JOIN Producto P 
        ON P.ID_Producto = A.FK_producto
        JOIN Lista L 
        ON L.ID_Lista = A.FK_Lista
        JOIN Categoria C 
        ON C.ID_Cat = P.FK_Categoria
        JOIN Usuarios U 
        ON U.ID_usuario = L.FK_usuario;
      
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT L.ID_Lista "Lista",A.ID_ListaProd,A.FK_Lista,L.nombre "NombreLista",L.descripcion "Descripcion",L.FK_Usuario,
               A.FK_producto,P.nombre,P.imagen1, P.precio "Precio",P.cantidad, P.venta "Venta",C.nombre_Cat "Categoria",P.FK_Vendedor"Vendedor"
        FROM Lista_Productos A
		JOIN Producto P 
        ON P.ID_Producto = A.FK_producto
        JOIN Lista L 
        ON L.ID_Lista = A.FK_Lista
        JOIN Categoria C 
        ON C.ID_Cat = P.FK_Categoria
        WHERE A.FK_Lista=P_FK_Lista;
END IF;

IF opcion ='Z' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT A.ID_ListaProd "N°",A.FK_Lista "N° Lista",L.nombre "Nombre Lista",L.FK_Usuario "Usuario Lista", U.Rol "ROL Lista",
               A.FK_producto "N° Producto",P.nombre "Nombre Producto",P.precio "Precio",P.venta "Venta",C.nombre_Cat "Categoria",P.FK_Vendedor"Vendedor Producto", A.Activo "Activo"
        FROM Lista_Productos A
		JOIN Producto P 
        ON P.ID_Producto = A.FK_producto
        JOIN Lista L 
        ON L.ID_Lista = A.FK_Lista
        JOIN Categoria C 
        ON C.nombre_Cat = P.FK_Categoria
        JOIN Usuario U 
        ON U.usuario = L.FK_usuario
        WHERE U.Rol="Comprador" AND P.venta="Vender";
END IF;		

IF opcion ='M' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT A.ID_ListaProd,A.FK_Lista "Lista",A.FK_producto "NumP",P.nombre "Producto",P.imagen1,P.descripcion,
               C.nombre_Cat "Categoria",P.cantidad "cantidad",P.precio "Precio",P.venta "Venta",P.FK_Vendedor"Vendedor"
        FROM Lista_Productos A
		JOIN Producto P 
        ON P.ID_Producto = A.FK_producto
        JOIN Categoria C 
        ON C.ID_Cat = P.FK_categoria
        WHERE A.FK_Lista = P_FK_Lista and P.venta="Vender";
END IF;		
END$$