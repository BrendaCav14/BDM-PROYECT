<?php
// 

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

     require("./BACKEND/Connection.php");

        $tipoArchivo=$_FILES['foto']['type'];
        $nombreArchivo=$_FILES['foto']['name'];
        $tamArchivo=$_FILES['foto']['size'];
        $imagenSubida=fopen($_FILES['foto']['tmp_name'],'rb');
        // $binarioImagen=fread($imagenSubida,$tamArchivo);
        // $binariosImagen=mysqli_escape_string($pdo,$binarioImagen);

   
    $sql ="INSERT IGNORE INTO Usuarios(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña,Rol,FN,genero,Cuenta,FechaIngreso,foto) 
                        VALUES(:nom, :nom2, :apat, :amat, :e, :usu, :contra, :rol, :fn, :gen, :cuen, :fi, :img)";

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
    $query->bindParam(":img",$imagenSubida,PDO::PARAM_LOB);
    $query->execute();
    
    if($query->execute())
    {
        http_response_code(200);
        echo "Datos agregados";
        exit();
    }
    else{
        http_response_code(400);
        echo "Algo salio mal";
        print_r(($query->errorInfo()));
    }
    
    
    // print_r($_POST);
    // print_r($_FILES);
}



?>