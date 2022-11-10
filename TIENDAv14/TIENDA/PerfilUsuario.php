<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>PERFIL DE USUARIO</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="Perfil.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
   
    <?php include('bootstrap.php') ?>
    
</head>
<body>


<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>


          <!-- PERFIL ACTUAL -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="IMG/Imagen2.jpg" alt="Vendedor" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Kenneth56</h4>
                      <p class="text-secondary mb-1" >Vendedor</p>
                      
  <select name="select" class="perfiles" style="font-size:13px; width:80px; text-align:center;">
  <option value="value1"  selected>Publico</option>
  <option value="value2" >Privado</option>
  </select>

                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <a href="MisListas.php" type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> Mis Listas
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16" style="color:red;">
                  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                  </svg>
                </a>

                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <a href="MisProductos.php" type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> Mis Productos
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16" style="color:green;">
                  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                  </svg>
                  </a>
                  </li>
                 
                </ul>
              </div>
            </div>


         

              <!-- INFORMACION DEL PERFIL -->  
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Nombre Completo</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Email</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                     kentv@hotmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Nombre de Usuario</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                    Kenneth56
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Fecha de Nacimiento</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                      12-03-1988
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Sexo</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                      Masculino
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Fecha de Ingreso</h5>
                    </div>
                    <div class="col-sm-9 text-secondary" style="font-size:15px;">
                      26-07-2022
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="EditarPerfil.php" id="editarinfo" target="__blank" style="width:300px; color:white;">Editar Perfil</a>
                    </div>
                  </div>
                </div>
              </div>

    <!-- CARDS -->         
              <div class="row gutters-sm">

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body" style="text-align:center;">
                      
    <img src="https://revistabyte.es/wp-content/uploads/2020/05/1-323x360.jpg.webp" class="card-img-top" alt="Imagen1" style="width:200px; height:200px;">
    <h5 class="card-title" style="font-size:20px">Control Remoto</h5>
    <p class="card-text">Escelente calidad de control remoto para realizar streams de la marca PANASONIC</p>
    <p style="font-size:15px">Precio: $800.00</p>
    <a href="#" class="btn btn-primary">Ver producto</a>
                    
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body" style="text-align:center;">
                      
  <img src="https://m.media-amazon.com/images/I/71bK3oKRCOL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen1" style="width:200px; height:200px;">
    <h5 class="card-title" style="font-size:20px">Samsung Galaxy S10e, 128GB, Prisma Negro</h5>
    <p class="card-text">Este producto tendrá una batería que supera el 80% de capacidad con respecto a una batería nueva.</p>
    <p style="font-size:15px">Precio: $3,500.00</p>
    <a href="#" class="btn btn-primary">Ver producto</a>
                    
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body" style="text-align:center;">
                      
  <img src="https://m.media-amazon.com/images/I/91rOoYtKIaL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen1" style="width:200px; height:200px;">
    <h5 class="card-title" style="font-size:20px">PRISMACOLOR</h5>
    <p class="card-text">Colores gruesos, resistentes a resistir el agrietamiento y desportilladuras. ideal para adulto libros para colorear</p>
    <p style="font-size:15px">Precio: $1,200.00</p>
    <a href="#" class="btn btn-primary">Ver producto</a>
                    
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body"  style="text-align:center;">
                      
                    <img src="https://m.media-amazon.com/images/I/512yL7crV9L._SL1000_.jpg" class="card-img-top" alt="Imagen1" style="width:200px; height:200px;">
    <h5 class="card-title" style="font-size:20px">Gucci Gucci Guilty Pour Femme de Gucci para mujer</h5>
    <p class="card-text">Notas de corazón de lila, contrastadas con notas rosas y violetas, y capas con aceite de geranio, lo que resulta en una mezcla matizada.</p>
    <p style="font-size:15px">Precio: $1,200.00</p>
    <a href="#" class="btn btn-primary">Ver producto</a>
                    
                    </div>
                  </div>
                </div>

              </div>



            </div>
          </div>
         </div>
        </div>
 
</body>
</html>