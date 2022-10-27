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
          
          <form method="post" style="background-color:white; width:1100px; height: 900px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Categoria</h1>
        <br></br>
        <hr style="border: 3px solid blue; border-radius: 5px;">
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
    
       <div style="margin-left:-40px; margin-top:-50px;">
       <label for="cat" class="cat"  style=" font-size:20px; margin-left:-80px; margin-top:20px;">Nombre:</label>
       <input type="text" id="nombrecat" name="nombrecat" class="form-control" style="width:500px; font-size:20px; margin-top:-30px; margin-left:10px;" placeholder="Escribe un nombre de Categoria">
       </div>

       

      <div style="margin-top:-80px;">
       <label for="descripcion" class="desc" style=" font-size:20px; margin-left:-150px; margin-top:80px;">Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" class="form-control" style="font-size:20px; width:900px; margin-top:-30px; margin-left:-25px;" placeholder="Descripcion corta...">
      </div>
      
      <div style="margin-left:50px; margin-top:-50px;">
       <label for="descripcion" class="desc" style=" font-size:20px; margin-left:-150px; margin-top:50px; ">Tu usuario:</label>
       <input type="text" id="vendedor" name="vendedor" class="form-control" style="font-size:20px; width:200px; margin-left:-40px; margin-top:-30px;" placeholder="Usuario">
      </div>
      
      

</div> 
<div style="margin-left:850px; margin-top:-40px;">
<input type="submit" name="cat" id="cat" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-150px;" value="Agregar Categoria">
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:120px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
<br></br>
<hr style="border: 3px solid blue; width:1090px; border-radius: 5px;">

<div class="col-lg-6">
    <table class="table table-hover table-responsive" style="margin-left:300px; margin-top:20px;" >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Usuario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="resultado" style="font-size:13px;">

      </tbody>
    </table>

</div>
</form>


        
</div>
</div>
<?php
// 

if(isset($_POST) && isset($_FILES) )
{
  if(isset($_POST['cat'])){

    $nombre = $_POST['nombrecat'];
    $desc = $_POST['descripcion'];
    $vendedor = $_POST['vendedor'];
    
        require("./BACKEND/Connection.php");


        $sql ="INSERT IGNORE INTO Categoria(nombre_Cat,descripcion,FK_vendedor) VALUES(:nom, :d, :vend)";

$query=  $pdo->prepare($sql);                      
$query->bindParam(":nom",$nombre,PDO::PARAM_STR,50);
$query->bindParam(":d",$desc,PDO::PARAM_STR,50);
$query->bindParam(":vend",$vendedor,PDO::PARAM_STR,15);

$query->execute();
$resultado = $query->execute();
if($resultado)
    {
        echo "<script> alert('CATEGORIA AGREGADA') </script>";
    
    }
    else{
        echo "<script> alert('ERROR AL REGISTRAR')</script>";
    }


    
  }

}
?>



<script src="cat.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>