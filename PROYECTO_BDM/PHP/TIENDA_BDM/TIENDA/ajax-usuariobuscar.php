<?php

if(!empty($_POST["buscarusuario"])) {
include('./BACKEND/Connection.php');

$buscar = $_POST["buscarusuario"];

$row= $pdo->prepare("CALL SP_Busqueda('B','%".$buscar."%');");

$row->execute();
$res = $row->fetchAll(PDO::FETCH_ASSOC); //User data


foreach($res as $usu){

echo "
<div >
<option value=".$usu['ID_usuario'].">
<option value=".$usu['nombre'].">
<option value=".$usu['nombre2'].">
<option value=".$usu['ApPat'].">
<option value=".$usu['ApMat'].">
</div>";

}
}
else{
  echo "<option value=''>";
}
?>