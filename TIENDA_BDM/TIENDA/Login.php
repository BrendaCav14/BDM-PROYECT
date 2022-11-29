<?php
// include('config.php');
// $login_button = '';

// if(isset($_GET["code"]))
// {

//  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


//  if(!isset($token['error']))
//  {
 
//   $google_client->setAccessToken($token['access_token']);

 
//   $_SESSION['access_token'] = $token['access_token'];


//   $google_service = new Google_Service_Oauth2($google_client);

 
//   $data = $google_service->userinfo->get();

 
//   if(!empty($data['given_name']))
//   {
//    $_SESSION['user_first_name'] = $data['given_name'];
//   }

//   if(!empty($data['family_name']))
//   {
//    $_SESSION['user_last_name'] = $data['family_name'];
//   }

//   if(!empty($data['email']))
//   {
//    $_SESSION['user_email_address'] = $data['email'];
//   }

//   if(!empty($data['gender']))
//   {
//    $_SESSION['user_gender'] = $data['gender'];
//   }

//   if(!empty($data['picture']))
//   {
//    $_SESSION['user_image'] = $data['picture'];
//   }
//  }
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>INICIO DE SESION</title>"?>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="Cuerpo.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


<body>

  <form method="post" action="" name="login" style="width:450px;  height:600px; margin-left:550px; margin-top:50px; border-radius: 3%; background-color:#82bbf4; ">
  <h1 style="font-family: Sofia, sans-serif; margin-left:100px; font-size:60px;"> Shopping ♥</h1>
    <br>
  <h5 style="font-family: 'Acme', sans-serif; margin-left:130px; font-size:25px;"> INICIO DE SESION</h5>
 <hr>
  
 <div style="margin-left:100px;">
 <label for="combo" class="combo" style="font-size: 18px; font-weight: bolder;">Rol:</label>
<select name="roles" class="form-select" id="roles" style="width:200px; font-size: 18px;" >
<option id="Administrador" value="Administrador">Administrador</option>
<option id="Vendedor" value="Vendedor" >Vendedor</option>
<option id="Comprador" value="Comprador">Comprador</option>
</select> 
</div> 

<br>
  <label for="usuario" class="label-text" style="font-size:20px; font-weight: bolder; margin-left: 50px;">Usuario o Email</label>
  <input type="text" class="form-control" id="ID_usuario" name="ID_usuario"  style="width:350px; margin-left:60px; font-size:25px;" autocomplete="off">
  
  <label for="contra" clas="label-text" style="font-size:20px; font-weight: bolder; margin-left: 50px; margin-top:10px;">Contraseña</label>
  <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="**********" style="width:350px; margin-left:60px; font-size:25px;" autocomplete="off">
  <br>

<div style="margin-left:150px;">
<h6 style="font-family: 'Acme', sans-serif; margin-left:30px;"> Iniciar sesion con : </h6>

<a href=""class="fa fa-google" style="margin-left:50px;"></a>
</div>

  <div style="margin-left:150px;">
  <input type="submit" name="loginSubmit" id="loginSubmit" class="btn btn-primary btnAction" style="margin-top:10px;width:150px;" value="Iniciar Sesion"><br>
  <a type="submit" href="Reg-signup.php" name="signup" class="btn btn-link" style="text-decoration: underline;font-size:15px;">¿no tienes cuenta?</a>
  </div>
  </form>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  


<?php

session_start();
require("./BACKEND/Connection.php");
if($_POST){

if(isset($_POST['loginSubmit'])){

  $u = strip_tags(trim($_POST['ID_usuario']));
  $p = strip_tags(trim($_POST['contraseña']));
  $r = $_POST['roles'];

  if($u == "" || $p == ""){
    echo "<script>
      Swal.fire({
      icon: 'error',
      title: 'Campos vacios!',
      text: 'Porfavor llena todos los campos',
      timer: 5000 // es ms (mili-segundos)
    })</script>";


  }
  else{


  $query = $pdo->prepare("CALL SP_Usuario('L', :u, :e, :p,null,null,null,null,null,null,null,null,null,null,null, :r);");

  $query->bindParam(":u", $u);
  $query->bindParam(":e", $u);
  $query->bindParam(":p", $p);
  $query->bindParam(":r", $r);
  $query->execute();
  $row = $query->fetch(PDO::FETCH_ASSOC);

  if($row > 0){
    if($row['ID_usuario'] == $u || $row['email'] == $u && $row['contraseña'] == $p && $row['Rol'] == $r){
      
      $_SESSION['ID_usuario'] = $row['ID_usuario'];
      
      if(isset($_SESSION["ID_usuario"])){

        echo "<script>Swal.fire({
          title: 'Bienvenido a Shopping !',
          text: 'Entrar',
          showDenyButton: true,
          confirmButtonText: 'Aceptar',
        }).then((result) => {
          
          if (result.isConfirmed) {
            location.href='PaginaInicio.php?usu=".$_SESSION['ID_usuario']."'
          } 
        
        })</script>";
         
        // header('location:PaginaInicio.php');
        
      }

  } else{
  echo "<script>
  Swal.fire({
  icon: 'error',
  title: 'ERROR BD',
  text: 'Porfavor checar',
  timer: 5000 // es ms (mili-segundos)
})</script>";
}
  

}
else{
        echo "<script>
      Swal.fire({
      icon: 'error',
      title: 'Usuario o Contraseña invalidos',
      text: 'Porfavor verifique su usuario o email, contraseña  y  rol',
      timer: 5000 // es ms (mili-segundos)
    })</script>";
      }


 }
  }
 }
// }
?>


   <?php /*
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   */
   ?>
<script src="InicioSesion.js"></script>

</body>
</html>

