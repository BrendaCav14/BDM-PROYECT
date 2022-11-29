<?php



if($_POST) {
session_start();
    if($_POST["rango2"] == "500"){
    require("./BACKEND/Connection.php");

    $consulta= $pdo->prepare("CALL SP_RangoProducto('C');");
 
    $consulta->execute();
    $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row) {
    
    
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
            <a href='Producto.php?id=".$row['ID_Producto']."&nombre=".$row['nombre']."&usu=".$_SESSION['ID_usuario']." ' class='btn btn-primary btn-lg'>Ver Producto</a>
            </div>
    
          </div>
        </div>";
    
    
    }


}

}

?>