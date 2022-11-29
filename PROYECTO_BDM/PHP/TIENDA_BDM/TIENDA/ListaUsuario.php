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


             
          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:400px;">LISTAS DE <?php echo $_GET["id"]?></h1>

 <br></br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row" style="background-color: #b955b9; border-radius: 5% ;  height: 800px; display: block; overflow-y: auto;  overflow-x: hidden;">

  <div>
  <?php

require("./BACKEND/Connection.php");

$id = $_GET["id"];


$consulta= $pdo->prepare("CALL SP_Lista('H',null,null,null,null,null, :usu);");
$consulta->bindParam(":usu", $id);
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

if($resultado){
foreach($resultado as $data){
    
  echo "
  <form method='post' action='' id='mislista' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border-color:black; border-width:thick;  height:400px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_prod' id='id_prod' value='".$data['ID_Lista']."'> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['Imagen'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:250px; height:150px; max-height:150px;'>
<br></br>

    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic; font-size:30px; word-break: break-all; max-width:400px;'>".$data['NombreLista']."</h4>
    <h4 class='card-text' id='cantprod' style='font-size:18px; margin-top:10px; font-family: Arial, Helvetica, sans-serif;'>".$data['Descripcion']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Estado: ".$data['Estado']."</h4>
  
<div style='margin-left:500px; margin-top:-250px; color:white; font-size:30px; border-radius: 10% ; height:50px; background-color:#b7acac;'>

<a href='Listaprodusu.php?lista=".$data['ID_Lista']."&usu=".$_GET["usu"]." ' type='button' class='btn btn-primary btn-primary' style='color:white; margin-left:100px; margin-top:200px; width:200px; font-size:15px' value='' > Ver Productos </a>
      
</div>

    </div>

  </div>
</div>
</form>";
   

}
}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:420px; margin-top:300px; font-weight:bold;'>No tiene listas creadas.</h2>";
}


?>


</div>




<script src="mislistas.js"></script>
<script src="carrito.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</div>

</div>
        


</body>
</hmtl>