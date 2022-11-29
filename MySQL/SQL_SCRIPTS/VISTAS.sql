#----------- VIEWS -----------#
USE TIENDA;


#1------------------------    CATEGORIAS TODOS   --------------------------------------------------#
DROP VIEW vCategorias;

CREATE VIEW 
vCategorias AS 
SELECT ID_Cat,nombre_Cat,descripcion,FK_vendedor
        FROM Categoria
        WHERE Activo = 1
        ORDER BY nombre_Cat ASC;
        
#1------------    COMBO CATEGORIAS   --------------------------------------------------------------#
DROP VIEW vCategoriasCOMBO;

CREATE VIEW 
vCategoriasCOMBO AS 
SELECT ID_Cat,nombre_Cat 
        FROM Categoria;        
        
        
 #2---------------------- MOSTRAR TODOS LOS PRODUCTOS ------------------------#
 DROP VIEW vProductosTodos;
 
 CREATE VIEW vProductosTodos AS
 SELECT P.ID_Producto,P.nombre,P.descripcion,
               P.imagen1,P.imagen2,P.imagen3,P.video,
               P.venta,P.cantidad,P.precio,
               C.nombre_Cat,P.FK_Vendedor
        FROM Producto P
        join Categoria C
        on C.ID_Cat = P.FK_Categoria 
        where P.Activo = 1
        ORDER BY nombre ASC;
 
 #5------------------- AUTORIZAR PRODUCTOS-----------------------------#
  DROP VIEW vAutorizarProductos;
 
 CREATE VIEW vAutorizarProductos AS
    SELECT     A.ID_AutoProd,A.FK_Admin,
               P.ID_Producto,P.FK_Vendedor,P.nombre,
               P.imagen1,C.nombre_Cat,P.precio,P.venta
        FROM AutorizaProducto A
        JOIN Producto P
        ON P.ID_Producto = A.FK_Produ
        JOIN Categoria C
        ON C.ID_Cat = P.FK_Categoria
        ORDER BY A.ID_AutoProd ASC;
     #6------------------- MOSTRAR LISTAS-----------------------------#  
     DROP VIEW vMostrarListas;
 
 CREATE VIEW vMostrarListas AS
     SELECT ID_Lista,nombre,descripcion,imagen,estado,FK_Usuario
        FROM Lista
        ORDER BY nombre ASC;
        
     #7------------------- CARRITO DETALLES-----------------------------#  
     DROP VIEW vCarritoDetalles;
 
 CREATE VIEW vCarritoDetalles AS
     		SELECT A.ID_CarritoDetalle,A.cantidad,A.precio,A.fecha,
               A.FK_Producto,P.nombre,A.FK_Carrito, A.FK_Comprador,A.FK_Vendedor,CalculaSubtotal(A.precio,A.Cantidad) "subtotal", C.total
        FROM Carrito_Detalle A
         JOIN Carrito C
        ON C.ID_Carrito= A.FK_Carrito
        JOIN Producto P
        ON P.ID_Producto= A.FK_Producto
        JOIN Usuarios U
        ON U.ID_usuario= A.FK_Comprador;
     
          #9------------------- VENTA TODOS-----------------------------# 
              DROP VIEW vVentasTodos;
 
		CREATE VIEW vVentasTodos AS
		SELECT ID_venta,total,fecha,FK_Comprador,Activo
        FROM venta;

     #9------------------- LISTA PRODUCTOS  ----------------------------# 
              DROP VIEW vUsuarios;
 
		CREATE VIEW vUsuarios AS 
		SELECT ID_usuario,nombre,nombre2,ApPat,ApMat
        FROM Usuarios;

     #9----------------------------------------------------------------#
     DROP VIEW vMetodoPagoTodos;
 
	 CREATE VIEW vMetodoPagoTodos AS
		SELECT id,Nombre,NumTarjeta,MesExp,AñoExp,CVC,FK_Comprador,Activo
        FROM MetodoPago;