<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>Editar Perfil</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
    <?php include('bootstrap.php') ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<div class="container">
  
    <div class="main-body">

 
    <?php include('navbar.php') ?>

          <div style="background-color:white; width:1100px; height: 900px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:400px;">Datos Personales</h1>
 
          <div style="margin-left:-300px; margin-top:-100px;" >

        
          <form method="post" enctype="multipart/form-data" class="formulario__grupo" id="grupo__form" style="margin-top:100px; margin-left:300px; font-size:15px;">
			
        <?php echo "<input type='button' class='btn btn-danger' style='width:250px; font-size:15px; margin-left:800px;'  onclick=Eliminar('".$data['ID_usuario']."') value='Eliminar Cuenta'>";    ?>

<div style="margin-left:80px; margin-top:-10px; font-size: 20px; " id="perfil">


</div>

</form>


<script src="editarperfil.js"></script>

<?php 

require("./BACKEND/Connection.php");


if(isset($_POST['editar'])){

  $id = $_POST['usuario'];
  $email = $_POST['email'];
  $contra = $_POST['contra'];
  
  $nombre = $_POST['nombre'];
  $nombre2 = $_POST['nombre2'];
  $apat = $_POST['appat'];
  $amat = $_POST['apmat'];
  
  
  $fn = $_POST['fn'];
  $fi = $_POST['ingreso'];
  $gen = $_POST['gen'];
  $cuenta = $_POST['cuenta'];
  $rol = $_POST['roles'];
 
      $tipoArchivo=$_FILES['foto']['type'];
      $nombreArchivo=$_FILES['foto']['name'];
      $tamArchivo=$_FILES['foto']['size'];
      $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
      $binarioImagen=fread($imagenSubida,$tamArchivo);


    if(!empty($_FILES) && !empty($imagenSubida)){

if(!empty($id) && !empty($email) && !empty($contra) && !empty($nombre) && !empty($nombre2) && !empty($apat) && !empty($amat) && !empty($fn) && !empty($fi) && !empty($gen) && !empty($cuenta) && !empty($rol) )
      {

  $sql = "CALL SP_Usuario('U', :usu, :e, :contra, :nom, :nom2, :apat, :amat, :img, :txt, :tipo, :fn, :gen, :fi, :cuen, :rol); ";
  
  $query=  $pdo->prepare($sql); 
    
  $query->bindParam(":usu",$id,PDO::PARAM_STR,15);
  $query->bindParam(":e",$email,PDO::PARAM_STR,30);
  $query->bindParam(":contra",$contra,PDO::PARAM_STR,15);

  $query->bindParam(":nom",$nombre,PDO::PARAM_STR,30);
  $query->bindParam(":nom2",$nombre2,PDO::PARAM_STR,30);
  $query->bindParam(":apat",$apat,PDO::PARAM_STR,30);
  $query->bindParam(":amat",$amat,PDO::PARAM_STR,30);

  $query->bindParam(":img",$binarioImagen,PDO::PARAM_LOB);
  $query->bindParam(":txt",$nombreArchivo,PDO::PARAM_STR,100);
  $query->bindParam(":tipo",$tipoArchivo,PDO::PARAM_STR,100);

  
  $query->bindParam(":fn",$fn);
  $query->bindParam(":gen",$gen); 
  $query->bindParam(":fi",$fi);
  $query->bindParam(":cuen",$cuenta);
  $query->bindParam(":rol",$rol);

  $query->execute();
  $resultado = $query->execute();



  echo "<script> 
  var nom = document.getElementById('usuario').value; 
  Swal.fire(
  'Su Perfil a sido Actualizado!',
  'Se realizaron los cambios necesarios',
  'success')
  location.href='PaginaInicio.php?usu='+ nom;
 </script>";

  }
 else{
    echo "<script>
          Swal.fire({
          icon: 'error',
          title: 'Campos vacios!',
          text: 'Porfavor llena todos los campos',
          timer: 5000 // es ms (mili-segundos)
        })</script>";
}

    }

    else{
      echo "<script>
      Swal.fire({
      icon: 'error',
      title: 'INGRESAR FOTO!',
      text: 'Porfavor llena todos los campos',
      timer: 5000 // es ms (mili-segundos)
    })</script>";
    }


}


?>         

<script src="carrito.js"></script>
          
</body>
</html>