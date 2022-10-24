<?php

$servidor = "mysql:dbname=tienda;host=localhost";
$user = "root";
$pass = "";

$db_handle = new PDO($servidor, $user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

if(!empty($_POST["usuario"])) {
    $consulta="SELECT usuario FROM Usuarios WHERE usuario='" . $_POST["usuario"] . "'";
    $result = $db_handle->query($consulta);
    
  if($result->rowCount() > 0) {
      echo "<span class='estado-no-disponible-usuario' style='color:red;'> Usuario no Disponible.</span>";
  }else{
      echo "<span class='estado-disponible-usuario'  style='color:green;'> Usuario Disponible.</span>";
  }
}

if(!empty($_POST["email"])) {
    $consulta="SELECT email FROM Usuarios WHERE email='" . $_POST["email"] . "'";
    $result = $db_handle->query($consulta);
   
  if($result->rowCount() > 0) {
      echo "<span class='estado-no-disponible-email' style='color:red;'> Email no Disponible.</span>";
  }else{
      echo "<span class='estado-disponible-email' style='color:green;'> Email Disponible.</span>";
  }
}
?>
