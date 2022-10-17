<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CREAR CATEGORIAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="Categoria.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>

</head>
<body>

<div class="container">
<div class="main-body">


<?php include('navbar.php') ?>

<?php include('carrito.php') ?>
          
          <div style="background-color:white; width:1100px; height: 400px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Categoria</h1>
 
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="cat" class="cat">Nombre de la Categoria:</label>
       <input type="text" id="nombrecat" name="nombrecat" style="width:300px; font-size:15px;" placeholder="Nombre"><br></br>
       <label for="descripcion" class="desc" >Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" style="width:200px; font-size:15px; width:600px;" placeholder="Descripcion corta"><br></br>
<br></br>

</div> 

<div style="margin-left:850px; margin-top:40px;">
<button type="button" onclick="alerta()" class="btn btn-success" style="width:150px; font-size:15px; margin-left:-80px;">Agregar Categoria</button>
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:120px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
        
</div>
</div>
<script src="Categoria.js"></script>

</body>
</html>