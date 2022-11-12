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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <?php include('bootstrap.php') ?>



</head>

<body>

<div class="container">
<div class="main-body">


<?php include('navbar.php') ?>

<?php include('carrito.php') ?>
          
          <form method="post"  name="frm" id="frm" style="background-color:white; width:1100px; height: 900px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Categoria</h1>
        <br></br>
        <hr style="border: 3px solid blue; border-radius: 5px;">
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <input type="hidden" name="idcat" id="idcat" value=""> 
       <div style="margin-left:-40px; margin-top:-50px;">
       <label for="cat" class="cat"  style=" font-size:20px; margin-left:-80px; margin-top:20px;">Nombre:</label>
       <input type="text" id="nombrecat" name="nombrecat" class="form-control" style="width:500px; height:30px; font-size:20px; margin-top:-30px; margin-left:10px;" placeholder="Escribe un nombre de Categoria" autocomplete="off">
       </div> 
       <br>

      <div style="margin-top:-80px;">
       <label for="descripcion" class="desc" style=" font-size:20px; margin-left:-150px; margin-top:80px;">Descripcion:</label>
       <input type="text" id="descripcion"  maxlength="1000" name="descripcion" class="form-control" style="font-size:20px; height:30px; width:900px; margin-top:-30px; margin-left:-25px;" placeholder="Descripcion corta..." autocomplete="off">

    </div>
      <br>
      <div style="margin-left:50px; margin-top:-50px;">
       <label for="vendedor" class="desc" style=" font-size:20px; margin-left:-150px; margin-top:50px; ">Tu usuario:</label>
       <input type="text" id="vendedor" name="vendedor" class="form-control" style="font-size:20px; width:200px; height:30px; margin-left:-40px; margin-top:-30px;" placeholder="Usuario" autocomplete="off">
      </div>
      
      
</div> 
<div style="margin-left:850px; margin-top:40px;">
<input type="submit" name="cat" id="cat" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-150px;" value="Agregar Categoria">
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:120px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
<br></br>
<hr style="border: 3px solid blue; width:1090px; border-radius: 5px;">
<br>
<h1 style="margin-left:400px; font-size:30px;  color:#D07118;">Categorias Registradas</h1>
<div class="col-lg-9">
    <table class="table table-hover table-responsive" style="margin-left:180px; margin-top:20px;" >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          
          <th style="width:100px;">Nombre</th>
          <th style="width:530px;">Descripcion</th>
          <th style="width:70px;">Usuario</th>
          <th style="width:150px;">Acciones</th>
        </tr>
      </thead>
      <tbody id="resultado" style="font-size:13px; display: block; height: 300px; overflow-y: auto;  overflow-x: hidden;">

      </tbody>
    </table>

</div>
</form>


        
</div>
</div>


<script>

cat.addEventListener("click", () =>{
    
    var nom = document.getElementById("nombrecat").value; 
    var desc = document.getElementById("descripcion").value; 
    var ven = document.getElementById("vendedor").value; 
    

    if((nom == "") || (desc == "") || (ven == "")){

        Swal.fire({
            icon: 'error',
            title: 'Campos vacios!',
            text: 'Porfavor llena todos los campos',
            timer: 5000 // es ms (mili-segundos)
          })
          return false;


          
    }

  

})


</script>



<script src="categorias.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// 
  if(isset($_POST['cat'])){

    $nombre = $_POST['nombrecat'];
    $desc = $_POST['descripcion'];
    $vendedor = $_POST['vendedor'];
    
        require("./BACKEND/Connection.php");

        if(!empty($nombre) && !empty($desc) && !empty($vendedor)){

          if(empty($_POST['idcat'])){

        $sql = "CALL SP_Categoria('I', null, :nom, :d, :vend);";
        // $sql ="INSERT IGNORE INTO Categoria(nombre_Cat,descripcion,FK_vendedor) VALUES(:nom, :d, :vend)";

$query=  $pdo->prepare($sql);                      
$query->bindParam(":nom",$nombre,PDO::PARAM_STR,50);
$query->bindParam(":d",$desc,PDO::PARAM_STR,50);
$query->bindParam(":vend",$vendedor,PDO::PARAM_STR,15);

$query->execute();
$resultado = $query->execute(); 

   
        echo "<script> 
        Swal.fire(
        'Categoria Agregada!',
        'Bien hecho .',
        'success'
    ) </script>";
  
  }
  else{
    $id = $_POST['idcat'];

    $sql = "CALL SP_Categoria('U', :id, :nom, :d, :vend);";
    // $sql ="UPDATE Categoria SET nombre_Cat = :nom, descripcion = :d, FK_vendedor = :vend;";

$query=  $pdo->prepare($sql); 

$query->bindParam(":id",$id);                     
$query->bindParam(":nom",$nombre,PDO::PARAM_STR,50);
$query->bindParam(":d",$desc,PDO::PARAM_STR,50);
$query->bindParam(":vend",$vendedor,PDO::PARAM_STR,15);

$query->execute();
$resultado = $query->execute(); 


    echo "<script> 
    Swal.fire(
    'Categoria Actualizada!',
    'Se realizaron los cambios necesarios',
    'success'
) </script>";

}

  }
}

?>

</body>
</html>