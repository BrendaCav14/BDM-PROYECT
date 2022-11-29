USE TIENDA;


/* -------------------------------------------- USUARIOS -------------------------------------------------------*/

SELECT * FROM tienda.usuario;

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("brendacavazos14@outlook.es","brenda14","123","Brenda","Stefania","Cavazos","Contreras","C:\Users\BrendiShawol\Pictures\Hachiko.jpg","1998-07-14","Femenino","2022-09-25","Publico","Administrador");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("jacobocavazos@hotmail.com","jac07","jacobo","Jacobo","Alberto","Cavazos","Contreras","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen3.jpg","2002-12-07","Masculino","2022-09-25","Publico","Vendedor");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("alejandro_solis10@hotmail.com","alex12","alex","Alejandro","","Solis","Peña","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen2.jpg","1990-12-07","Masculino","2022-09-25","Privado","Comprador");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("karla.trev130@hotmail.com","KatTrev1","kat","Karla","Estefania","Treviño","Cruz","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1995-08-13","Femenino","2022-09-25","Publico","Comprador");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("melanie98@yahoo.com","Mel78","mel","Melanie","Alejandra","Martinez","Ruiz","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1990-02-12","Femenino","2022-03-12","Publico","Comprador");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("jenni60@outlook.es","Jenny2","jenny","Jennifer","Esmeralda","Torres","Almenares","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen1.jpg","1990-10-20","Femenino","2022-03-12","Privado","Vendedor");

INSERT INTO tienda.usuario(email,usuario,contraseña,nombre,nombre2,ApPat,ApMat,foto,FN,genero,FechaIngreso,Cuenta,Rol)
VALUES("rickpeña@hotmail.com","ricardo81","ric81","Ricardo","","Peña","Dolores","C:\xampp\htdocs\TIENDAv6\TIENDA\IMG\Imagen3.jpg","1990-06-10","Masculino","2022-04-10","Publico","Administrador");

update usuario
set nombre2 = "Jose"
where ID_usuario= 3;

SELECT usuario, Rol FROM usuario where Rol= "Administrador";
SELECT usuario, Rol FROM usuario where Rol= "Vendedor";
SELECT usuario, Rol FROM usuario where Rol= "Comprador";

/* -------------------------------------------- CATEGORIA -------------------------------------------------------*/
SELECT * FROM tienda.categoria;

INSERT INTO tienda.categoria(nombre,descripcion,FK_vendedor)
VALUES("Tecnologia","Computadoras,tablets,telefonos,etc...",2);

INSERT INTO tienda.categoria(nombre,descripcion,FK_vendedor)
VALUES("Arte","Arte y Manualidades o herramientas",2);

INSERT INTO tienda.categoria(nombre,descripcion,FK_vendedor)
VALUES("Videojuegos","consolas para videojuegos,juegos..",6);

INSERT INTO tienda.categoria(nombre,descripcion,FK_vendedor)
VALUES("Musica","Discos de Albums, singles...",6);

/* -------------------------------------------- PRODUCTO -------------------------------------------------------*/
select* from producto;

SELECT P.ID_Producto,U.Rol,U.ID_usuario,U.usuario,P.nombre,P.precio,P.venta,C.nombre FROM tienda.producto P
JOIN Usuario U
ON U.ID_usuario = P.FK_Vendedor
JOIN Categoria C
ON C.ID_Cat = P.FK_Categoria
WHERE U.Rol="Vendedor" AND P.venta="Vender"
ORDER BY ID_Producto ASC;

SELECT P.ID_Producto,U.Rol,U.ID_usuario,U.usuario,P.nombre,P.precio,P.venta,C.nombre FROM tienda.producto P
JOIN Usuario U
ON U.ID_usuario = P.FK_Vendedor
JOIN Categoria C
ON C.ID_Cat = P.FK_Categoria
WHERE U.Rol="Vendedor" AND P.venta="Cotizar"
ORDER BY ID_Producto ASC;


INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("K-12 ALBUM","Album de Melanie Martinez-Presentado por el preeminente distribuidor teatral global Abramorama, K-12 estará en más de 60 teatros en los Estados Unidos",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(1).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(2).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(3).jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\K-12(VIDEO).mp4",
       "Vender",30,465,13,2);

INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("SAMSUNG Galaxy A52","Galaxy A52 es un equipo más que asombroso, cuenta con una cámara trasera cuádruple de 64MP + 12MP + 5MP + 5MP y una cámara frontal de 32 MP para que captures esos momentos increíbles. Su pantalla de 6.5” FHD+ Super AMOLED Infinity-O Display de 90Hz simplemente te deslubrará con su fluidez, además de que te permitirá sumergirte en tus contenidos y disfrutar de una gran experiencia de juego. Su memoria RAM de 6 GB y ROM de 128 GB, junto con su asombrosa batería de 4,500 mAh serán más que suficiente para echar a volar tu creatividad.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tel1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tel2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tel3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tel(video).jpg",
	   "Vender",50,6835,10,2);
       
INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("Wacom CTL472 Tableta One","Una perfecta armonía creativa entre tu ordenador y tú. Esboza, dibuja y edita fotos con el lápiz: una experiencia sencillamente fabulosa. Más fácil sería imposible.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tableta1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tableta2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tableta3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\tableta(video).mp4",
	   "Vender",20,900,10,2);
       
INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("Complete Acrylic Paint Set","24 pigmentos ricos que ofrecen el mejor acabado para manualidades: la pintura acrílica de secado rápido se desliza como el terciopelo en tu superficie favorita. Lienzo, madera, poliestireno, yeso, terracota, cerámica, arcilla, sin límites para el arte hecho a mano.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\arte(video).mp4",
	   "Vender",40,649,11,6);

INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("Mario Kart 8 Deluxe","Gracias a Nintendo Switch, los aficionados pueden disfrutar de la versión definitiva de Mario Kart 8 donde quieran y cuando quieran, incluso en partidas multijugador local para hasta ocho pilotos. Los populares circuitos y personajes de la versión de Wii U están de vuelta, junto a los circuitos y personajes descargables, y además se unen a la parrilla personajes nuevos: Inkling chico e Inkling chica, de Splatoon; el Rey Boo; Huesitos y Bowsy.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\videojuego1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\videojuego2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\videojuego3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\videojuego(video).mp4",
	   "Cotizar",20,0,12,6);
       
INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,precio,FK_Categoria,FK_Vendedor)
VALUES("THE NEW ABNORMAL","La legendaria banda de rock estadounidense, The Strokes, lanza su tan esperado nuevo álbum titulado The New Abnormal, sexto álbum de estudio de la banda después de 7 años de ausencia, grabado en los estudios de Shangri-La en Malibú y con la colaboración del famoso productor Rick Rubin.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\strokes1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\strokes2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\strokes3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\strokes(video).mp4",
	   "Vender",40,249,13,6);
       
INSERT INTO tienda.producto(nombre,descripcion,imagen1,imagen2,imagen3,video,venta,cantidad,FK_Categoria,FK_Vendedor)
VALUES("Mortal Kombat 11","Continúe la saga épica a través de una nueva historia cinematográfica que lleva más de 25 años de elaboración.",
       "C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\mortal1.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\mortal2.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\mortal3.jpg","C:\xampp\htdocs\TIENDAv7\TIENDA\PRODUCTO\mortal(video).mp4",
	   "Cotizar",40,12,2);
 
 /* -------------------------------------------- AUTORIZAR PRODUCTO -------------------------------------------------------*/

SELECT A.ID_AutoProd,U.Rol,U.ID_usuario,U.usuario,P.nombre,P.precio,C.nombre,P.FK_Vendedor "Vendedor" FROM tienda.autorizaproducto A
JOIN Producto P
ON P.ID_Producto = A.FK_Producto
JOIN Usuario U
ON U.ID_usuario = A.FK_Admin
JOIN Categoria C
ON C.ID_Cat = P.FK_Categoria
WHERE U.Rol="Administrador"
ORDER BY ID_AutoProd ASC;

INSERT INTO autorizaproducto(FK_Produ,FK_Admin) VALUES(1,"Luis98");
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(101,1);
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(102,7);
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(103,7);
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(104,1);
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(105,1);
INSERT INTO tienda.autorizaproducto(FK_Producto,FK_Admin) VALUES(106,7);



 /* -------------------------------------------- LISTA -------------------------------------------------------*/
 SELECT*FROM Lista;
 SELECT L.ID_Lista,L.nombre,L.descripcion,L.imagen,L.estado,U.usuario,U.Rol FROM Lista L JOIN Usuario U ON U.ID_usuario = L.FK_Usuario
 WHERE U.Rol="Administrador" ORDER BY U.usuario ASC;
 
 SELECT L.ID_Lista,L.nombre,L.descripcion,L.imagen,L.estado,U.usuario,U.Rol FROM Lista L JOIN Usuario U ON U.ID_usuario = L.FK_Usuario
 WHERE U.Rol="Vendedor" ORDER BY U.usuario ASC;
 
 SELECT L.ID_Lista,L.nombre,L.descripcion,L.imagen,L.estado,U.usuario,U.Rol FROM Lista L JOIN Usuario U ON U.ID_usuario = L.FK_Usuario
 WHERE U.Rol="Comprador" ORDER BY U.usuario ASC;
 
 INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de Cumpleaños","Una lista para mi cumpleaños numero 24 que quiero recibir",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",1);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de la Boda","Los regalos para la boda,sera el dia 12 de Diciembre en San Pedro",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA2.jpg","Publica",6);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Mis gustos","Productos que me gustaria tener",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA3.jpg","Privada",3);                          
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				  VALUES("Regalos de Cumpleaños","Mi cumpleaños numero 30",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",6);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de Cumpleaños","mi cumpleaños numero 20",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",3);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de Cumpleaños","mi cumpleaños numero 20",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",5);                          
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de la Boda","Los regalos para la boda,sera el dia 12 de Diciembre en San Pedro",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA2.jpg","Privada",1);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de Cumpleaños","mi cumpleaños numero 20",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",4);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de la Boda","Regalos para la boda",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA2.jpg","Privada",3);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de Cumpleaños","mi cumpleaños numero 20",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA1.jpg","Publica",7);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de la Boda","Regalos para la boda",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA2.jpg","Privada",2);
INSERT INTO tienda.lista(nombre,descripcion,imagen,estado,FK_Usuario)
				   VALUES("Regalos de la Boda","Regalos para la boda",
                          "C:\Users\BrendiShawol\Pictures\LISTA\LISTA2.jpg","Privada",7);
                          
                          
                          
/* -------------------------------------------- LISTA-PRODUCTOS -------------------------------------------------------*/
SELECT A.ID_ListaProducto,L.ID_Lista,L.nombre,P.nombre,P.precio,P.venta,C.nombre,P.FK_Vendedor"Vendedor Producto",U.usuario "Usuario Lista" FROM tienda.lista_productos A
JOIN Producto P ON P.ID_Producto = A.FK_producto
JOIN Lista L ON L.ID_Lista = A.FK_Lista
JOIN Categoria C ON C.ID_Cat = P.FK_Categoria
JOIN Usuario U ON U.ID_usuario = L.FK_usuario
WHERE U.Rol="Administrador" AND P.venta="Vender" ORDER BY ID_Lista;

SELECT A.ID_ListaProducto,L.ID_Lista,L.nombre,P.nombre,P.precio,P.venta,C.nombre,P.FK_Vendedor"Vendedor Producto",U.usuario "Usuario Lista" FROM tienda.lista_productos A
JOIN Producto P ON P.ID_Producto = A.FK_producto
JOIN Lista L ON L.ID_Lista = A.FK_Lista
JOIN Categoria C ON C.ID_Cat = P.FK_Categoria
JOIN Usuario U ON U.ID_usuario = L.FK_usuario
WHERE U.Rol="Vendedor" AND P.venta="Vender" ORDER BY ID_Lista;

SELECT A.ID_ListaProducto,L.ID_Lista,L.nombre,P.nombre,P.precio,P.venta,C.nombre,P.FK_Vendedor"Vendedor Producto",U.usuario "Usuario Lista" FROM tienda.lista_productos A
JOIN Producto P ON P.ID_Producto = A.FK_producto
JOIN Lista L ON L.ID_Lista = A.FK_Lista
JOIN Categoria C ON C.ID_Cat = P.FK_Categoria
JOIN Usuario U ON U.ID_usuario = L.FK_usuario
WHERE U.Rol="Comprador" AND P.venta="Vender" ORDER BY ID_Lista;

 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(100,1000);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(102,1000);
 
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(100,1001);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(101,1001);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(102,1001);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(103,1001);
 
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(100,1002);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(101,1002);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(102,1002);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(103,1002);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(105,1002);
 
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(101,1003);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(102,1003);
 INSERT INTO tienda.Lista_Productos(FK_producto,FK_Lista) VALUES(100,1003);
 
 /* -------------------------------------------- CARRITO -------------------------------------------------------*/
