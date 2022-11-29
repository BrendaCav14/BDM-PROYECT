#------------------------- SP_VENTA_DETALLE-------------------------------------#
#DROP PROCEDURE SP_VentaDet;
DELIMITER $$
USE TIENDA $$
CREATE PROCEDURE SP_VentaDet (
IN opcion			char(1),
IN P_Categoria varchar(30),
IN P_fecha datetime,
IN P_fecha2 datetime,
IN P_cantidad int,
IN P_calificacion TINYINT,
IN P_comentario text,
IN P_precioVenta decimal(10,2),
IN P_importe decimal(10,2),
IN P_FK_Producto int,
IN P_FK_Comprador varchar(15),
IN P_FK_Vendedor  varchar(15)
    )
    BEGIN
    
    DECLARE P_Activo BIT;
    SET P_Activo =1;
    SET lc_time_names = 'es_MX';
IF opcion = 'I' #---------------------------------------- AGREGAR
THEN
set sql_safe_updates = 0;

INSERT INTO venta_Detalle(fecha,  cantidad, calificacion,   comentario,  precioVenta,  importe,  FK_Producto,  FK_Comprador,  FK_Vendedor,Activo)
				   VALUES(now(),P_cantidad,P_calificacion,P_comentario,P_precioVenta,P_importe,P_FK_Producto,P_FK_Comprador,P_FK_Vendedor,P_Activo);
END IF;

IF opcion ='S' #---------------------------------------- MOSTRAR TODOS
	THEN
             SELECT FK_Producto, ROUND(AVG(calificacion),0) "promedio",AVG(calificacion)
             FROM venta_Detalle 
             WHERE FK_Producto=P_FK_Producto 
             GROUP BY FK_Producto;
END IF;	

IF opcion ='X' #---------------------------------------- MOSTRAR TODOS
	THEN
            SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(V.fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",ROUND(AVG(V.calificacion),0) "promedio",AVG(V.calificacion)"cali",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"
     FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Vendedor= P_FK_Vendedor
     GROUP BY V.FK_Producto,V.FK_Vendedor,V.fecha,C.nombre_Cat,P.nombre,V.calificacion,V.precioVenta,P.cantidad
     ORDER BY V.fecha;
END IF;	

IF opcion ='Y' #---------------------------------------- MOSTRAR TODOS
	THEN
     
     SELECT monthname(V.fecha) "MES",YEAR(V.fecha) "AÑO",C.nombre_Cat "Categoria",SUM(V.importe) "Ventas"
     FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Vendedor=P_FK_Vendedor
     GROUP BY C.nombre_Cat
     ORDER BY V.fecha;
END IF;	

IF opcion ='A' #---------------------------------------- CONSULTA VENTAS VENDEDOR- POR CATEGORIA 
	THEN
SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(V.fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",V.calificacion "promedio",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"     FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE C.nombre_Cat=P_Categoria AND V.FK_Vendedor=P_FK_Vendedor AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2 
     ORDER BY V.fecha;
     
END IF;	

IF opcion ='B' #---------------------------------------- CONSULTA VENTAS VENDEDOR- TODOS 
	THEN
SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(V.fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",V.calificacion "promedio",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"     
            FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Vendedor=P_FK_Vendedor AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2   
     ORDER BY V.fecha;
END IF;	

IF opcion ='C' #---------------------------------------- CONSULTA VENTAS DETALLADA VENDEDOR- CATEGORIA
	THEN
     SELECT monthname(V.fecha) "MES",YEAR(V.fecha) "AÑO",C.nombre_Cat "Categoria",SUM(V.importe) "Ventas"
     FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE C.nombre_Cat=P_Categoria AND V.FK_Vendedor=P_FK_Vendedor AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2 
     GROUP BY C.nombre_Cat
     ORDER BY V.fecha;
END IF;	

IF opcion ='D' #---------------------------------------- CONSULTA VENTAS DETALLADA VENDEDOR- TODOS
	THEN
     SELECT monthname(V.fecha) "MES",YEAR(V.fecha) "AÑO",C.nombre_Cat "Categoria",SUM(V.importe) "Ventas"
     FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Vendedor=P_FK_Vendedor AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2 
     GROUP BY C.nombre_Cat
     ORDER BY V.fecha;
END IF;	

IF opcion ='E' #---------------------------------------- CONSULTA VENTAS VENDEDOR- POR CATEGORIA 
	THEN
           SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(V.fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",V.calificacion "promedio",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"     
            FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE C.nombre_Cat=P_Categoria AND V.FK_Comprador=P_FK_Comprador AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2   
     ORDER BY V.fecha;
     
END IF;	

IF opcion ='F' #---------------------------------------- CONSULTA PEDIDOS COMPRADOR- TODOS
	THEN
            SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",V.calificacion "promedio",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"
	 FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Comprador=P_FK_Comprador
     ORDER BY V.fecha;
END IF;	

IF opcion ='G' #---------------------------------------- CONSULTA VENTAS VENDEDOR- TODOS 
	THEN
SELECT V.FK_Vendedor,DATE_FORMAT(V.fecha,"%d-%M-%Y") "Fecha",TIME_FORMAT(V.fecha, "%r") "Hora",C.nombre_Cat "Categoria",
            P.nombre "Producto",V.calificacion "promedio",V.precioVenta "Precio",V.importe "Subtotal",P.cantidad "Cantidad"     
            FROM venta_Detalle V
     JOIN Producto P
     ON P.ID_Producto = V.FK_Producto
     JOIN Categoria C
     ON C.ID_Cat = P.FK_Categoria
     WHERE V.FK_Comprador=P_FK_comprador AND DATE_FORMAT(V.fecha,"%Y-%m-%d") BETWEEN P_fecha AND P_fecha2   
     ORDER BY V.fecha;
END IF;	

IF opcion ='U' #---------------------------------------- CONSULTA PCOMENTARIOS
	THEN
	     SELECT V.FK_Comprador,DATE_FORMAT(fecha,"%d-%M-%Y") "Fecha",U.foto,
                V.calificacion "Calificacion",V.comentario "comentario"
     FROM venta_Detalle V
     JOIN Usuarios U
     ON U.ID_usuario = V.FK_Comprador
     WHERE V.FK_Producto = 3;

END IF;	



IF opcion ='P' #---------------------------------------- CONSULTA PCOMENTARIOS
	THEN
SELECT V.FK_Comprador,DATE_FORMAT(V.fecha,'%d-%M-%Y') 'Fecha',U.foto,
V.calificacion 'Calificacion',V.comentario 'comentario'
FROM venta_Detalle V
JOIN Usuarios U
ON U.ID_usuario = V.FK_Comprador
WHERE V.FK_Producto = P_FK_Producto;
END IF;	


END$$