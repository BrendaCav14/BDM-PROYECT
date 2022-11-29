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
          <?php
          
          $id  = $_GET['id'];
include('./BACKEND/Connection.php');
      
        
$row= $pdo->prepare("CALL SP_Usuario('X', :id,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");
$row->bindParam(":id", $id);
$row->execute();
$res = $row->fetch(PDO::FETCH_ASSOC); //User data

          ?>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
              
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($res['Foto']) . '" alt="Vendedor" class="rounded-circle" width="150" height="150">'; ?>

                    <div class="mt-3">
                      <h1> <?php echo $res['ID_usuario'] ?>  </h1>
                      <h5 class="text-secondary mb-1" >  <?php echo $res['Rol'] ?> </h5>
                      <br>
                      <h3><?php echo $res['Cuenta'] ?></h3>

                    </div>
                  </div>
                </div>
              </div>


              <?php  if($res['Cuenta'] == "Publico"){ 
             echo "<div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                  <a href='ListaUsuario.php?id=".$res['ID_usuario']."&usu=".$_GET['usu']."' type='button' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> Mis Listas
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16' style='color:red;'>
                  <path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
                  </svg>
                </a>
                  </li>
                 
                </ul>
              </div>";
              } ?>


            </div>


   <?php  if($res['Cuenta'] == "Publico"){     

            // INFORMACION DEL PERFIL

        echo  "  <div class='col-md-8'>
              <div class='card mb-3'>
                <div class='card-body'>

                  <div class='row'>
                    <div class='col-sm-3'>
                      <h5 class='mb-0'>Nombre Completo</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                      ".$res['Nombre']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Email</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                        ".$res['email']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Nombre de Usuario</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$res['ID_usuario']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Fecha de Nacimiento</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$res['FN']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Genero</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$res['Genero']."
                    </div>
                  </div>
                  <hr>

                  <div class='row'>
                  <div class='col-sm-3'>
                      <h5 class='mb-0'>Fecha de Ingreso</h5>
                    </div>
                    <div class='col-sm-9 text-secondary' style='font-size:15px;'>
                    ".$res['FI']." 
                    </div>
                  </div>

                  <hr>

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
if($res["Rol"] == "Vendedor"){

  echo "
<div class='custom-column-content' style='text-align:center; background-color:black; color:white;'>
<h1>PRODUCTOS PUBLICADOS</h1>
</div>";
require("./BACKEND/Connection.php");

$id = $res["ID_usuario"];


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

else if($res["Rol"] == "Administrador"){

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
 
</body>
</html>