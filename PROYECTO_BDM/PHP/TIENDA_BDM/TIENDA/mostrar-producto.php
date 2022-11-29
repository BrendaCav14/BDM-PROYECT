<?php
session_start();
require("./BACKEND/Connection.php");

$id = $_SESSION["ID_usuario"];


$consulta= $pdo->prepare("CALL SP_Producto('F',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,:usu);");
$consulta->bindParam(":usu", $id);
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

if($resultado){

foreach($resultado as $data){
    
  echo "
  <form method='post' action='' id='misprod' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border:3px; border-color:black; border-width:thick;  height:400px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_prod' id='id_prod' value=''> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:250px; height:150px; max-height:150px;'>
<br></br>
    <h6 class='card-title' id='nomprod' style='font-size:25px; font-family: Times New Roman, Times, serif; font-weight:bold; max-width:400px; max-lenght:400px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; '>".$data['nombre']."</h6>
    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic;'>Categoria: ".$data['nombre_Cat']."</h4>
    <h4 class='card-text' id='cantprod' style='font-size:18px; margin-top:10px; font-family: Arial, Helvetica, sans-serif;'>Disponibles: ".$data['cantidad']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Vendedor: ".$data['FK_Vendedor']."</h4>
    <h4 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px; font-weight:bold;'>Tipo: ".$data['venta']."</h4>
    <h6 style='font-size:25px' id='precioprod' >Precio: $".$data['precio']."</h6>
    

<div style='margin-left:500px; margin-top:-300px; color:white; font-size:30px; border-radius: 10% ; height:100px; width:200px; background-color:#b7acac;'>
<a href='EditarProducto.php?id=".$data['ID_Producto']."&nombre=".$data['nombre']."&usu=".$_SESSION['ID_usuario']."'
type='button' id='editarprod' name='editarprod' class='btn btn-success' style='color:white; font-size:15px; width:150px;'>Editar</a>

<br>

<input type='button' class='btn btn-primary btn-danger' style='font-size:15px; width:150px;' onclick=Eliminar('".$data['ID_Producto']."') value='Eliminar'></a>

<a href='Producto.php?id=".$data['ID_Producto']."&usu=".$_SESSION['ID_usuario']." ' type='button' class='btn btn-primary btn-primary' style='color:white; margin-left:100px; margin-top:100px; width:200px; font-size:15px' value='' > Ver Producto </a>
      
</div>

    </div>

  </div>
</div>
</form>";
}

}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:100px; margin-top:300px; font-weight:bold;'>Los productos deben ser autorizados por un Administrador antes de ser publicados.</h2>
  ";
}




?>
