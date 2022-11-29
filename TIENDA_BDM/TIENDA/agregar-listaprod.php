<?php
// 
  if(isset($_POST['listaprod'])){

    $idprod = $_GET['id'];
    $idlista = $row['ID_Lista'];
   
    
        require("./BACKEND/Connection.php");

    $sql = "CALL SP_ListaProd('I',null,  :list, :prod);";

    
$query=  $pdo->prepare($sql); 

$query->bindParam(":list",$idlista);   
$query->bindParam(":prod",$idprod);                       


$query->execute();
$resultado = $query->execute(); 


    $pdo = null;
    echo "ok";


}




?>     