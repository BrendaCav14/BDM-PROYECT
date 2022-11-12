<?php

  if(isset($_POST['cat'])){

    $nombre = $_POST['cat'];
    $desc = $_POST['desc'];
    $vendedor = $_POST['ven'];
    
    print_r($_POST);
    // echo json_encode($_POST);
//         require("./BACKEND/Connection.php");

//         $sql = "CALL SP_Categoria('I',:nom, :d, :vend);";
//         // $sql ="INSERT IGNORE INTO Categoria(nombre_Cat,descripcion,FK_vendedor) VALUES(:nom, :d, :vend)";

// $query=  $pdo->prepare($sql);                      
// $query->bindParam(":nom",$nombre,PDO::PARAM_STR,50);
// $query->bindParam(":d",$desc,PDO::PARAM_STR,50);
// $query->bindParam(":vend",$vendedor,PDO::PARAM_STR,15);
// $query->execute();
// $resultado = $query->execute(); 
// if($resultado)
//     {
//         // $pdo = null;
//         echo "ok";
    
//     }
    
  }

?>