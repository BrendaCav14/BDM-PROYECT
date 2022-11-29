<?php

require("./BACKEND/Connection.php");

 $action = $_REQUEST['action'];
 
 if($action=="showAll"){
  
    $consulta= $pdo->prepare("CALL SP_Producto('S',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
 }
 else{
  
  // $stmt=$pdo->prepare("SELECT ID_Producto, nombre, descripcion,imagen1, imagen2, imagen3,video, venta, cantidad, precio,FK_Categoria, FK_Vendedor FROM Producto WHERE FK_Categoria = :id;");
  // $stmt->bindParam(":id", $action);
  //         $stmt->execute();
  //         $resultado = $stmt->fetch(PDO::FETCH_ASSOC); //User data

 }

 if($action=="showAll"){
  
    foreach($resultado as $row){

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
                <a href='verproducto.php?id=".$row['ID_Producto']."' class='btn btn-primary btn-lg'>Ver Producto</a>
                </div>
        
              </div>
            </div>";
        
        }


 }
 
 else{

    foreach($resultado as $row){

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
      }

//         <div class="col-xs-3">
//    <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $product_name;</div><br />
//   </div>
        
 
 ?>