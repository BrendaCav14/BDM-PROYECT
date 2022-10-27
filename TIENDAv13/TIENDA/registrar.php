<?php
// 
require("./BACKEND/Connection.php");
if(isset($_POST) && isset($_FILES) )
{
     

    $nombre = $_POST['nombre'];
    $nombre2 = $_POST['nombre2'];
    $apat = $_POST['apat'];
    $amat = $_POST['amat'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $select = $_POST['roles'];
    $fn = $_POST['fn'];
    $genX = $_POST['genero'];
    $select2 = $_POST['cuenta'];
    $fi = $_POST['fi'];

     

        $tipoArchivo=$_FILES['foto']['type'];
        $nombreArchivo=$_FILES['foto']['name'];
        $tamArchivo=$_FILES['foto']['size'];
        $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
        $binarioImagen=fread($imagenSubida,$tamArchivo);

        if(empty($nombre) || empty($nombre2) || empty($apat) || empty($amat) || empty($email) || empty($usuario) || empty($contra))
        {
          echo "<script>alert('Llene los campos porfavor')</script>";
      
        }

        else{
        
   
    $sql ="INSERT IGNORE INTO Usuarios(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña,Rol,FN,genero,Cuenta,FechaIngreso,foto,ruta_foto,tipo_foto) 
                        VALUES(:nom, :nom2, :apat, :amat, :e, :usu, :contra, :rol, :fn, :gen, :cuen, :fi, :img, :txt, :tipo)";

    $query=  $pdo->prepare($sql);                      
    $query->bindParam(":nom",$nombre,PDO::PARAM_STR,30);
    $query->bindParam(":nom2",$nombre2,PDO::PARAM_STR,30);
    $query->bindParam(":apat",$apat,PDO::PARAM_STR,30);
    $query->bindParam(":amat",$amat,PDO::PARAM_STR,30);
    $query->bindParam(":e",$email,PDO::PARAM_STR,30);
    $query->bindParam(":usu",$usuario,PDO::PARAM_STR,15);
    $query->bindParam(":contra",$contra,PDO::PARAM_STR,15);
    $query->bindParam(":rol",$select);
    $query->bindParam(":fn",$fn);
    $query->bindParam(":gen",$genX);
    $query->bindParam(":cuen",$select2);
    $query->bindParam(":fi",$fi);
    $query->bindParam(":img",$binarioImagen,PDO::PARAM_LOB);
    $query->bindParam(":txt",$nombreArchivo,PDO::PARAM_STR,100);
    $query->bindParam(":tipo",$tipoArchivo,PDO::PARAM_STR,100);
    $query->execute();
    $resultado = $query->execute();

    if($resultado)
    {
        echo "ok";
        exit();
    }
    else{
      
        echo "error";
        exit();
     
        }
    }
    // print_r($_POST);
    // print_r($_FILES);
}



?>