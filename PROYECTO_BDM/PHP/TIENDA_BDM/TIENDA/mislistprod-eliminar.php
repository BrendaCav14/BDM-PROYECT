<?php

$borra = file_get_contents("php://input");
  
  require("./BACKEND/Connection.php");
  $query = $pdo->prepare("CALL SP_ListaProd('D', :l,null,null);");
  
  $query->bindParam(":l",$borra);
  $res = $query->execute();
  
if($res){
      echo "ok";

}
  
?>