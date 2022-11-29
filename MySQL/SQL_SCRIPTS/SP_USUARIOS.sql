#------------------------- SP_USUARIO-------------------------------------#
#DROP PROCEDURE SP_Usuario;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_Usuario (
IN opcion			char(1),
IN P_usuario varchar(15),
IN P_email varchar(30),
IN P_contraseña varchar(15),
IN P_nombre char(30),
IN P_nombre2 char(30),
IN P_ApPat char(30),
IN P_ApMat char(30),
IN P_foto mediumblob,
IN P_ruta_foto varchar(100),
IN P_tipo_foto varchar(50),
IN P_FN date,
IN P_genero enum('Masculino','Femenino'), 
IN P_FechaIngreso date,
IN P_Cuenta enum('Publico','Privado'),
IN P_Rol enum('Administrador','Vendedor','Comprador')
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
		INSERT IGNORE INTO Usuarios(ID_usuario,email,contraseña,nombre,nombre2,ApPat,ApMat,foto,ruta_foto,tipo_foto,FN,genero,FechaIngreso,Cuenta,Rol,Activo)
                         VALUES(P_usuario,P_email,P_contraseña,P_nombre,P_nombre2,P_ApPat,P_ApMat,P_foto,P_ruta_foto,P_tipo_foto,P_FN,P_genero,now(),P_Cuenta,P_Rol,P_Activo);

END IF;

IF opcion ='U' #----------------------------------------MODIFICAR
	THEN
    UPDATE Usuarios 
SET 

 email		    =     P_email,
 contraseña		=     P_contraseña,
 nombre		    =     P_nombre,
 nombre2		=     P_nombre2,
 ApPat		    =     P_ApPat,
 ApMat		    =     P_ApMat,
 
 foto		    =     P_foto,
 ruta_foto      =     P_ruta_foto,
 tipo_foto      =     P_tipo_foto,
 
 FN		        =     P_FN,
 genero		    =     P_genero,
 FechaIngreso   =     P_FechaIngreso,
 Cuenta		    =     P_Cuenta,
 Rol		    =     P_Rol
 WHERE ID_usuario = P_usuario;
END IF;	
IF opcion ='B' #----------------------------------------BORRAR LOGICAMENTE
	THEN
		 UPDATE Usuarios
	     SET email = IFNULL(P_email,email),
             usuario = IFNULL(P_usuario,ID_usuario),
	         Activo = 0
     WHERE usuario = P_usuario
	 AND Activo = P_Activo;	
END IF;	

IF opcion ='D' #----------------------------------------BORRAR
	THEN
		  DELETE FROM Usuarios
	 WHERE  ID_usuario = P_usuario AND Activo = P_Activo;	
END IF;	

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
		SELECT ID_usuario,email,contraseña,
               concat(nombre,' ',nombre2,' ',ApPat,' ',ApMat) "Nombre",
               foto,FN,genero,FechaIngreso,
               Cuenta,Rol,Activo
        FROM Usuarios
        ORDER BY ID_usuario ASC;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR UN CAMPO
	THEN
		SELECT ID_usuario,email,contraseña,nombre,nombre2,ApPat,ApMat,
               concat(nombre,' ',nombre2,' ',ApPat,' ',ApMat) "Nombre",
               foto "Foto",FN "FN",genero "Genero",FechaIngreso"FI",
               Cuenta "Cuenta",Rol "Rol"
        FROM Usuarios
        WHERE ID_usuario=P_usuario;
END IF;	

IF opcion ='A' #---------------------------------------- MOSTRAR ROLES DE USUARIO
	THEN
		SELECT ID_usuario "Usuario",Rol "Rol",Cuenta "Tipo Cuenta",
               concat(nombre,' ',nombre2,' ',ApPat,' ',ApMat) "Nombre Usuario",
               FN "Fecha Nacimiento",genero "Genero",FechaIngreso "Fecha Ingreso",Activo
        FROM Usuarios
        WHERE Rol = P_Rol AND Activo=P_Activo
        ORDER BY usuario ASC;
END IF;

IF opcion ='K' #---------------------------------------- MOSTRAR combo USUARIO
	THEN
		SELECT ID_usuario,nombre,nombre2,ApPat,ApMat
        FROM vUsuarios
        WHERE ID_usuario=P_ID_usuario OR nombre=P_nombre OR nombre2 = P_nombre2  OR ApPat = P_ApPat OR ApMat = P_ApMat AND Activo=P_Activo;
END IF;

IF opcion ='L' #---------------------------------------- LOGIN
THEN
SELECT Rol, ID_usuario, email, contraseña FROM Usuarios WHERE email= P_email  AND contraseña = P_contraseña AND Rol = P_Rol OR ID_usuario= P_usuario AND contraseña = P_contraseña AND Rol = P_Rol;
END IF;

IF opcion ='H' #---------------------------------------- BUSCAR USUARIO REG
THEN
SELECT ID_usuario FROM Usuarios WHERE ID_usuario=P_usuario;
END IF;

IF opcion ='J' #---------------------------------------- BUSCAR EMAIL REG
THEN
SELECT email FROM Usuarios WHERE email=P_email;
END IF;

IF opcion ='G' #---------------------------------------- MOSTRAR PRODUCTOS RANDOM
THEN
        SELECT U.Rol
        FROM Usuarios U
        WHERE U.ID_usuario= P_usuario AND U.Rol = "Comprador";
END IF;


IF opcion ='T' #---------------------------------------- SELECT EDITAR
THEN
SELECT usuario,nombre,nombre2,ApPat,ApMat,email FROM Usuarios WHERE usuario = P_usuario;
END IF;

END$$

