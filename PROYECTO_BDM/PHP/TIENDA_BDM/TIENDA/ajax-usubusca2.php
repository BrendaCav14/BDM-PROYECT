<?php

if(!empty($_POST["buscarusuario"])) {
include('./BACKEND/Connection.php');

$buscar = $_POST["buscarusuario"];
$usuSesion = $_POST["usu"];

$row= $pdo->prepare("CALL SP_Busqueda('C','%".$buscar."%');");

$row->execute();
$res = $row->fetchAll(PDO::FETCH_ASSOC); //User data


foreach($res as $usu){
    echo "
    <div style='margin-left:10px; margin-top:20px; color:#280409; background-color: #cca6dc; border-radius:5%; height:150px;'>
    <h3 style='margin-top:-5px; font-weight: bold; font-style: italic;' >".$usu['ID_usuario']."</h3>
    <h4>".$usu['Nombre']."</h4>
    <h5 style='font-weight: bold;'>".$usu['Rol']."</h5>
    <h5>Cuenta:  ".$usu['Cuenta']."</h5>
    <a href='usuario.php?id=".$usu['ID_usuario']."&usu=".$usuSesion."' type='button' class='btn btn-primary btn-primary' style='color:white; width:100px; font-size:15px' value='' > Buscar </a>
    </div>
    
    ";

}
}
else{
    
        include('./BACKEND/Connection.php');
        $usuSesion = $_POST["usu"];
        
        $row= $pdo->prepare("CALL SP_Usuario('S',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");
        
        $row->execute();
        $res = $row->fetchAll(PDO::FETCH_ASSOC); //User data
        
        


    foreach($res as $usu){

        echo "
        <div style='margin-left:10px; margin-top:20px; color:#280409; background-color: #cca6dc; border-radius:5%; height:150px;'>
        <h3 style='margin-top:-5px; font-weight: bold; font-style: italic;' >".$usu['ID_usuario']."</h3>
        <h4>".$usu['Nombre']."</h4>
        <h5 style='font-weight: bold;'>".$usu['Rol']."</h5>
        <h5>Cuenta:  ".$usu['Cuenta']."</h5>
        <a href='usuario.php?id=".$usu['ID_usuario']."&usu=".$usuSesion."' type='button' class='btn btn-primary btn-primary' style='color:white; width:100px; font-size:15px' value='' > Buscar </a>
        </div>
        
        ";
        
        }

}
?>