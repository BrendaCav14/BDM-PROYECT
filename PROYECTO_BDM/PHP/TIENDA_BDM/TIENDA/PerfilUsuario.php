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


          <!-- PERFIL ACTUAL -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
              
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($data['Foto']) . '" alt="Vendedor" class="rounded-circle" width="150" height="150">'; ?>

                    <div class="mt-3">
                      <h1> <?php echo $data['ID_usuario'] ?>  </h1>
                      <h5 class="text-secondary mb-1" >  <?php echo $data['Rol'] ?> </h5>
                      <br>
                      <h3><?php echo $data['Cuenta'] ?></h3>


                    </div>
                  </div>
                </div>
              </div>


              <?php  if($data['Cuenta'] == "Publico"){ 
             echo "<div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                  <a href='MisListas.php' type='button' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> Mis Listas
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16' style='color:red;'>
                  <path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
                  </svg>
                </a>
                  </li>

                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                  <a href='MisProductos.php' type='button' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> Mis Productos
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket-fill' viewBox='0 0 16 16' style='color:green;'>
                  <path d='M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z'/>
                  </svg>
                  </a>
                  </li>
                 
                </ul>
              </div>";
              } ?>


            </div>


   <?php  if($data['Cuenta'] == "Publico"){     

            // INFORMACION DEL PERFIL

        echo  "  <div class='col-md-8'>
              <div class='card mb-3'>
                <div class='card-body'>

                  <div class='row'>
                    <div class='col-sm-3'>
                      <h5 class='mb-0'>Nombre Completo</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                      ".$data['Nombre']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Email</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                        ".$data['email']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Nombre de Usuario</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$data['ID_usuario']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Fecha de Nacimiento</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$data['FN']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Genero</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$data['Genero']."
                    </div>
                  </div>
                  <hr>

                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Fecha de Ingreso</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$data['FI']." 
                    </div>
                  </div>

                  <hr>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <a class='btn btn-info' href='EditarPerfil.php?usu=".$data['ID_usuario']."' id='editarinfo' style='width:300px; color:white;'>Editar Perfil</a>
                    </div>
                  </div>

                </div>
              </div>
              </div>";
}

else{

  echo "<h2 style='margin-left:400px; margin-top:-200px;'>El Perfil es Privado</h2>";

}

?> 
              
<div style='display: block; height: 500px; overflow-y: auto; overflow-x: hidden;'> 

<div class='row gutters-sm'> 
    <?php
if($data["Rol"] == "Vendedor"){

  echo "
<div class='custom-column-content' style='text-align:center; background-color:black; color:white;'>
<h1>PRODUCTOS PUBLICADOS</h1>
</div>";
require("./BACKEND/Connection.php");

$id = $_GET["usu"];


$consulta= $pdo->prepare("CALL SP_Producto('F',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,:usu);");
$consulta->bindParam(":usu", $id);
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $row){



echo "
<!-- CARDS --> 

<div class='col-sm-6 mb-3'>
<div class='card h-100'>
  <div class='card-body' style='text-align:center;'>

  <div class='custom-column-content' style='text-align:center;'>
<br>
<img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:200px; height:200px; max-height:400px;'>
<h5 class='card-title' style='font-size:20px; max-lenght:50px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1;'>   ".$row['nombre']." </h5>
<p class='card-text' style='color:green; font-size:15px;'>Disponibles: ".$row['cantidad']." </p>
<p style='font-size:15px'> Precio: $".$row['precio']." </p>

</div>

<div class='custom-column-footer' style='text-align:center;'>
<a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']."' class='btn btn-primary btn-lg'>Ver Producto</a>
</div>

  </div>
</div>
</div>
<br>


              ";
  }
}

else if($data["Rol"] == "Administrador"){

  echo "
<div class='custom-column-content' style='text-align:center; background-color:black; color:white;'>
<h1>PRODUCTOS AUTORIZADOS</h1>
</div>";

require("./BACKEND/Connection.php");


$consulta= $pdo->prepare("CALL SP_Producto('S',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");

$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $row){



echo "
<!-- CARDS --> 

<div class='col-sm-6 mb-3'>
<div class='card h-100'>
  <div class='card-body' style='text-align:center;'>

  <div class='custom-column-content' style='text-align:center;'>
<br>
<img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:200px; height:200px; max-height:400px;'>
<h5 class='card-title' style='font-size:20px; max-lenght:50px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1;'>   ".$row['nombre']." </h5>
<p class='card-text' style='color:green; font-size:15px;'>Disponibles: ".$row['cantidad']." </p>
<p style='font-size:15px'> Precio: $".$row['precio']." </p>

</div>

<div class='custom-column-footer' style='text-align:center;'>
<a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']."' class='btn btn-primary btn-lg'>Ver Producto</a>
</div>

  </div>
</div>
</div>
<br>


              ";
  }
}

?>
</div>
</div>




            </div>
          </div>
         </div>
        </div>

        <script src="carrito.js"></script>
 
</body>
</html>