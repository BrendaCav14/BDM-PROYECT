<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>MIS PRODUCTOS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>

          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:350px;">Mis Productos Agregados</h1>

 <br></br>

 
  <!-- CARDS -->         
  <div class="container">
  <div class="row">


    <div class="col-sm-24 col-md-9" style="border-radius: 5% ; height:260px; width:100% background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="margin-left:300px;">
        <br>
        <img src="https://m.media-amazon.com/images/I/71i2HikoGNL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen1" style="width:90px; height:90px;">
        <h5 class="card-title" style="font-size:20px">Marcadores-Crayola</h5>
    <p class="card-text">10 unidades. Marcadores trazo ancho originales, clásicos, 1, Variados</p>
    <p style="font-size:15px">Precio: $400.00</p>
    <div style="margin-left:400px; margin-top:-100px; color:white; font-size:30px; width:100px;">
    <a href="EditarProducto.php" class="btn btn-primary btn btn-light" style="background-color:#e4dcdc; color:black;">Editar Producto</a>
    <a class="btn btn-primary btn-danger">Eliminar Producto</a>
          </div>
          <a class="btn btn-primary btn-primary" style="color:white; margin-left:500px;">Ver Producto</a>
        </div>
   
      </div>
    </div>
<hr></hr>

<div class="col-sm-24 col-md-9" style="border-radius: 5% ; height:260px; width:100% background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="margin-left:300px;">
        <br>
        <img src="https://m.media-amazon.com/images/I/81FS5fZNY4L._AC_SL1500_.jpg" class="card-img-top" alt="Imagen1" style="width:90px; height:90px;">
    <h5 class="card-title" style="font-size:20px">Caliart-pintura acrílica</h5>
    <p class="card-text">12 pinceles, 24 colores (2.0 fl oz, 2 onzas), pinturas artísticas para artistas, niños, estudiantes</p>
    <p style="font-size:15px">Precio: $480.00</p>
        

    <div style="margin-left:400px; margin-top:-100px; color:white; font-size:30px;  width:100px;">
    <a  href="EditarProducto.php" class="btn btn-primary btn btn-light" style="background-color:#e4dcdc; color:black;">Editar Producto</a>
    <a class="btn btn-primary btn-danger">Eliminar Producto</a>
          </div>
          <a class="btn btn-primary btn-primary" style="color:white; margin-left:500px;">Ver Producto</a>

        </div>
   
      </div>
    </div>
    <hr></hr>

    </div>
</div>
        
          </div>

</body>
</html>