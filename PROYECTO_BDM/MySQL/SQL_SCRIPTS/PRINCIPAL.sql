# ------------------- SP_USUARIO ---------------------- #
  insert into usuario(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña) values('Manuel','Alejandro','Rodriguez','Huerta','alex@hotmail.com','manu1','123');
SELECT*FROM Usuarios where usuario="brenda14";
SELECT * FROM Usuarios WHERE ID_usuario="brenda14" and Rol="Administrador";
SELECT * FROM Usuarios WHERE Rol="Vendedor";
SELECT * FROM Usuarios WHERE Rol="Comprador";
SELECT Rol, ID_usuario, contraseña FROM Usuarios WHERE ID_usuario= "" OR email= "melanie98@yahoo.com" AND contraseña= "Mel78)=-?" AND Rol = "Vendedor";
use tienda;
select CONCAT(nombre," ",nombre2," ",ApPat," ",ApMat) Nombre from Usuarios;
delete from Usuarios where usuario="vjvgh56" and Rol="Administrador" and ApPat="Hernandez";
CALL SP_Usuario("I","alex12","alejandro_solis10@hotmail.com","alex1234","Alejandro","","Solis","Peña","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen2.jpg","1990-12-07","Masculino","2022-09-25","Privado","Comprador");
CALL SP_Usuario("I","Jenny2","jenni60@outlook.es","jenny","Jennifer","Esmeralda","Torres","Almenares","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1990-10-20","Femenino","2022-03-12","Privado","Vendedor");
CALL SP_Usuario("I","ricardo81","rickpeña@hotmail.com","ric81","Ricardo","","Peña","Dolores","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen3.jpg","1990-06-10","Masculino","2022-04-10","Publico","Administrador");
CALL SP_Usuario("I","Ale10","ale10@outlook.com","ale10","Alejandra","Lizbeth","Martinez","Hernandez","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen3.jpg","1998-09-25","Femenino","2022-05-20","Publico","Vendedor");

CALL SP_Usuario("U","Guille1","guille@hotmail.com","Guille1%=","Guillermo","Fernando","Partida","Garcia","Imagen1.jpg","Imagen1.jpg","image/jpeg","1990-02-12","Masculino","2022-11-19","Publico","Vendedor");

CALL SP_Usuario("U","Mel78","melanie98@yahoo.com","melangas","Melanie","Alejandra","Martinez","Ruiz","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1990-02-12","Femenino","2022-03-12","Publico","Comprador");
CALL SP_Usuario("U","Jenny2","jenni60@outlook.es","jenny","Jennifer","Esmeralda","Torres","Almenares","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1990-10-20","Femenino","2022-03-12","Privado","Comprador");
CALL SP_Usuario("U","ricardo81","rickpeña@hotmail.com","ric81","Ricardo","Alejandro","Peña","Dolores","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen3.jpg","1990-06-10","Masculino","2022-04-10","Publico","Administrador");
UPDATE Usuarios SET FN = "1987-01-20" WHERE ID_usuario = "EvanPet87";

CALL SP_Usuario("B","Ale10",null,null,null,null,null,null,null,null,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Usuario("D","Alo_2",null,null,null,null,null,null,null,null,null,null,null,null,null,null);

CALL SP_Usuario("K",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- MOSTRAR USUARIOS

CALL SP_Usuario("H","brenda14",null,null,null,null,null,null,null,null,null,null,null,null,null,null);
CALL SP_Usuario("J",null,"alondramiros@hotmail.com",null,null,null,null,null,null,null,null,null,null,null,null,null);

CALL SP_Usuario("S",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- MOSTRAR USUARIOS
CALL SP_Usuario("X","KatTrev14",null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- MOSTRAR UN USUARIO

CALL SP_Usuario("A",null,null,null,null,null,null,null,null,null,null,null,null,"Administrador"); # ------- MOSTRAR USUARIOS DE UN ROL

CALL SP_Usuario("L",null,"brendacavazos14@outlook.com","Brenda0414/",null,null,null,null,null,null,null,null,null,null,null,"Administrador"); # ------- LOGIN
CALL SP_Usuario("L","brenda14",null,"Brenda0414/",null,null,null,null,null,null,null,null,null,null,null,"Administrador"); # ------- LOGIN

CALL SP_Usuario("A",null,null,null,null,null,null,null,null,null,null,null,null,"Vendedor");
CALL SP_Usuario("A",null,null,null,null,null,null,null,null,null,null,null,null,"Comprador");

#----------------------------------------------------------------------------------------------------------------------------------------#
#--- CORRECTO
    SELECT Rol, ID_usuario, email, contraseña FROM Usuarios WHERE   email= ""  AND contraseña = "Mel78)=-?" AND Rol = "Vendedor" OR ID_usuario= "Mel78" AND contraseña = "Mel78)=-?" AND Rol = "Vendedor";

#--- ERROR  USUARIO
	SELECT Rol, ID_usuario, email, contraseña FROM Usuarios 
    WHERE   email= ""  AND contraseña = "Mel78)=-?" AND Rol = "Vendedor" OR ID_usuario= "Mel" AND contraseña = "Mel78)=-?" AND Rol = "Vendedor";

#--- ERROR  ROL
	SELECT Rol, ID_usuario, email, contraseña FROM Usuarios 
    WHERE   email= ""  AND contraseña = "Mel78)=-?" AND Rol = "Administrador" OR ID_usuario= "Mel78" AND contraseña = "Mel78)=-?" AND Rol = "Administrador";

#--- ERROR  CONTRASEÑA
    SELECT Rol, ID_usuario, email, contraseña FROM Usuarios 
    WHERE   email= ""  AND contraseña = "Mel78)" AND Rol = "Vendedor" OR ID_usuario= "Mel78" AND contraseña = "Mel78)" AND Rol = "Vendedor";

CALL SP_Busqueda("A","tecnologia");
CALL SP_Busqueda("B","y");
CALL SP_Busqueda("C","al");
CALL SP_Busqueda("D",null);
#-------------- SP_CATEGORIA -----------------#

CALL SP_Categoria("I",null,"Tecnologia","Computadoras,tablets,telefonos,etc...","Guille1");
CALL SP_Categoria("I","Arte","Arte y Manualidades o herramientas","Vane1");
CALL SP_Categoria("I","Videojuegos","consolas para videojuegos,juegos..","Guille1");
CALL SP_Categoria("I",null,"Musica","Discos de Albums, singles...","Mel78");
CALL SP_Categoria("I","Belleza","Tintes,cosmeticos y mas...","Vane1");
CALL SP_Categoria("I","Hogar y Cocina","Refrigeradores,Estufas,Muebles...","Guille1");
CALL SP_Categoria("I","Libros","Libros,Relatos,Trilogias...","Guille1");
CALL SP_Categoria("I","Instrumentos Musicales","Guitarras,Baterias,Microfonos...","Guille1");

CALL SP_Categoria("U",null,"Arte","Articulos de pintura,dibujo,entre otros productos...","Vane1");
CALL SP_Categoria("U",null,"Videojuegos","Articulos para gamers como consolas para videojuegos para todas las edades,juegos,controles,entre otros...","Guille1");

CALL SP_Categoria("B",null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Categoria("D",37,null,null,null);

CALL SP_Categoria("S",null,null,null,null); # ------- MOSTRAR CATEGORIAS
CALL SP_Categoria("K",null,null,null,null);
CALL SP_Categoria("O",null,"Arte",null,null);
CALL SP_Categoria("X",1,null,null,null); # ------- MOSTRAR UNA CATEGORIA
CALL SP_Categoria('M',null,"Arte", null, null);

CALL SP_Categoria("A",null,null,"miguel1"); # ------- MOSTRAR CATEGORIAS DE UN VENDEDOR
CALL SP_Categoria("A",null,null,"vaneG1");
CALL SP_Categoria("A",null,null,"jac07");

#-------------- SP_PRODUCTO -----------------#

CALL SP_Producto("I",null,"samsunuun",
				 "Album de Melanie Martinez-Presentado por el preeminente distribuidor teatral global Abramorama, K-12 estará en más de 60 teatros en los Estados Unidos",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(1).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(1).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(1).jpg",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(2).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(2).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(2).jpg",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(3).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(3).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(3).jpg",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(VIDEO).mp4",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(VIDEO).mp4",
                 "video/mp4",
                 "Vender",30,465, 1 ,"Vane1");
                 
CALL SP_Producto("U",4,"Complete Acrylic Paint Set","24 pigmentos ricos que ofrecen el mejor acabado para manualidades: la pintura acrílica de secado rápido se desliza como el terciopelo en tu superficie favorita. Lienzo, madera, poliestireno, yeso, terracota, cerámica, arcilla, sin límites para el arte hecho a mano.",
                 "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte(video).mp4",
	             "Vender",10,649,"Arte","jac07");
CALL SP_Producto("I",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
CALL SP_Producto("B",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Producto("D",65,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);

CALL SP_Producto("F",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"Guille1"); # ------- MOSTRAR TODOS LOS PRODUCTOS
  
CALL SP_Producto("S",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- MOSTRAR TODOS LOS PRODUCTOS
CALL SP_Producto("X",27,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- MOSTRAR UN PRODUCTO
CALL SP_Producto("M",null,"K-12 ALBUM - Melanie Martinez",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null); # ------- PRODUCTO YA AGREGADO

CALL SP_Producto("A",null,null,null,null,null,null,null,null,null,null,null,null,null,"jac07"); # ------- MOSTRAR PRODUCTOS DE UN VENDEDOR
CALL SP_Producto("A",null,null,null,null,null,null,null,null,null,null,null,null,null,"Guille1");
CALL SP_Producto("A",null,null,null,null,null,null,null,null,null,null,null,"Vane1");

CALL SP_RangoProducto("B");
CALL SP_RangoProducto("C");
CALL SP_RangoProducto("D");
CALL SP_RangoProducto("E");
CALL SP_RangoProducto("F");

CALL SP_Producto("Q",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
CALL SP_Producto("Z",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);

#-------------- SP_AUTORIZA_PRODUCTO -----------------#
CALL SP_AutoProd("I",null,2,null);
CALL SP_AutoProd("I",null,1,"Luis98");
CALL SP_AutoProd("I",null,2,"Luis98");
CALL SP_AutoProd("I",null,7,"ricardo81");
CALL SP_AutoProd("I",null,8,"ricardo81");
CALL SP_AutoProd("I",null,3,"ricardo81");
CALL SP_AutoProd("I",null,4,"ricardo81");
CALL SP_AutoProd("I",null,9,"Luis98");
CALL SP_AutoProd("I",null,10,"brenda14");

CALL SP_AutoProd("B",7,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_AutoProd("B",5,null,null);
CALL SP_AutoProd("B",3,null,null);

CALL SP_AutoProd("D",35,null,null);

CALL SP_AutoProd("S",null,null,null); # MOSTRAR PRODUCTOS AUTORIZADOS

#-------------- SP_COTIZAR_PRODUCTO -----------------#
INSERT INTO CotizarProducto(FK_Comprador,FK_Produ,precio,FK_Vendedor,Activo) VALUES(P_FK_Comprador,P_FK_Produ,P_precio,P_FK_Vendedor,P_Activo);
CALL SP_CotizaProd("I",null,"KatTrev1",7,240,"Guille1");
CALL SP_CotizaProd("I",null,"alex12",8,300,"Vane1");
CALL SP_CotizaProd("I",null,"Jenny2",9,150,"Vane1");
CALL SP_CotizaProd("I",null,"Mel78",10,323,"jac07");

INSERT INTO CotizarProducto( fecha,  cantidad,  precioCot,  FK_Product,   FK_Vend,  FK_Carro,  FK_Compra) 
                     VALUES( now(),         1,       0.00,          27, "Guille1",        10, "Yess_Cav");

UPDATE CotizarProducto SET precioCot = 300, Activo= 1 WHERE FK_Product=27;

INSERT INTO Carrito_Detalle(fecha,   cantidad,     precio,   FK_Producto,    FK_Vendedor,    FK_Carrito,    FK_Comprador)
                     SELECT fecha,   cantidad,  precioCot,   FK_Product,        FK_Vend,      FK_Carro,       FK_Compra
FROM  CotizarProducto WHERE FK_Product = 27;



CALL SP_CotizaProd("I",null,null,   1,0.00,  27,"Guille1",10,"Yess_Cav");

CALL SP_CotizaProd("U",null,null,null,300.00,27,null,null,null);

CALL SP_CotizaProd("S",null,null,null,null,27,null,null,"Yess_Cav"); #---ACTIVO 1-------MOSTRAR PRODUCTOS COTIZADOS
CALL SP_CotizaProd("X",null,null,null,null,null,"Guille1",null,null); #---ACTIVO 0------MOSTRAR PRODUCTOS COTIZADOS
CALL SP_CotizaProd("A",null,null,null,null,27,null,null,null);
CALL SP_CotizaProd("D",null,null,null,null,27,null,null,"Yess_Cav"); # ------- BORRAR 


#-------------- SP_LISTA -----------------#

CALL SP_Lista("I",null,"Regalos de Cumpleaños","Una lista para mi cumpleaños numero 24 que quiero recibir",
			  "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica","Luis98");


CALL SP_Lista("B",7,null,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Lista("D",7,null,null,null,null,null);

CALL SP_Lista("S",null,null,null,null,null,null); #---------MOSTRAR LISTAS
CALL SP_Lista("X",null,null,null,null,null,"KatTrev14"); #---------MOSTRAR LISTAS UN USUARIO
CALL SP_Lista("M",5,null,null,null,null,null);
#-------------- SP_LISTA_PRODUCTOS -----------------#

CALL SP_ListaProd("I",null,1,4);
CALL SP_ListaProd("I",null,1,6);
CALL SP_ListaProd("I",null,1,1);

CALL SP_ListaProd("I",null,2,1);
CALL SP_ListaProd("I",null,2,2);
CALL SP_ListaProd("I",null,2,9);

CALL SP_ListaProd("I",null,5,3);
CALL SP_ListaProd("I",null,4,1);
CALL SP_ListaProd("I",null,3,6);
CALL SP_ListaProd("I",null,3,3);
SET SQL_SAFE_UPDATES = 0;

CALL SP_ListaProd("U",null,null,null);

CALL SP_ListaProd("B",7,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_ListaProd("D",22,null,null);

CALL SP_ListaProd("S",null,null,null); #---------MOSTRAR LISTAS PRODUCTOS ADMINISTRADOR 
CALL SP_ListaProd("X",null,null,3,null); #---------MOSTRAR LISTAS PRODUCTOS VENDEDOR
CALL SP_ListaProd("M",null,null,4,null); #---------MOSTRAR LISTAS PRODUCTOS COMPRADOR

#-------------- SP_CARRITO -----------------#
SELECT*FROM Carrito;
CALL SP_Carrito("I",null,null,null,"alex12",null);

CALL SP_Carrito("U",null,null,null,null,null);
UPDATE Carrito SET total = 0.00 WHERE FK_Comprador = "Ale_Go17";
CALL SP_Carrito("B",7,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Carrito("D",7,null,null,null,null);

CALL SP_Carrito("S",null,null,null,null); #---------MOSTRAR CARRITO
CALL SP_Carrito("X",null,null,null,"DebaC15"); #---------MOSTRAR CARRITO

#-------------- SP_CARRITO_PRODUCTOS -----------------#

#  productos 
# Vane1  7 --
# Mel78 13,1,9--
# EvanPet87 3
# Guille1 5
SELECT*FROM Carrito_Detalle;

CALL SP_CarritoDet("I",null,null,   1,   1,   "Mel78",   9,     "DebaC15");
CALL SP_CarritoDet("I",null,null,   1,   1,   "Mel78",   9,     "DebaC15");

CALL SP_CarritoDet("I",null,null,   1,   3,   "Mel78",        8,     "KatTrev14");
CALL SP_CarritoDet("I",null,null,   1,   3,   "Mel78",        8,     "KatTrev14");
CALL SP_CarritoDet("I",null,null,   1,   15,   "EvanPet87",   8,     "KatTrev14");

CALL SP_CarritoDet("I",null,null,   1,   9,   "EvanPet87",   10,     "Yess_Cav");



CALL SP_CarritoDet("I",null,1,null,1,  9,"Mel78", "DebaC15");
CALL SP_CarritoDet("I",null,1,null,1,  9,"Mel78", "DebaC15");

CALL SP_CarritoDet("I",null,2,null,1 , 8,"EvanPet87", "KatTrev14");
CALL SP_CarritoDet("I",null,1,null,3,  8,"EvanPet87","DebaC15");

CALL SP_CarritoDet("I",null,1,null,3,  8,"Mel78","Ale_Go17");
CALL SP_CarritoDet("I",null,1,null,3,  8,"EvanPet87","Ale_Go17");

CALL SP_CarritoDet("B",7,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_CarritoDet("D",null,null,null,null,null,null,"Ale_Go17");


CALL SP_CarritoDet("I",null,null,2,273.00,13,"EvanPet87",10,"Yess_Cav");

CALL SP_CarritoDet("A",null,null,null,null,11,null,null,"Yess_Cav");

CALL SP_CarritoDet("S",null,null,null,null,null,null,null,null); #---------MOSTRAR CARRITO
CALL SP_CarritoDet("X",null,null,null,null,null,null,null,"KatTrev14"); #---------MOSTRAR CARRITO
CALL SP_CarritoDet("X",null,null,null,null,null,null,null,"DebaC15"); #---------MOSTRAR CARRITO
CALL SP_CarritoDet("X",null,null,null,null,null,null,null,"Alo_2"); 

CALL SP_CarritoDet("X",null,null,null,null,null,null,null,"Yess_Cav");  #---- BORRAR

#-------------- SP_VENTA -----------------#
SELECT*FROM venta;
CALL SP_Venta("I",null,"2022-11-20 02:20:54",4395.00,"DebaC15");
CALL SP_Venta("I",null,"2022-11-20 02:20:54",6859.00,"KatTrev14");

CALL SP_Venta("I",null,"2022-11-21 10:30:11",543.00,"DebaC15");
CALL SP_Venta("I",null,"2022-11-21 05:30:54",318.00,"KatTrev14");
CALL SP_Venta("I",null,"2022-11-21 01:50:00",340.00,"DebaC15");

CALL SP_Venta("I",null,"2022-11-25 02:10:04",567.00,"Yess_Cav");



CALL SP_Venta("I",null,"2022-11-22 11:15:10",8035.00,"KatTrev14");

CALL SP_Venta("I",null,"2022-11-25 01:15:10",945.00,"Rob16");

CALL SP_Venta("I",null,"2022-11-25 01:15:10",367.00,"Ale_Go17");

CALL SP_Venta("I",null,"2022-11-23 12:10:42",2700.00,"DebaC15");

CALL SP_Venta("I",null,"2022-11-23 12:10:42",2700.00,"DebaC15");
CALL SP_Venta("I",null,"2022-11-25 01:15:10",945.00,"Rob16");

CALL SP_Venta("I",null,"2022-11-25 01:15:10",367.00,"Ale_Go17");

CALL SP_Venta("I",null,null,846.00,"Yess_Cav");
CALL SP_Venta("S",null,null,null,null); #---------MOSTRAR VENTAS
CALL SP_Venta("X",null,null,null,"Yess_Cav");
#-------------- SP_METODOPAGO -----------------#
SELECT*FROM MetodoPago;
CALL SP_MetodoPago("I",null,"Yessica Guadalupe Rosales Cavazos","1234561144357789",12,22,123,"Yess_Cav");

CALL SP_MetodoPago("S",null,null,null,null,null,null,null);
CALL SP_MetodoPago("X",null,null,null,null,null,null,"Alo_2");
#-------------- SP_VENTA_DETALLE -----------------#
SELECT*FROM venta_Detalle;
CALL SP_VentaDet("I",null,"2022-11-20 02:20:54",null,1,4,"Es un instrumento que me encanta tocar y ahora por fin lo pude comprar,YAMAHA es una buena marca",
                     4395,4395,35,"DebaC15","Mel78");
CALL SP_VentaDet("I",null,"2022-11-20 02:20:54",null,1,5,"Que bueno que encontre lo que buscaba, me siento muy feliz porque me hacia falta una laptop asi para la escuela.",
                     6859,6859,23,"KatTrev14","Guille1");
                     
CALL SP_VentaDet("I",null,"2022-11-21 10:30:11",null,2,3,"Considero que el labial es algo pegajoso y no tiene mucha duracion.",
                     123,246,51,"DebaC15","Vane1");
CALL SP_VentaDet("I",null,"2022-11-21 10:30:11",null,3,2,"Me encanta BISSU como maquillaje, solo considero que el color es algo fuerte en mi piel.",
                     99,297,53,"DebaC15","Vane1");
                     
CALL SP_VentaDet("I",null,"2022-11-21 05:30:54",null,1,5,"Me encantan los diferentes tonos que tiene,son mas de 80 sombras WOW!",
                     219,219,54,"KatTrev14","Mel78");
CALL SP_VentaDet("I",null,"2022-11-21 05:30:54",null,1,5,"Es una gran marca,me encanta BISSU mi favorito es este.",
                       99,99,53,"KatTrev14","Vane1");

CALL SP_VentaDet("I",null,"2022-11-25 02:10:04",null,2,5,"Es muy bonito el tono del color, me fascina.",
                     99,198,53,"Yess_Cav","Vane1");
CALL SP_VentaDet("I",null,"2022-11-25 02:10:04",null,3,5,"Me gusta mucho el color,un excelente producto.",
                     123,369,51,"Yess_Cav","Vane1");

CALL SP_VentaDet("I",null,"2022-11-21 01:50:00",null,1,4,"Excelente producto,de buena calidad,lo recomiendo mucho.",
                     340,340,9,"DebaC15","Vane1");


CALL SP_VentaDet("I",null,"2022-11-22 11:15:10",null,1,5,"Me encanta esta tecnologia,me parece ideal para mi, ya necesitaba un telefono como estos.",
                     6535,6535,25,"KatTrev14","Guille1");
CALL SP_VentaDet("I",null,"2022-11-22 11:15:10",null,1,5,"Ocupaba una tableta grafica para la escuela y creo que la marca WACOM es la mejor que hay",
                       1500,1500,21,"KatTrev14","Guille1");
                       
CALL SP_VentaDet("I",null,"2022-11-25 01:15:10",null,2,3,"No conozco muy bien esta marca de boligrafos,pero espero y me sirvan para poder realizar buenos bocetos.",
                     289,578,56,"Rob16","Guille1");
CALL SP_VentaDet("I",null,"2022-11-25 01:15:10",null,1,5,"Me gusta que en la promocion te incluyen 2 cuadernos,me parece estupendo!",
                       367,367,57,"Rob16","Guille1");
                       
CALL SP_VentaDet("I",null,"2022-11-25 01:15:10",null,1,4,"El diseño del cuaderno es lindo,ya quiero empezar a dibujar muchas cosas.",
                       367,367,57,"Ale_Go17","Guille1");
				
                       
CALL SP_VentaDet("I",null,null,null,null,null,null,null,null,null,"Ale_Go17",null);

CALL SP_VentaDet("I",null,null,null,1,4,"Me gusta mucho esto,buen labial",123,246,51,"Alo_2","Vane1");

CALL SP_VentaDet("I",null,null,null,2,5,"Me parece un album increible,me encanta ASHNIKKO",273,546,13,"Yess_Cav","EvanPet87");
CALL SP_VentaDet("U",null,null,null,null,null,null,null,null,51,null,null);

CALL SP_VentaDet("B",null,null,null,null,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_VentaDet("D",null,null,null,null,null,null,null,null);
DELETE FROM venta_Detalle WHERE ID_venta= 27;
CALL SP_VentaDet("S",null,null,null,null,null,null,null,null,1,null,null); #---------MOSTRAR VENTAS
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,null,"EvanPet87");
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,null,"Vane1"); #---------MOSTRAR VENTAS DETALLE POR VENDEDOR
CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,null,"Guille1"); #---------MOSTRAR VENTAS AGRUPADAS


CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,null,null,null);
CALL SP_VentaDet("U",null,null,null,null,null,null,null,null,null,3,null,null);

#------------------------------------------------------ CONSULTAS -  VENDEDOR   ----------------------------------------------------------------------#
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,"Vane1");
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,"Mel78");
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,"Guille1");
CALL SP_VentaDet("X",null,null,null,null,null,null,null,null,null,null,"EvanPet87");

CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,"Vane1");
CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,"Mel78");
CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,"Guille1");
CALL SP_VentaDet("Y",null,null,null,null,null,null,null,null,null,null,"EvanPet87");


CALL SP_VentaDet("A","Arte","2022-10-23","2022-11-28",null,null,null,null,null,null,null,"Vane1"); #---------CONSULTA
CALL SP_VentaDet("A","Tecnologia","2022-10-23","2022-11-20",null,null,null,null,null,null,null,"Guille1"); #---------CONSULTA
CALL SP_VentaDet("A","Instrumentos Musicales","2022-10-23","2022-11-25",null,null,null,null,null,null,null,"Mel78"); #---------CONSULTA
CALL SP_VentaDet("A","Musica","2022-10-23","2022-11-25",null,null,null,null,null,null,null,"EvanPet87"); #---------CONSULTA

CALL SP_VentaDet("B",null,"2022-10-23","2022-11-28",null,null,null,null,null,null,null,"Vane1"); #---------CONSULTA
CALL SP_VentaDet("B",null,"2022-10-23","2022-11-20",null,null,null,null,null,null,null,"Guille1"); #---------CONSULTA
CALL SP_VentaDet("B",null,"2022-10-23","2022-11-20",null,null,null,null,null,null,null,"Mel78"); #---------CONSULTA
CALL SP_VentaDet("B",null,"2022-10-23","2022-11-25",null,null,null,null,null,null,null,"EvanPet87"); #---------CONSULTA

CALL SP_VentaDet("B",null,"22-10-2022","20-11-2022",null,null,null,null,null,null,null,"EvanPet87"); #---------CONSULTA
CALL SP_VentaDet("C","Arte","2022-10-23","2022-11-25",null,null,null,null,null,null,null,"EvanPet87"); #---------CONSULTA
CALL SP_VentaDet("D",null,"2022-10-23","2022-11-25",null,null,null,null,null,null,null,"EvanPet87"); #---------CONSULTA

#------------------------------------------------------ CONSULTAS -  COMPRADOR   ----------------------------------------------------------------------#
CALL SP_VentaDet("E","Arte","2022-10-23","2022-11-25",null,null,null,null,null,null,"KatTrev14",null);
CALL SP_VentaDet("G",null,"2022-10-23","2022-11-22",null,null,null,null,null,null,"KatTrev14",null);

CALL SP_VentaDet("E",null,"22-10-2022","25-11-2022",null,null,null,null,null,null,"KatTrev14",null); #---------CONSULTA
CALL SP_VentaDet("F",null,null,null,null,null,null,null,null,null,"Yess_Cav",null); #---------CONSULTA
CALL SP_VentaDet("F",null,null,null,null,null,null,null,null,null,"KatTrev14",null);
CALL SP_VentaDet("U",null,null,null,null,null,null,null,null,3,null,null);

use TIENDA;

select *from Carrito;
select *from MetodoPago;
select *from Carrito_Detalle;
select *from venta;
delete from venta where ID_venta=2;
select *from venta_Detalle;
DELETE FROM Carrito_Detalle WHERE FK_Comprador = "Ale_Go17";
SELECT FK_Producto, ROUND(AVG(calificacion),0) ,AVG(calificacion)
FROM venta_Detalle GROUP BY FK_Producto;

SELECT FK_Producto,calificacion 
FROM venta_Detalle;

UPDATE venta_Detalle 
SET calificacion = 4,
    comentario = "Sirve muy bien para grabaciones profesionales."
WHERE ID_venta = 82;

UPDATE venta_Detalle 
SET calificacion = 4,
    comentario = "Sirve muy bien para grabaciones profesionales.";
    
UPDATE venta_Detalle
SET comentario = "Me gusta esto,buen producto, lo recomiendo"
WHERE ID_venta = 1;

CALL SP_CarritoDet('D',null,null,null,null,null,null,"");
SELECT *
FROM venta_Detalle A
WHERE FK_Comprador ="Ale_Go17" AND DATE_FORMAT(fecha,"%Y-%m-%d") = "2022-11-26" AND importe=13;

REPLACE INTO venta_Detalle(calificacion,comentario)  
VALUES(value_list); 

CALL SP_Venta("I",null,null,1072.00,"Ale_Go17");
INSERT INTO venta_Detalle(fecha,cantidad,precioVenta,importe,FK_Producto,FK_Comprador,FK_Vendedor)
SELECT now(),A.cantidad,P.precio,CalculaSubtotal(P.precio,A.Cantidad)"importe",A.FK_Producto,A.FK_Comprador,P.FK_Vendedor
FROM Carrito_Detalle A
JOIN Producto P
ON P.ID_Producto = A.FK_Producto
WHERE FK_Comprador = "Ale_Go17";

delete from venta where ID_venta=30;
DELETE FROM Carrito_Detalle WHERE FK_Comprador= "KatTrev14";


INSERT INTO venta(fecha,Total,FK_Comprador) VALUES ("2022-11-20 01:09:10",4395.00,"DebaC15");

INSERT INTO venta(fecha,Total,FK_Comprador) VALUES ("2022-11-20 02:20:54",6859.00,"KatTrev14");

INSERT INTO venta(fecha,Total,FK_Comprador) VALUES (now(),4649.00,"DebaC15");
INSERT INTO venta(fecha,Total,FK_Comprador) VALUES ("2022-11-20 01:09:10",1200.00,"KatTrev14");

INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES ("2022-11-20 01:09:10",   1,  2,    "Es buen producto,solo no me gusto que fuera un poco caro.",
1200.00,     1200.00,  5,     37,   "KatTrev14","EvanPet87");

INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),   1,  5,    "Excelente producto,de buena calidad,lo recomiendo mucho.",
340.00,     340.00,  1,     9,   "KatTrev14","Vane1");
INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),   2,   5,"Me encanta Ashnikko y mas este album,considero que este producto es de buena calidad",
273.00,     546.00,  1,     13,  "KatTrev14","EvanPet87");
INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),   1,   4,"Me encantan las canciones de JOJI y mas este album que me parece genial en verdad.",
799.00,     799.00,  1,     15,"KatTrev14","EvanPet87");

DELETE FROM Carrito_Detalle WHERE fecha="2022-11-23" AND FK_Comprador="KatTrev14";
DELETE FROM venta WHERE ID_venta = 4;

SELECT P.cantidad 
FROM Producto P
WHERE P.ID_Producto = 9 ;




INSERT INTO venta(fecha,Total,FK_Comprador) VALUES ("2022-11-20 01:09:10",1200.00,"KatTrev14");
INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),1,5,"Me encanta Melanie Martinez siempre la escucho a diario y pienso que es un excelente producto.",
        299.00,     299.00,    2,    3,      "DebaC15",    "Mel78");
INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),1,3,"Es buena marca pero no de muy buena calidad cuando la compre.",
        1500.00,     1500.00,  2,    21,      "DebaC15",    "Guille1");
        
INSERT INTO venta_Detalle(fecha,cantidad,calificacion,comentario,precioVenta,importe,FK_Venta,FK_Producto,FK_Comprador,FK_Vendedor) 
VALUES (now(),1,4,"Considero que es un buen producto,la marca Yamaha es muy buena,el teclado es bueno para mi para poder practicar.",
        4949.00,     4949.00,  3,    35,      "DebaC15",    "Mel78");
        
        
        
        
        

CALL SP_Venta("U",null,null,null,null,null,null,null,null);

CALL SP_Venta("B",null,null,null,null,null,null,null,null); # ------- BORRAR LOGICAMENTE
CALL SP_Venta("D",null,null,null,null,null,null,null,null);

CALL SP_Venta("S",null,null,null,null); #---------MOSTRAR VENTAS
