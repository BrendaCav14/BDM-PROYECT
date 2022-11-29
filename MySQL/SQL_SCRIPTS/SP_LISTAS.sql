#------------------------- SP_LISTA-------------------------------------#
#DROP PROCEDURE SP_Lista;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Lista (
IN opcion			char(1),
IN P_ID_Lista int,
IN P_nombre varchar(50),
IN P_descripcion text,
IN P_imagen mediumblob,
IN P_estado enum('Publica','Privada'),
IN P_FK_Usuario varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT INTO Lista(nombre,descripcion,imagen,estado,FK_Usuario,Activo)
		VALUES(P_nombre,P_descripcion,P_imagen,P_estado,P_FK_Usuario,P_Activo);

END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
		UPDATE Lista
		SET  
            nombre = P_nombre,
       descripcion = P_descripcion,
            imagen = P_imagen,
			estado = P_estado,
		FK_Usuario = P_FK_Usuario
        
        WHERE ID_Lista = P_ID_Lista;   
   
END IF;	

IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN	
		 UPDATE Lista
	     SET   ID_Lista = IFNULL(P_ID_Lista,ID_Lista),
                 nombre = IFNULL(P_nombre,nombre),
				 Activo = 0
     WHERE ID_Lista = P_ID_Lista AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Lista
				 WHERE  ID_Lista = P_ID_Lista AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_Lista,nombre,descripcion,imagen,estado,FK_Usuario
        FROM vMostrarListas;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT L.ID_Lista,L.nombre "NombreLista",L.descripcion "Descripcion",L.imagen "Imagen",L.estado "Estado",L.FK_Usuario
        FROM vMostrarListas L 
        WHERE  L.FK_Usuario = P_FK_Usuario;
END IF;

IF opcion ='H' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT L.ID_Lista,L.nombre "NombreLista",L.descripcion "Descripcion",L.imagen "Imagen",L.estado "Estado",L.FK_Usuario
        FROM vMostrarListas L 
        WHERE  L.FK_Usuario = P_FK_Usuario AND L.estado = "Publica";
END IF;

IF opcion ='M' #---------------------------------------- MOSTRAR LISTAS DE UN USUARIO
	THEN
		SELECT L.ID_Lista,L.nombre,L.descripcion,L.imagen "Imagen",L.estado "Estado",L.FK_Usuario
        FROM Lista L 
        WHERE  L.ID_Lista = P_ID_Lista;
END IF;


END$$