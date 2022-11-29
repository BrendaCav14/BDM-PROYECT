<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>PRODUCTO</title>"?>
    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="Producto.css">
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">



    <?php include('bootstrap.php') ?>
 
</head>
<body>

<?php include('Chat.php') ?>

<div class="container">
<div class="main-body">


<?php include('navbar2.php') ?>



<!--------------------------------------------------------------------------------------------------------->
<?php 
         
         include('./BACKEND/Connection.php');
         $id = $_GET["id"];
         
         $stmt= $pdo->prepare("CALL SP_Producto('X', :id,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");

         $stmt->bindParam(":id", $id,PDO::PARAM_INT);
         $stmt->execute();
         $data = $stmt->fetch(PDO::FETCH_ASSOC); 
       
     ?>

       <div style="background-color:white; width:800px; height: 1000px; margin-left:5px; text-align:center;">
       <br>
     
      <input type="hidden" id="id" name="id" value="<?php echo $data["ID_Producto"];  ?>">
      
      <h1 class='titulos' style='padding: 10px 50px 20px; font-size:40px;'> <?php echo $data['nombre'] ?> </h1>


     <div class="container" style="margin-top:10px; width:800px; height:500px; align:center;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">

<div class="item active" style="width:800px; height:400px;">
<?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['imagen1']) . "' alt='imagen1'  style=' width:auto; height:400px; margin: auto;' >" ?>

</div>

<div class="item" style="width:800px;height:400px;">
<?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['imagen2']) . "' alt='imagen2'  style=' width:auto; height:400px; margin: auto;' >" ?>

</div>

<div class="item" style="width:800px; height:400px;">
<?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['imagen3']) . "' alt='imagen3'  style=' width:auto; height:400px; margin: auto;' >" ?>

</div>

<div class="item" style="width:800px; height:400px;">
<?php echo "<video src='data:video/mp4;base64," . base64_encode($data['video']) . "' alt='video'  style=' width:500px; height:400px; margin: auto;' controls ></video>" ?>

</div>

</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>

</div>
</div>



      <br></br>
      <div style="margin-top:-100px;">
      <h2>Vendedor:  <?php echo $data['FK_Vendedor'] ?>
      <?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['foto']) . "' alt='imagen3' class='rounded-circle'  style=' width:50; height:50px; ' >" ?>
      </h2>
      <p style="font-size:20px; padding: 10px 50px 20px;"><?php echo $data['descripcion'] ?></p>
      </div>
</div>


<div style="background-color:white; width:300px; height: 1000px; margin-left:810px; margin-top:-1000px; text-align:center;">
         <br></br>
         <h2>Precio en Venta:</h2>
         <h1>$ <?php echo $data['precio']  ?></h1>
         <br>
         <a type="button" data-toggle="modales" data-target="#myModales"  class="btn btn-primary" style="width:150px; font-size:15px; background-color: #367c66; color:white;">
         Cotizar Producto
         </a>

         <br></br>
         <h4>Categoria:</h4>
         <h4><?php echo $data['nombre_Cat']  ?></h4>
         <br></br>
         <h4>Articulos Disponibles: <?php echo $data['cantidad']  ?></h4>
         
         <br>
         <h4 >Cantidad</h4>
         <input type='number' min='1' max='10' value='1' style='text-align: center; font-size:15px;'>
        
         <br>
         <h4 style="margin-top:50px;">Entrega GRATIS en todo Mexico</h4>
         <br>
         <button type="button" class="btn btn-primary" style="width:250px; font-size:15px; background-color:#F2933A">
         Agregar a la WishList
         </button>
         <br>
         <input type="submit" name="agregacar" id="agregacar" class="btn btn-primary" style="width:250px; margin-top:20px; font-size:15px; background-color:#D07118" value="Agregar al Carrito">
         
         </input>
       </div>

       <input type="hidden" name="" id="" value="<?php echo $data['FK_Categoria'] ?>">

         <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; margin-top:10px">
         <br></br>
         <h1 style="margin-left:100px; color:#D07118; font-weight: bolder; font-size:30px;">Articulos Similares</h1>
         <br></br>
         <div style="display: block; width:1000px; height:400px; overflow-x: auto; overflow-y: hidden; margin-left:50px;">
 <!-- CARDS -->         
 <div class="container">
 <div class="row">
  
 <?php 

include('./BACKEND/Connection.php');
$id = $data['FK_Categoria'];

$stmt= $pdo->prepare("CALL SP_Producto('W', :id,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,:id,null);");

$stmt->bindParam(":id", $id,PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC); 

foreach($data as $row){
 echo "<div class='col-sm-6 col-md-3 border' style=' border-radius: 5% ;border-color:black; border: 5px solid transparent; padding-left:3px; height:260px; background-color:#E7F3FF;'>
     <div class='custom-column'>
       
       <div class='custom-column-content' style='text-align:center; '>
       <br>
       <img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:80px; height:80px; max-height:100px;'>
       <h5 class='card-title' style='font-size:20px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>   ".$row['nombre']."  </h5>
       <p class='card-text' style='color:green; font-size:15px;'>Disponibles: ".$row['cantidad']."</p>
   <p style='font-size:15px'> Precio: $".$row['precio']." </p>
       
         </div>

       <div class='custom-column-footer' style='text-align:center;'>
       <a href='Producto.php?id=".$row['ID_Producto']."' class='btn btn-primary btn-lg'>Ver Producto</a>
       </div>

     </div>
   </div>";
}

?>

</div>
 </div>
</div>


  
</div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// 
  if(isset($_POST['agregacar'])){

    $nombre = $_POST['nombrecat'];
    $desc = $_POST['descripcion'];
    $vendedor = $_POST['vendedor'];
    
        require("./BACKEND/Connection.php");



    $id = $_POST['idcat'];
    $nombre = $_POST['nombrecat'];
    $desc = $_POST['descripcion'];
    $vendedor = $_POST['vendedor'];

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




?>



</body>
</html>