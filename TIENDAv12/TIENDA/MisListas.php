<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>MIS LISTAS</title>"?>

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
          
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:400px;">Mis Listas Creadas</h1>

 <br></br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row">


    <div class="col-sm-24 col-md-9" style="border-radius: 5% ; height:260px; width:100% background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="margin-left:300px;">
        <br>
        <img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740" class="card-img-top" alt="Imagen1" style="width:90px; height:90px;">
    <h5 class="card-title" style="font-size:20px">Lista de Regalos</h5>
    <p class="card-text">Lista para mi cumpleaños</p>
    <select name="select" class="opciones" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Publico</option>
          <option value="value2" >Privado</option>
          </select>
    <div style="margin-left:400px; margin-top:-100px; color:white; font-size:30px; width:100px;">
    <a href="ProductosLista.php" class="btn btn-primary btn-success">Agregar Productos</a>
    <a class="btn btn-primary btn btn-light" style="background-color:#e4dcdc; color:black;">Editar Lista</a>
    <a class="btn btn-primary btn-danger">Eliminar Lista</a>
          </div>
          <a class="btn btn-primary btn-primary" href="ProductosLista.php" style="color:white; margin-left:500px;">Ver Productos de la lista</a>
        </div>
   
      </div>
    </div>
<hr></hr>

<div class="col-sm-24 col-md-9" style="border-radius: 5% ; height:260px; width:100% background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="margin-left:300px;">
        <br>
        <img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740" class="card-img-top" alt="Imagen1" style="width:90px; height:90px;">
    <h5 class="card-title" style="font-size:20px">Boda</h5>
    <p class="card-text">Lista de regalos para la boda</p>
    <select name="select" class="opciones" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Publico</option>
          <option value="value2" >Privado</option>
          </select>
    <div style="margin-left:400px; margin-top:-100px; color:white; font-size:30px;  width:100px;">
    <a class="btn btn-primary btn-success">Agregar Productos</a>
    <a class="btn btn-primary btn btn-light" style="background-color:#e4dcdc; color:black;">Editar Lista</a>
    <a class="btn btn-primary btn-danger">Eliminar Lista</a>
          </div>
          <a class="btn btn-primary btn-primary" href="ProductosLista.php" style="color:white; margin-left:500px;">Ver Productos de la lista</a>

        </div>
   
      </div>
    </div>
    <hr></hr>


</div>
</div>
        


</body>
</hmtl>