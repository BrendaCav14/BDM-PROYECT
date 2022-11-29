<?php

require("./BACKEND/Connection.php");


$consulta= $pdo->prepare("CALL SP_AutoProd('S',null,null,null);");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

if($resultado){
foreach($resultado as $data){
    
  echo "
  <form method='post' action='' id='misprod' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border-color:black; border-width:thick;  height:200px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_prod' id='id_prod' value='".$data['ID_AutoProd']."'> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:150px; height:150px; max-height:100px;'>

<div style='margin-left:200px; margin-top:-100px;'>
    <h6 class='card-title' id='nomprod' style='font-size:25px; font-family: Times New Roman, Times, serif; font-weight:bold; word-break: break-all; max-width:400px;'>".$data['nombre']."</h6>
    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic;'>Categoria: ".$data['nombre_Cat']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Vendedor: ".$data['FK_Vendedor']."</h4>
    <h4 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px; font-weight:bold;'>Tipo: ".$data['venta']."</h4>
    <h6 style='font-size:25px' id='precioprod' >Precio: $".$data['precio']."</h6>
  </div>  


<br>

    <div style='margin-left:600px; margin-top:-50px;'>
<input type='button' class='btn btn-primary btn-danger' style='font-size:15px; width:150px;' onclick=Eliminar('".$data['ID_AutoProd']."') value='Autorizar Producto'>
    </div>  

    </div>

  </div>
</div>
</form>";
   

}
}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:400px; margin-top:100px; font-weight:bold;'>No hay productos por autorizar.</h2>";

}




?>
