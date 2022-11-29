<?php
include('config.php');
$login_button = '';

if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>INICIO DE SESION</title>"?>

    <link rel="stylesheet" href="InicioSesion.css">
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
<form class="formularioReg">

  <h1 class="regnosotros" style="font-family: Sofia, sans-serif;margin-left:30px;"> Shopping ♥</h1>
    <br>
  <h5 class="regnosotros" style="font-family: 'Acme', sans-serif;"> INICIO DE SESION</h5>
 
  <br>
  <label for="usuario" class="label-text" style="font-size: 15px; font-weight: bolder; margin-left:-250px;">Usuario</label>
  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" style="width:300px; margin-left:80px;"><br>
  <label for="contra" clas="label-text" style="font-size: 15px; font-weight: bolder; margin-left:-230px;">Contraseña</label>
  <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" style="width:300px; margin-left:80px;"><br>


<h6 class="regnosotros" style="font-family: 'Acme', sans-serif; margin-top:-10px;"> Iniciar sesion con : </h6>
<a href="#" class="fa fa-facebook"></a>
<a href="<?php echo $google_client->createAuthUrl()?>" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
<br>

  <a type="submit" name="login" class="btn btn-primary btnAction" style="margin-top:10px;width:150px;">Iniciar Sesion</a><br>
     
      <form name="form1" action=""  method="post">
  <a type="submit" name="registrarse" class="btn btn-link" style="text-decoration: underline;font-size:15px;">¿no tienes cuenta?</a>
     </form>

</form>

<?php
if(isset($_POST["registrarse"]))
{
  header('Location:RegUsuario.php');
}
?>

<?php
require("./BACKEND/Connection.php");
if(isset($_POST["login"])){
  session_start();
  $u = $_POST['usuario'];
  $p = $_POST['contra'];
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $query = $pdo->prepare("SELECT * FROM Usuarios WHERE usuario= :u AND contraseña= :p");

  $query->bindParam(":u", $u);
  $query->bindParam(":p", $p);
  $query->execute();
  $Usuario = $query->fetch(PDO::FETCH_ASSOC);
  if($Usuario){
    $_SESSION['Usuarios'] = $Usuario['usuario'];
    echo "BIENVENIDO A SHOPPING";
    header("location:PaginaInicio.php");
  }else{
    echo "Usuario o contraseña son invalidos";
  }

}

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

