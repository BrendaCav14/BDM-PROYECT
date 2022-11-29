<?php
session_start();
require("./BACKEND/Connection.php");

$id = $_SESSION["ID_usuario"];


$consulta= $pdo->prepare("CALL SP_Lista('X',null,null,null,null,null, :usu);");
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
<a href='EditarLista.php?id=".$data['ID_Lista']."' type='button' id='editarprod' name='editarprod' class='btn btn-success' style='color:white; font-size:15px; width:150px;'>Editar</a>

<br>

<input type='button' class='btn btn-primary btn-danger' style='font-size:15px; width:150px;' onclick=EliminarLista('".$data['ID_Lista']."') value='Eliminar'>

<a href='ListaProductos.php?lista=".$data['ID_Lista']."&usu=".$_SESSION["ID_usuario"]." ' type='button' class='btn btn-primary btn-primary' style='color:white; margin-left:100px; margin-top:200px; width:200px; font-size:15px' value='' > Ver Productos </a>
      
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
