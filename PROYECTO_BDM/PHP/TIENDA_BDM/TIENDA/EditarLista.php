<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>EDITAR PRODUCTO</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="AgregaProducto.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    
    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

   

          <div style="background-color:white; width:1100px; height: 400px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:450px;">Editar Lista</h1>
 
       <br></br>
       <form method="post" enctype="multipart/form-data" id="formProd" name="formProd" >
       <div class="InfoProducto" style=" margin-left:100px;">

       <div id="prod" name="prod" style="margin-top:-50px;">

       <?php 
         
         include('./BACKEND/Connection.php');
         $id = $_GET["id"];
         
         $stmt= $pdo->prepare("CALL SP_Lista('M', :id,null,null,null,null,null);");

         $stmt->bindParam(":id", $id);
         $stmt->execute();
         $resultado = $stmt->fetch(PDO::FETCH_ASSOC); 
       
     ?>


       <br></br>

<input type="hidden" name="id" id="id" value="<?php echo $resultado["Lista"];  ?>"> 
<input type="hidden" name="usuario" id="usuario" value="<?php echo $resultado["FK_Usuario"];  ?>"> 
<br></br>
<label class="producto" style="font-size:20px;font-weight: bold; font-family:'Trirong', sans-serif; margin-left:-50px;">Nombre Lista:</label>
<input type='text' id='lista' name='lista' class='form-control' style='width:400px; height:30px; font-size:20px; margin-top:-30px; margin-left:100px;' placeholder="Nombre del Producto" autocomplete='off' value="<?php echo $resultado["NombreLista"];  ?>">
 
       </div>
       <br>
       <label for="descripcion" class="descripcion" style="font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;  margin-left:-50px;">Descripcion:</label>
       <input type="text" id="desc" name="desc" class="form-control" style="width:500px; height:30px; font-size:20px; margin-top:-30px; margin-left:100px;" placeholder="Descripcion corta" autocomplete="off" value="<?php echo $resultado["Descripcion"];  ?>">
       <br>
     

          <div style="margin-left:800px; margin-top:-100px;">
          <label for="venta" class="venta" style="font-size:20px; margin-left:-130px; font-weight: bold; font-family:'Trirong', sans-serif;">Estado:</label>
          <input type="text" id="estado" name="estado" class="form-control" style="width:150px; height:30px; font-size:20px; margin-left:-50px; margin-top:-35px;" autocomplete="off" value="<?php echo $resultado["Estado"];  ?>"><br></br>


       
        </div>



    </div>
      
 <div style="margin-left:50px; margin-top:50px;">
 <label style="font-size:15px;">Imagen</label>
 <input type="file" class="form-control-file" name="foto1" id="foto1" accept=".png, .jpg, .jpeg" style="margin-top:20px; width:400px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ">

   </div>



</div> 

<div style="margin-left:850px; margin-top:-100px;">
<input type="submit" name="editalista" id="editalista" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-100px;" value="Editar Lista">
<a href="MisListas.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Regresar</a>
</div>
        
</div>
</div>


</form>
        </div>
        </div>
        
<script src="editar-lista.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php  
  if(isset($_POST['editalista'])){
    

    $id = $_POST['id'];
    $nombrelista = $_POST['lista'];
    $desc = $_POST['desc'];
    $estado = $_POST['estado'];
   
    $usu = $_POST['usuario'];

        $tipoArchivo=$_FILES['foto1']['type'];
        $nombreArchivo=$_FILES['foto1']['name'];
        $tamArchivo=$_FILES['foto1']['size'];
        $imagenSubida=fopen($_FILES['foto1']['tmp_name'],'r');
        $binarioImagen=fread($imagenSubida,$tamArchivo);

        
        if(!empty($_FILES) && !empty($imagenSubida) ){

        if(!empty($nombrelista) && !empty($desc) && !empty($estado) && !empty($_FILES) ){
         
        //  print_r($_POST);
       
          require("./BACKEND/Connection.php");

        $sql = "CALL SP_Lista('U', :id, :nom, :d, :img, :e, :usu);";

$query=  $pdo->prepare($sql); 

$query->bindParam(":id",$id);                     
$query->bindParam(":nom",$nombrelista);
$query->bindParam(":d",$desc);

$query->bindParam(":img",$binarioImagen);

$query->bindParam(":e",$estado);

$query->bindParam(":usu",$usu);



$query->execute();
$resultado = $query->execute(); 

if($resultado){
    echo "<script> 
    Swal.fire(
    'Producto Actualizado!',
    'Se realizaron los cambios necesarios',
    'success'
) </script>";
}
else{
    echo "<script>  Swal.fire({
        icon: 'error',
        title: 'ERROR BD',
        text: 'Porfavor vuelve a intentar',
        timer: 5000 // es ms (mili-segundos)
      }) </script>";


}
  }
}
  else{
    echo "<script>  Swal.fire({
      icon: 'error',
      title: 'INGRESE FOTOS',
      text: 'Porfavor llene todos los campos',
      timer: 5000 // es ms (mili-segundos)
    }) </script>";

  }

}



?>


</body>
</html>