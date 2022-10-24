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

</head>
<body>

<div class="container">
  
    <div class="main-body">

 
    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>

          <div style="background-color:white; width:1100px; height: 1050px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:330px;">Datos Personales del Usuario</h1>
 
          <div style="margin-left:-300px; margin-top:-50px;">

        
          <form action="" method="post" enctype="multipart/form-data" class="formulario__grupo" id="grupo__form" style="margin-top:100px; margin-left:300px; font-size:15px;">
				
          <label for="usuario" class="formulario__label" id="user" style="margin-top:-50px;">Usuario</label>
        <input type="text" class="usuario" name="user_input" id="user_input" autocomplete="true">
        <!-- <input type="hidden" name="idp" id="idp" value=""> -->
			

<div style="margin-left:10px; margin-top:20px;">

<div class="form_grupo" id="grupo_Apat" style="margin-left:60px; margin-top:30px;">
<label class="form_label">Nombre:</label>
<input type="text" id="name_input" class="form_input" name="name_input" autocomplete="true">
</div>

<div class="form_grupo" id="grupo_Amat" style="margin-top:20px;">
<label class="form_label">Apellido Paterno:</label>
<input type="text" id="apat_input" class="form_input" name="apat_input" autocomplete="true">
</div>

</div>
<br></br>
<div style="margin-left:350px; margin-top:-130px;">

  <div class="form_grupo" id="grupo_Apat">
  <label class="form_label">Segundo Nombre:</label>
  <input type="text" id="name2_input" class="form_input" name="name2_input" autocomplete="true">
  </div>
  
  <div class="form_grupo" id="grupo_Amat" style="margin-top:20px;">
  <label class="form_label">Apellido Materno:</label>
  <input type="text" id="amat_input" class="form_input" name="amat_input" autocomplete="true">
  </div>

</div>

<br></br>
  <div class="form_grupo" id="grupo_email" style="margin-top:-10px; margin-left:30px; font-size:15px;">
  <label for="email" class="form_label">Email:</label>
  <input type="text" id="email_input" class="form_input" name="email_input" style="width:400px;" autocomplete="true">
  </div>

  <div class="form_grupo" id="grupo_contra" style="margin-top:10px; margin-left:30px; font-size:15px;">
  <label for="contra" class="form_label">Contraseña:</label>
  <input type="password" id="contra" class="contra" name="contra">
  </div>

<div style="margin-left:300px; margin-top: -50px;">
<div style="margin-top: -50px;">
<label for="combo" class="combo" id="combo-cuenta"  style="font-size:15px; margin-top:20px; margin-left:20px;">Cuenta:</label>
<input type="text" id="cuenta" class="cuenta" name="cuenta" style="width:80px;">
</div>

<br>
<div style="margin-left:160px; margin-top: -60px;">
<label for="combo" class="combo" style="font-size:15px;">Rol:</label>
<input type="text" id="rol" class="rol" name="rol">
</div>

</div>

  
  <br>

<div style="margin-top:-30px; margin-left:30px; font-size:15px;">
  <label for="fn" class="fn">Fecha de Nacimiento:</label>
  <input type="date" id="FechaN" name="fn" value="2002-12-30" min="1950-01-01" max="2002-12-30">
  
<label for="fn" class="fn" style="margin-left:10px; margin-top:50px;">Fecha de Ingreso:</label>
<input type="date" id="start" name="fi" value="2022-10-21" min="1990-01-01" max="2024-01-01">
  </div>

</div>
  <br></br>

  <div style="margin-left:600px; margin-top:-400px;">

<br>
</br>
<div style="margin-top:-20px; margin-left:100px;">
<label for="imagen" class="imagen" style="margin-left:20px; margin-top:20px; font-size:15px;">Imagen:   </label>
                  <img src="IMG/Imagen2.jpg"  alt="avatar" style="margin-left:100px; width:150px; height:150px; background-color: black; border: 1px solid transparent; padding:3px; border-image:10 stretch; border-radius: 10%;"><br>
                  <input type="file" class="form-control-file" style="margin-left:10px; margin-top:20px; font-size:16px; " name="foto" id="upload" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                  
</div>
  
</div>
<input type="button" id="editar" name="editar" class="btn btn-primary btn-block" style=" margin-left:800px; margin-top:50px; width:200px; font-size:15px;" value="Guardar Cambios"></input>

</form>



<div class="col-lg-12">
    <table class="table table-hover table-responsive" style="margin-left:-20px; margin-top:100px;" >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Segundo Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Correo Electronico</th>
          <th>Fecha Nacimiento</th>
          <th>Cuenta</th>
          <th>Rol de usuario</th>
          <th style="width:500px;">Fecha Ingreso</th>
          <th>IMAGEN</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody id="resultado" style="font-size:13px;">

      </tbody>
    </table>

</div>

          </div>
          <script src="editar-perfil.js"></script>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>