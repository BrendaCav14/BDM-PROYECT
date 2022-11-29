<?php
if($_POST){
$Total = $_POST['total'];
$Comprador = $_POST['comprador'];
$producto = $_POST['producto'];
$Vendedor = $_POST['vendedor'];
$precio = $_POST['precio'];
$importe = $_POST['importe'];
$cant = $_POST['cant'];
$cali = $_POST['calificacion'];
$coment = $_POST['comentario'];
require("./BACKEND/Connection.php");


print_r($_POST);
//   $sql = "CALL SP_Venta('I', null, null, :t, :c);";

// $query=  $pdo->prepare($sql);                      
// $query->bindParam(":t",$Total);
// $query->bindParam(":c",$Comprador);

// $venta = $query->execute(); 
// $pdo = null;


// require("./BACKEND/Connection.php");

// // $stmt= $pdo->prepare("CALL SP_CarritoDet('X',null,null,null,null,null,null,:id);");
// // $stmt->bindParam(":id", $Comprador);
// // $stmt->execute();
// // $res = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data

// foreach($res as $prod){

//       $sql = "INSERT INTO venta_Detalle(cantidad,calificacion,comentario,precioVenta,importe,FK_Producto,FK_Comprador,FK_Vendedor)
//                                  VALUES(:cant,          :cali,   :coment,    :precio,:importe,      :prod,        :com,:vend)";
      
//       $row = $pdo->prepare($sql); 
//       $row->bindParam(":cant",$cant);
//       $row->bindParam(":cali",$cali);
//       $row->bindParam(":coment",$coment);
//       $row->bindParam(":precio",$precio);
//       $row->bindParam(":importe",$importe);
//       $row->bindParam(":prod",$producto);
//       $row->bindParam(":com",$Comprador);
//       $row->bindParam(":vend",$Vendedor);


//       $row->execute(); 
// }
//       $pdo = null;


    //   require("./BACKEND/Connection.php");

    //   $sql = "CALL SP_VentaDet('U',null,null,null,null,null,null,null,null,null,:com,null);";
      
    //   $row = $pdo->prepare($sql); 
    //   $row->bindParam(":com",$Comprador);

    //   $venta_detalle = $row->execute(); 
    //   $pdo = null;



    //   require("./BACKEND/Connection.php");
    //   $row = $pdo->prepare("CALL SP_CarritoDet('D',null,null,null,null,null,null,:com);"); 
    //   $row->bindParam(":com",$Comprador);

    //   $delete = $row->execute();


echo "ok";
}


?>