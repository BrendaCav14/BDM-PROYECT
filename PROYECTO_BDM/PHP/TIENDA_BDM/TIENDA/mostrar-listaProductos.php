<?php

 $id = $_GET['lista'];
print_r($_GET);
  include('./BACKEND/Connection.php');

 $stmt= $pdo->prepare("CALL SP_ListaProd('M',null, :id,null);; ");

 $stmt->bindParam(":id", $id);
 $stmt->execute();
 $res = $stmt->fetchAll(PDO::FETCH_ASSOC); 
if($res){
foreach($res as $data){
    
  echo "
  <form method='post' action='' id='misprod' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border:3px; border-color:black; border-width:thick;  height:400px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_prod' id='id_prod' value='".$data['ID_ListaProd']."'> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:250px; height:150px; max-height:150px;'>
<br></br>
    <h6 class='card-title' id='nomprod' style='font-size:25px; font-family: Times New Roman, Times, serif; font-weight:bold; max-width:400px; max-lenght:400px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; '>".$data['Producto']."</h6>
    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic;'>Categoria: ".$data['Categoria']."</h4>
    <h4 class='card-text' id='cantprod' style='font-size:18px; margin-top:10px; font-family: Arial, Helvetica, sans-serif;'>Disponibles: ".$data['cantidad']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Vendedor: ".$data['Vendedor']."</h4>
    <h4 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px; font-weight:bold;'>Tipo: ".$data['Venta']."</h4>
    <h6 style='font-size:25px' id='precioprod' >Precio: $".$data['Precio']."</h6>
    

<div style='margin-left:500px; margin-top:-300px; color:white; font-size:30px; border-radius: 10% ; height:100px; width:200px; background-color:#b7acac;'>

<br>

<input type='submit' id='borra' id='borra' class='btn btn-primary btn-danger' style='font-size:15px; width:150px;' value='Eliminar'>

<a href='Producto.php?id=".$data['NumP']."&usu=".$_SESSION['ID_usuario']." ' type='button' class='btn btn-primary btn-primary' style='color:white; margin-left:100px; margin-top:100px; width:200px; font-size:15px' value='' > Ver Producto </a>
      
</div>

    </div>

  </div>
</div>
</form>";
   

}
}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:420px; margin-top:300px; font-weight:bold;'>No tiene productos.</h2>";
}


?>