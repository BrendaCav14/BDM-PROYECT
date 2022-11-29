#------------------------- SP_CATEGORIA-------------------------------------#
#DROP PROCEDURE SP_Categoria;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Categoria (
IN opcion			char(1),
IN P_ID_Cat int ,
IN P_nombre_Cat  varchar(50),
IN P_descripcion text,
IN P_FK_vendedor varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO Categoria(nombre_Cat,descripcion,FK_vendedor,Activo)
		               VALUES(P_nombre_Cat,P_descripcion,P_FK_vendedor,P_Activo);

END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		 UPDATE Categoria
		SET 
        nombre_Cat = P_nombre_Cat,
       descripcion = P_descripcion,
       FK_vendedor = P_FK_vendedor       
	   WHERE ID_Cat = P_ID_Cat;       
END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE Categoria
	     SET nombre_Cat = IFNULL(P_nombre_Cat,nombre_Cat),
				 Activo = 0
     WHERE ID_Cat = P_ID_Cat AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
   
		  DELETE FROM Categoria
	 WHERE  ID_Cat = P_ID_Cat AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_Cat,nombre_Cat,descripcion,FK_vendedor 
        FROM vCategorias;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR UN CAMPO
	THEN
		SELECT ID_Cat,nombre_Cat,descripcion,FK_vendedor 
        FROM Categoria
        WHERE ID_Cat = P_ID_Cat;
END IF;	

IF opcion ='A' #---------------------------------------- MOSTRAR CATEGORIAS DE VENDEDOR
	THEN
		SELECT ID_Cat,nombre_Cat,descripcion,FK_vendedor
        FROM Categoria
        WHERE FK_vendedor = P_FK_vendedor AND Activo= P_Activo;
END IF;	

IF opcion ='K' #---------------------------------------- MOSTRAR CATEGORIAS combo
	THEN
		SELECT ID_Cat,nombre_Cat 
        FROM vCategoriasCOMBO;
END IF;	

IF opcion ='M' #---------------------------------------- MOSTRAR CATEGORIAS combo
	THEN
		SELECT ID_Cat,nombre_Cat 
        FROM Categoria
        WHERE nombre_Cat = P_nombre_Cat;
END IF;


IF opcion ='N' #---------------------------------------- MOSTRAR productos x categoria
	THEN
		SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.imagen2,P.imagen3,P.video,
               P.venta,P.cantidad,P.precio,
               C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria 
        where C.nombre_Cat = P_nombre_Cat;
  END IF;	
  
 IF opcion ='O' #---------------------------------------- MOSTRAR productos x categoria
	THEN       
        SELECT P.ID_Producto,P.nombre,P.descripcion,
P.imagen1,P.venta,P.cantidad,P.precio,
P.FK_Categoria,C.nombre_Cat,P.FK_Vendedor 
FROM Producto P
join Categoria C
        on C.ID_Cat = P.FK_Categoria 
        where C.nombre_Cat = P_nombre_Cat;

        
END IF;	

END$$

