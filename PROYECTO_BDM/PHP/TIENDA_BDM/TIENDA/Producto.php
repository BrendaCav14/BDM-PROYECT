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


<div class="container">
<div class="main-body">


<?php include('navbar.php') ?>


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
       <h2 id="vendedor" name="vendedor">Vendedor:  <?php echo $data['FK_Vendedor'] ?>
       <?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['foto']) . "' alt='imagen3' class='rounded-circle'  style=' width:50; height:50px; ' >" ?>
       </h2>
       <p style="font-size:20px; padding: 10px 50px 20px;"><?php echo $data['descripcion'] ?></p>
       </div>
</div>

<form method="post">
<div style="background-color:white; width:300px; height: 1000px; margin-left:808px; margin-top:-1000px; text-align:center;">

<input type="hidden" id="idprod" name="idprod" value="<?php echo $data["ID_Producto"];  ?>">
<input type="hidden" id="idcar" name="idcar" value="<?php echo $resultado["ID_Carrito"];  ?>">
<input type="hidden" id="vendedor" name="vendedor" value="<?php echo $data['FK_Vendedor'] ?> ">
<input type="hidden" id="comprador" name="comprador" value="<?php echo $_GET["usu"] ?> ">
<input type="hidden" id="precio" name="precio" value="<?php echo $data['precio'] ?> ">
<input type="hidden" id="cantprod" name="cantprod" value="<?php echo $data['cantidad'] ?> ">

          <br></br>
          <h2>Precio en Venta:</h2>
          <h1 id="precio" name="precio" style="font-size:30px;">$ <?php echo $data['precio']  ?></h1>
          <br>

          <?php
            include('./BACKEND/Connection.php');
            $usu = $_GET["usu"];
            
            $stmt= $pdo->prepare("CALL SP_Usuario('G',:usu,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");
  
            $stmt->bindParam(":usu", $usu);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC); 
            if($row){
          if($data['venta'] == "Cotizar" ){
          echo "<input type='submit' id='cotizar' name='cotizar' class='btn btn-primary' style='width:150px; font-size:15px; background-color: #367c66; color:white;' value='Cotizar Producto'>";
          }

        }
          ?>

          <br></br>
          <h3>Categoria:</h3>
          <h3><?php echo $data['nombre_Cat']  ?></h3>
          <br></br>

          <?php 
          if($data['cantidad'] == 0){

            echo "<h3 style='color:red;'>Producto Agotado</h3>";

          }
          else{
            echo "<h3>Articulos Disponibles: ".$data['cantidad']."</h3>";
          }

include('./BACKEND/Connection.php');
$id = $data["ID_Producto"];

$prom= $pdo->prepare("CALL SP_VentaDet('S',null,null,null,null,null,null,null,null,:id,null,null);");

$prom->bindParam(":id", $id);
$prom->execute();
$Calificacion = $prom->fetch(PDO::FETCH_ASSOC);
if($Calificacion){
if($Calificacion['promedio'] == 5){
  echo"  <h1 style='color:yellow; font-size:30px;'>★★★★★</h1>";
}

if($Calificacion['promedio'] == 4){
  echo"  <h1 style='color:yellow; font-size:30px;'>★★★★</h1>";
}
if($Calificacion['promedio'] == 3){
  echo"  <h1 style='color:yellow; font-size:30px;'>★★★</h1>";
}
if($Calificacion['promedio'] == 2){
  echo"  <h1 style='color:yellow; font-size:30px;'>★★</h1>";
}
if($Calificacion['promedio'] == 1){
  echo"  <h1 style='color:yellow; font-size:30px;'>★</h1>";
}
}



          ?>
      
          
          <br>
          
         <br>
         <h3 >Cantidad
         <select name="cant" id="cant" class="perfiles" style="font-size:20px; width:50px; margin-left:30px;">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
          
          </select></h3>
         <br>
       <?php print_r($_POST) ?>
          <br>
          <h4 style="margin-top:50px;">Entrega GRATIS en todo Mexico</h4>
          <br>
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter2' style="width:250px; font-size:15px; background-color:#F2933A" >Agregar a la WishList</button>
          <br>
          <?php
if($row){
          if($data['venta'] == "Vender" && $data['cantidad'] != 0){
            
            echo "
            <input type='submit' name='agregacar' id='agregacar' class='btn btn-primary' 
            style='width:250px; margin-top:20px; font-size:15px; background-color:#D07118' value='Agregar al Carrito'>";

          }
          else{

            if($data['venta'] == "Cotizar" && $data['cantidad'] != 0){
include('./BACKEND/Connection.php');
$id = $_GET["usu"];
$producto = $data["ID_Producto"];

$stmt= $pdo->prepare("CALL SP_CotizaProd('S',null,null,null,null,:prod,null,null,:id);");
$stmt->bindParam(":prod", $producto);
$stmt->bindParam(":id", $id);

$stmt->execute();
$cotizar = $stmt->fetch(PDO::FETCH_ASSOC); 

if($cotizar){
            echo "
            <br>
         
            <input type='hidden' id='idprodCot' name='idprodCot' value=".$cotizar["FK_Product"].">
            <input type='hidden' id='idcomCot' name='idcomCot' value=".$cotizar["Comprador"].">
            <h1>Precio Cotizado en $".$cotizar['Precio']."</h1>
            <input type='submit' name='agregaCarDet' id='agregaCarDet' class='btn btn-primary' 
            style='width:250px; margin-top:10px; font-size:15px; background-color:#D07118' value='Agregar al Carrito'>
           ";
}
else{
  echo "<br><br><h4>NO HAY COTIZACION</h4>";
}      
          }
        }
      }
          ?>          
          
        </div>
</form>




        <input type="hidden" name="" id="" value="<?php echo $data['FK_Categoria'] ?>">

          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; margin-top:2px">
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

  if($row['cantidad'] <= 0){
  echo "<div class='col-sm-6 col-md-3 border' style=' border-radius: 5% ;border-color:black; border: 5px solid transparent; padding-left:3px; height:260px; background-color:#E7F3FF;'>
      <div class='custom-column'>
        
        <div class='custom-column-content' style='text-align:center; '>
        <br>
        <img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:80px; height:80px; max-height:100px;'>
        <h5 class='card-title' style='font-size:20px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>   ".$row['nombre']."  </h5>
        <p class='card-text' style='color:red; font-size:15px;'>Disponibles: ".$row['cantidad']."</p>
    <p style='font-size:15px'> Precio: $".$row['precio']." </p>
        
          </div>

        <div class='custom-column-footer' style='text-align:center;'>
        <a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']." ' class='btn btn-primary btn-lg'>Ver Producto</a>
        </div>

      </div>
    </div>";
}
else{
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
    <a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']." ' class='btn btn-primary btn-lg'>Ver Producto</a>
    </div>

  </div>
</div>";

}
}

?>

</div>
  </div>
</div>
<hr style='border: none; height: 1px; background-color:black; margin-top:-100px;'>
<h1 style="margin-left:400px; color:#D07118; font-weight: bolder; font-size:30px;">Comentarios del Producto</h1>

<div style="display: block; height: 400px; overflow-y: auto; overflow-x: hidden;">
<!-- CARDS -->         
<div class="container" style="margin-left:5px;">
  <div class="row">


<?php  
include('./BACKEND/Connection.php');
$prod = $_GET["id"];

$stmt= $pdo->prepare("CALL SP_VentaDet('P',null,null,null,null,null,null,null,null,:id,null,null);");

$stmt->bindParam(":id", $prod,PDO::PARAM_INT);
$stmt->execute();
$ventas = $stmt->fetchAll(PDO::FETCH_ASSOC); 

if($ventas){
foreach($ventas as $coment){

  if($coment["Calificacion"] == 5){
  echo '
    <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">
    <div class="custom-column" >
      
      <div class="custom-column-content" style="text-align:center;  ">
      <br>
      <div>
      <img src="data:image/jpeg;base64,'.base64_encode($coment['foto']).' " class="card-img-top" alt="Imagen1" style="border-radius:80%; width:80px; height:80px;">
      <h1>'.$coment["FK_Comprador"].'</h1>
      </div>
  <div class="rate" style="margin-left:270px; background-color:green; width:150px; height:35px; text-align:center; border-radius: 5% ; padding-top:10px; padding-bottom:10px; padding:10px;">

  <h5 style="color:white; margin-left:-50px;">Rating: '.$coment["Calificacion"].' <h5 style="color:yellow; margin-left:80px; margin-top:-20px;">★★★★★</h5></h5>

  </div>    

<br></br>
<br>

  <p class="card-text" style="font-size:13px; color:gray;"> '.$coment["Fecha"].' </p>
  <p style="font-size:14px">'.$coment["comentario"].'</p>
      
        </div>

      </div>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';
  }
  else if($coment["Calificacion"] == 4){
    echo '
    <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">
    <div class="custom-column" >
      
      <div class="custom-column-content" style="text-align:center;  ">
      <br>
      <div>
      <img src="data:image/jpeg;base64,'.base64_encode($coment['foto']).' " class="card-img-top" alt="Imagen1" style="border-radius:80%; width:80px; height:80px;">
      <h1>'.$coment["FK_Comprador"].'</h1>
      </div>
  <div class="rate" style="margin-left:270px; background-color:green; width:150px; height:35px; text-align:center; border-radius: 5% ; padding-top:10px; padding-bottom:10px; padding:10px;">

  <h5 style="color:white; margin-left:-50px;">Rating: '.$coment["Calificacion"].' <h5 style="color:yellow; margin-left:80px; margin-top:-20px;">★★★★</h5></h5>

  </div>    

<br></br>
<br>

  <p class="card-text" style="font-size:13px; color:gray;"> '.$coment["Fecha"].' </p>
  <p style="font-size:14px">'.$coment["comentario"].'</p>
      
        </div>

      </div>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';

  }
  else if($coment["Calificacion"] == 3){
    echo '
    <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">
    <div class="custom-column" >
      
      <div class="custom-column-content" style="text-align:center;  ">
      <br>
      <div>
      <img src="data:image/jpeg;base64,'.base64_encode($coment['foto']).' " class="card-img-top" alt="Imagen1" style="border-radius:80%; width:80px; height:80px;">
      <h1>'.$coment["FK_Comprador"].'</h1>
      </div>
  <div class="rate" style="margin-left:270px; background-color:green; width:150px; height:35px; text-align:center; border-radius: 5% ; padding-top:10px; padding-bottom:10px; padding:10px;">

  <h5 style="color:white; margin-left:-50px;">Rating: '.$coment["Calificacion"].' <h5 style="color:yellow; margin-left:80px; margin-top:-20px;">★★★</h5></h5>

  </div>    

<br></br>
<br>

  <p class="card-text" style="font-size:13px; color:gray;"> '.$coment["Fecha"].' </p>
  <p style="font-size:14px">'.$coment["comentario"].'</p>
      
        </div>

      </div>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';

  }
  else if($coment["Calificacion"] == 2){
    echo '
    <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">
    <div class="custom-column" >
      
      <div class="custom-column-content" style="text-align:center;  ">
      <br>
      <div>
      <img src="data:image/jpeg;base64,'.base64_encode($coment['foto']).' " class="card-img-top" alt="Imagen1" style="border-radius:80%; width:80px; height:80px;">
      <h1>'.$coment["FK_Comprador"].'</h1>
      </div>
  <div class="rate" style="margin-left:270px; background-color:green; width:150px; height:35px; text-align:center; border-radius: 5% ; padding-top:10px; padding-bottom:10px; padding:10px;">

  <h5 style="color:white; margin-left:-50px;">Rating: '.$coment["Calificacion"].' <h5 style="color:yellow; margin-left:80px; margin-top:-20px;">★★</h5></h5>

  </div>    

<br></br>
<br>

  <p class="card-text" style="font-size:13px; color:gray;"> '.$coment["Fecha"].' </p>
  <p style="font-size:14px">'.$coment["comentario"].'</p>
      
        </div>

      </div>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';

  }
  else if($coment["Calificacion"] == 1){
    echo '
    <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">
    <div class="custom-column" >
      
      <div class="custom-column-content" style="text-align:center;  ">
      <br>
      <div>
      <img src="data:image/jpeg;base64,'.base64_encode($coment['foto']).' " class="card-img-top" alt="Imagen1" style="border-radius:80%; width:80px; height:80px;">
      <h1>'.$coment["FK_Comprador"].'</h1>
      </div>
  <div class="rate" style="margin-left:270px; background-color:green; width:150px; height:35px; text-align:center; border-radius: 5% ; padding-top:10px; padding-bottom:10px; padding:10px;">

  <h5 style="color:white; margin-left:-50px;">Rating: '.$coment["Calificacion"].' <h5 style="color:yellow; margin-left:80px; margin-top:-20px;">★</h5></h5>

  </div>    

<br></br>
<br>

  <p class="card-text" style="font-size:13px; color:gray;"> '.$coment["Fecha"].' </p>
  <p style="font-size:14px">'.$coment["comentario"].'</p>
      
        </div>

      </div>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';

  }
}
}
else{
  echo '  <hr style="border: none; height: 1px; background-color:black">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:300px; margin-left:200px; background-color:#E7F3FF;">   
  <h2 class="card-text" id="ventaprod" style="font-family: Arial, Helvetica, sans-serif; margin-left:280px; margin-top:50px; font-weight:bold;">No hay comentarios.</h2>
  </div>
  <hr style="border: none; height: 1px; background-color:black">';
}



?>

</div>

</div>

</div>







<!-- Modal Listas-->
<div  class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" style="width:900px; margin-left:-200px;">

      <div class="modal-header" style="width:900px; height:500px;">
        <h4 class="modal-title" style="font-weight: bold; margin-left:300px; font-size:25px;">MIS LISTAS AGREGADAS</h4>
       
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:50px;">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
       
      <div class="modal-body">
      <hr style='border: none; height: 1px; background-color:black; margin-top:-450px; '>  
        <h6 style=" font-size:20px; color:gray;">Agregue el producto en una de las listas.</h6>
        <div class="container">
  <div class="row" style=" height: 400px; display: block; overflow-y: auto;  overflow-x: hidden;">

       



      <?php

        include('./BACKEND/Connection.php');
        $id = $_GET['usu'];
        
        $stmt= $pdo->prepare("CALL SP_Lista('X',null,null,null,null,null, :usu);");

        $stmt->bindParam(":usu", $id);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data

        if($resultado){

        foreach($resultado as $row){
          echo " 
          <form method='post'>
          <div>
          <br>
          <input type='hidden' id='id_lista' name='id_lista' value='".$row['ID_Lista']."'>  
          <input type='hidden' id='id_prod' name='id_prod' value='".$_GET['id']."'>  
      
          <img src='data:image/jpeg;base64,".base64_encode($row['Imagen'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:100px; height:100px; max-height:100px;'>
      <br> <br>
      
          <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic; font-size:30px; word-break: break-all; max-width:400px;'>".$row['NombreLista']."</h4>
          <br>
          <p class='card-text' id='catprod' style=' font-size:20px;'>".$row['Estado']."</p>
          <br>
          <input type='submit'  id='listaprod'  name='listaprod' class='btn btn-primary btn-success' style='font-size:15px; width:250px; margin-left:600px; margin-top:-300px;' value='Agregar a la lista'></button>
       
      <br>
      <hr style='border: none; height: 1px; background-color:black; '> </div> 
      </form>";
        }
      }
      else{

        echo"<h2 style='margin-top:200px; color:red; '>No hay listas creadas porfavor crea una para poder agregar productos...</h2>";

      }  

?>
 

      

      <?php  
              // 
  if(isset($_POST['listaprod'])){
    
    $idlista = $_POST['id_lista'];
    $idprod = $_POST['id_prod'];
    echo json_encode($_POST);

   
    
        require("./BACKEND/Connection.php");

    $sql = "CALL SP_ListaProd('I',null,:list,:prod);";

    
$query=  $pdo->prepare($sql); 

$query->bindParam(":list",$idlista);   
$query->bindParam(":prod",$idprod);                       


$query->execute();
$resultado = $query->execute(); 

if($resultado){
    $pdo = null;
    echo "<script>alert('Producto Agregado a la lista');</script>";
}
  }
      ?>

  

      </div>
      </div>

  </div>
  </div>
      
      
      
      </div>
 


    </div>
  </div>
</div>





<script>

function EliminarCarProd(id){
    Swal.fire({
        title: '¿Esta seguro que quiere eliminar?',
        text: "No podra revertirlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo!',
        cancelButtonText:  'NO'

    })
    .then((result) =>{

        if(result.isConfirmed){
            fetch("carProd-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response)

                Swal.fire(
                    'Eliminado!',
                    'La categoria a sido eliminada.',
                    'success'
                )

                document.location.reload(true);
            }
            else{
              Swal.fire(
                    'Error!',
                    'La categoria a sido eliminada.',
                    'success'
                )

            }
            
        })
            
        }
    })

}



</script>
<!----------------------------------------------------------------------------------------------------------------->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// 
  if(isset($_POST['agregacar'])){

    $cant = $_POST['cant'];
    $idprod = $_POST['idprod'];
    $precioprod = $_POST['precio'];
    $idcar = $_POST['idcar'];
    $idvend = $_POST['vendedor'];
    $idcom = $_POST['comprador'];
    $cantpro = $_POST['cantprod'];


//     if($cantpro <= $cant)
//     {
//       echo "<script> 
//   Swal.fire({
//     icon: 'error',
//     title: 'No se puede agregar al carrito',
//     text: 'No puede agregar mas de la cantidad disponible.'
//   })
//  </script>";
//     }

//     elseif($cantpro >= $cant){
    
        require("./BACKEND/Connection.php");

    $sql = "CALL SP_CarritoDet('I',null,null,:cant,:precio,:prod,:vend,:car,:com);";

    
$query=  $pdo->prepare($sql); 

$query->bindParam(":cant",$cant);
$query->bindParam(":precio",$precioprod);   
$query->bindParam(":prod",$idprod);
$query->bindParam(":vend",$idvend);      
$query->bindParam(":car",$idcar); 
$query->bindParam(":com",$idcom);                          

$resultado = $query->execute(); 

if($resultado){
  
    echo ' 
    <script> 
    var nom = document.getElementById("comprador").value; 
    Swal.fire(
    "Producto en el Carrito!",
    "Checar carrito de compras",
    "success"
    ); 
    location.href="PaginaInicio.php?usu="+ nom;
</script>';


    }
else{

  echo "<script> 
  Swal.fire({
    icon: 'error',
    title: 'ERROR',
    text: 'No se pudo registrar correctamente,intente de nuevo...'
  })
 </script>";

}

}

  // }


?>       


<?php
// 
  if(isset($_POST['cotizar'])){

    $cant = $_POST['cant'];
    $idprod = $_POST['idprod'];
    $precioprod = $_POST['precio'];
    $idcar = $_POST['idcar'];
    $idvend = $_POST['vendedor'];
    $idcom = $_POST['comprador'];
    
        require("./BACKEND/Connection.php");

    $sql = "CALL SP_CotizaProd('I',null,null,   :cant,:precio,  :prod, :vend, :car,:com);";

    
$query=  $pdo->prepare($sql); 

$query->bindParam(":cant",$cant);
$query->bindParam(":precio",$precioprod);   
$query->bindParam(":prod",$idprod);
$query->bindParam(":vend",$idvend);      
$query->bindParam(":car",$idcar); 
$query->bindParam(":com",$idcom);                          

$resultado = $query->execute(); 

if($resultado){
  
  echo "<script>Swal.fire({
    title: 'PRODUCTO COTIZADO',
    text: 'En unos momentos recibira una cotizacion del producto.',
    showDenyButton: true,
    confirmButtonText: 'Aceptar',
  }).then((result) => {
    
    if (result.isConfirmed) {
      
    } 
  
  })</script>";


    }
else{

  echo "<script> 
  Swal.fire({
    icon: 'error',
    title: 'ERROR',
    text: 'No se pudo registrar correctamente,intente de nuevo...'
  })
 </script>";

}

}




?>       

<?php
// 
  if(isset($_POST['agregaCarDet'])){
    $cant = $_POST['cant'];
    $idprod = $_POST['idprodCot'];
    $idcom = $_POST['idcomCot'];
    $cantpro = $_POST['cantprod'];

//     if($cantpro <= $cant)
//     {
//       echo "<script> 
//   Swal.fire({
//     icon: 'error',
//     title: 'No se puede agregar al carrito',
//     text: 'No puede agregar mas de la cantidad disponible.'
//   })
//  </script>";


//     }

    
        require("./BACKEND/Connection.php");

    $sql = "CALL SP_CarritoDet('A',null,null,null,null,:prod,null,null,:com);";
    
$query=  $pdo->prepare($sql); 

$query->bindParam(":prod",$idprod);
$query->bindParam(":com",$idcom);                          

$resultado = $query->execute(); 

if($resultado){

    echo ' 
    <script> 
    Swal.fire(
    "Producto en el Carrito!",
    "Checar carrito de compras",
    "success"
    ); 

</script>';


    }
else{

  echo "<script> 
  Swal.fire({
    icon: 'error',
    title: 'ERROR',
    text: 'No se pudo registrar correctamente,intente de nuevo...'
  })
 </script>";

}

}




?>       



<!--------------------------------------------------------------------------------------------------------->
<script src="Producto.js"></script>




</body>
</html>