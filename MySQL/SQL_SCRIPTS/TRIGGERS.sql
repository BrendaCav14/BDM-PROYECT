#------ TRIGGERS ------#
USE TIENDA;
SHOW TRIGGERS;
#--------------------------------------------------------------------------#
DROP TRIGGER t_borrarUsu;  #----
DROP TRIGGER t_borrarCat; #----
DROP TRIGGER t_borrarProd; #----
DROP TRIGGER t_borrarLista; #----
DROP TRIGGER t_borrarCarrito; #----

DROP TRIGGER t_CrearCarrito; #---

DROP TRIGGER t_AutorizaProducto; #---
DROP TRIGGER t_borrarAutoriza; #---

DROP TRIGGER t_AgregaProdTotal; #---
DROP TRIGGER t_BorraProdTotal; #---

DROP TRIGGER t_AgregaVentaDetalle; #---


#--------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarUsu BEFORE DELETE ON Usuarios
FOR EACH ROW 
BEGIN
     DELETE FROM Categoria
     WHERE Categoria.FK_vendedor = old.ID_usuario ;
     
     DELETE FROM Producto
     WHERE Producto.FK_Vendedor = old.ID_usuario;
     
     DELETE FROM AutorizaProducto
     WHERE AutorizaProducto.FK_Admin = old.ID_usuario;
     
	 DELETE FROM CotizarProducto
     WHERE CotizarProducto.FK_Vend = old.ID_usuario OR CotizarProducto.FK_Compra = old.ID_usuario;
     
	DELETE FROM Lista
     WHERE Lista.FK_Usuario = old.ID_usuario;

    DELETE FROM Carrito
     WHERE Carrito.FK_Comprador = old.ID_usuario;
     
     DELETE FROM Carrito_Detalle
     WHERE Carrito_Detalle.FK_Comprador = old.ID_usuario OR Carrito_Detalle.FK_Vendedor = old.ID_usuario;
     
     DELETE FROM venta
     WHERE venta.FK_Comprador = old.ID_usuario;
     
     DELETE FROM venta_Detalle
     WHERE venta_Detalle.FK_Comprador = old.ID_usuario OR venta_Detalle.FK_Vendedor = old.ID_usuario;
     
     DELETE FROM MetodoPago
     WHERE MetodoPago.FK_Comprador = old.ID_usuario;
END $$
DELIMITER ;
#--------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarCat BEFORE DELETE ON Categoria
FOR EACH ROW 
BEGIN
    DELETE FROM Producto
     WHERE Producto.FK_Categoria = old.ID_Cat;
END $$
DELIMITER ;
#--------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarProd BEFORE DELETE ON Producto
FOR EACH ROW 
BEGIN
     DELETE FROM AutorizaProducto
     WHERE AutorizaProducto.FK_Produ = old.ID_Producto;
     
     DELETE FROM CotizarProducto
     WHERE CotizarProducto.FK_Product = old.ID_Producto;
     
     DELETE FROM Lista_Productos
     WHERE Lista_Productos.FK_producto = old.ID_Producto;
     
     DELETE FROM Carrito_Detalle
     WHERE Carrito_Detalle.FK_Producto = old.ID_Producto;
     
     DELETE FROM venta_Detalle
     WHERE venta_Detalle.FK_Producto = old.ID_Producto;
     
END $$
DELIMITER ;
#--------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarLista BEFORE DELETE ON Lista
FOR EACH ROW 
BEGIN
    DELETE FROM Lista_Productos
     WHERE Lista_Productos.FK_Lista = old.ID_Lista;
END $$
DELIMITER ;

#--------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarCarrito BEFORE DELETE ON Carrito
FOR EACH ROW 
BEGIN
    DELETE FROM Carrito_Detalle
     WHERE Carrito_Detalle.FK_Carrito = old.ID_Carrito;
END $$
DELIMITER ;
#------------------------------------------------------------------------------------------#





#------------------------------------------------------------------------------------------#

DELIMITER $$
CREATE TRIGGER t_AutorizaProducto AFTER INSERT ON Producto
FOR EACH ROW 
BEGIN

INSERT INTO AutorizaProducto(FK_Produ,FK_Admin) VALUES(new.ID_Producto,"brenda14");

END $$
DELIMITER ;
#-------------------------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_borrarAutoriza AFTER DELETE ON AutorizaProducto
FOR EACH ROW 
BEGIN
   UPDATE Producto
SET Activo = 1
WHERE Producto.ID_Producto = old.FK_Produ;
END $$
DELIMITER ;
#----------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_CrearCarrito AFTER INSERT ON Usuarios FOR EACH ROW
BEGIN
INSERT INTO Carrito(fecha,FK_Comprador) VALUES(now(),new.ID_usuario);
END$$
DELIMITER ;
#------------------------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_AgregaProdTotal AFTER INSERT ON Carrito_Detalle
FOR EACH ROW 
BEGIN
UPDATE Carrito SET Carrito.total = CalculaTotal(FK_Comprador) WHERE Carrito.FK_Comprador = new.FK_Comprador;
END $$
DELIMITER ;
#------------------------------------------------------------------------------------------#
DELIMITER $$
CREATE TRIGGER t_BorraProdTotal AFTER DELETE ON Carrito_Detalle
FOR EACH ROW 
BEGIN
UPDATE Carrito SET Carrito.total = CalculaTOTAL(FK_Comprador) WHERE Carrito.FK_Comprador = old.FK_Comprador;
END $$
DELIMITER ;

#------------------------------------------------------------------------------------------#
DROP TRIGGER t_AgregaVentaDetalle;
DELIMITER $$
CREATE TRIGGER t_AgregaVentaDetalle AFTER INSERT ON venta_Detalle
FOR EACH ROW 
BEGIN

UPDATE Producto P,venta_Detalle V

      SET P.cantidad  = UpdateCantidad(P.cantidad,V.cantidad)  
      
WHERE P.ID_Producto = new.FK_Producto AND V.FK_producto = new.FK_Producto;
END $$
DELIMITER ;

#------------------------------------------------------------------------------------------#
DROP TRIGGER t_AgregaVenta;
DELIMITER $$
CREATE TRIGGER t_AgregaVenta AFTER INSERT ON venta
FOR EACH ROW 
BEGIN

DELETE FROM Carrito_Detalle WHERE FK_Comprador = new.FK_Comprador;	
DELETE FROM CotizarProducto WHERE FK_Compra = new.FK_Comprador;	


END $$
DELIMITER ;


