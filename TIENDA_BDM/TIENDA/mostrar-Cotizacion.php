
<?php

session_start();
require("./BACKEND/Connection.php");

$id = $_SESSION["ID_usuario"];

$consulta= $pdo->prepare("CALL SP_CotizaProd('X',null,null,null,null,null,:usu,null,null);");
$consulta->bindParam(":usu",$id);
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

if($resultado){
foreach($resultado as $data){
    
  echo "
  <form method='post' action='' id='misprod' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border-color:black; border-width:thick;  height:300px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_cotprod' id='id_cotprod' value='".$data['ID_CotizarProducto']."'> 
  <input type='hidden' name='id_prod' id='id_prod' value='".$data['FK_Product']."'> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:150px; height:150px; max-height:100px;'>

<div style='margin-left:200px; margin-top:-100px;'>
    <h6 class='card-title' id='nomprod' style='font-size:25px; font-family: Times New Roman, Times, serif; font-weight:bold; word-break: break-all; max-width:400px;'>".$data['nombre']."</h6>
    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic;'>Categoria: ".$data['nombre_Cat']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Vendedor: ".$data['Vendedor']."</h4>
    <h4 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px; font-weight:bold;'>Tipo: ".$data['venta']."</h4>
    <h2 style='margin-top:50px;'>Precio: $
    <input type='text' name='precioC' id='precioC' style='font-size:20px; width:100px; margin-top:-200px; margin-left:10px;' value='".$data['Precio']."' ></h2>
  </div>  


<br>

    <div style='margin-left:600px; margin-top:-50px;'>
<input type='submit' name='cotizarprod' id='cotizarprod' class='btn btn-primary btn-primary' style='font-size:15px; width:150px;' value='Cotizar Producto'>
    </div>  

    </div>

  </div>
</div>
</form>";
   

}
}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:400px; margin-top:100px; font-weight:bold;'>No hay productos por cotizar.</h2>";

}




?>