<?php

if(isset($_POST))
{
    if($_POST['HombreX'] != null){
    $nombre = $_POST['nombre'];
    $nombre2 = $_POST['nombre2'];
    $apat = $_POST['apat'];
    $amat = $_POST['amat'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $select = $_POST['roles'];
    $fn = $_POST['fn'];
    $hombreX = $_POST['HombreX'];
    $select2 = $_POST['cuenta'];
    $fi = $_POST['fi'];

    require("./BACKEND/Connection.php");

    if(empty($nombre) || empty($nombre2) || empty($apat) || empty($amat) || empty($email) || empty($usuario) || empty($contra))
    {
        http_response_code(400);
        alert("Su cuenta a sido Registrada !");
        exit();
    }

    if(! filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        http_response_code(400);
        echo "Correo Electronico Invalido";
        exit();
    }

    
    $query = $pdo->prepare("INSERT INTO usuario(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña,Rol,FN,genero,Cuenta,FechaIngreso) 
                                         VALUES(:nom, :nom2, :apat, :amat, :e, :usu, :contra, :rol, :fn, :genhom, :cuen, :fi)");
    
    $query->bindParam(":nom",$nombre);
    $query->bindParam(":nom2",$nombre2);
    $query->bindParam(":apat",$apat);
    $query->bindParam(":amat",$amat);
    $query->bindParam(":e",$email);
    $query->bindParam(":usu",$usuario);
    $query->bindParam(":contra",$contra);
    $query->bindParam(":rol",$select);
    $query->bindParam(":fn",$fn);
    $query->bindParam(":genhom",$hombreX);
    $query->bindParam(":cuen",$select2);
    $query->bindParam(":fi",$fi);
    $query->execute();
    $pdo = null;
    echo "ok";
    }



    else{
    $nombre = $_POST['nombre'];
    $nombre2 = $_POST['nombre2'];
    $apat = $_POST['apat'];
    $amat = $_POST['amat'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $select = $_POST['roles'];
    $fn = $_POST['fn'];
    $mujerX = $_POST['MujerX'];
    $select2 = $_POST['cuenta'];
    $fi = $_POST['fi'];

    require("./BACKEND/Connection.php");

    if(empty($nombre) || empty($nombre2) || empty($apat) || empty($amat) || empty($email) || empty($usuario) || empty($contra))
    {
        http_response_code(400);
        alert("Su cuenta a sido Registrada !");
        exit();
    }

    if(! filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        http_response_code(400);
        echo "Correo Electronico Invalido";
        exit();
    }
        $query = $pdo->prepare("INSERT INTO usuario(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña,Rol,FN,genero,Cuenta,FechaIngreso) 
                                             VALUES(:nom, :nom2, :apat, :amat, :e, :usu, :contra, :rol, :fn, :genmuj, :cuen, :fi)");
        
        $query->bindParam(":nom",$nombre);
        $query->bindParam(":nom2",$nombre2);
        $query->bindParam(":apat",$apat);
        $query->bindParam(":amat",$amat);
        $query->bindParam(":e",$email);
        $query->bindParam(":usu",$usuario);
        $query->bindParam(":contra",$contra);
        $query->bindParam(":rol",$select);
        $query->bindParam(":fn",$fn);
        $query->bindParam(":genmuj",$mujerX);
        $query->bindParam(":cuen",$select2);
        $query->bindParam(":fi",$fi);
        $query->execute();
        $pdo = null;
        echo "ok";
        }
}

// print_r($_POST);

?>