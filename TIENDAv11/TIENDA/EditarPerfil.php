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

        
          <form class="formulario__grupo" id="grupo__usuario" style="margin-top:80px; margin-left:300px; font-size:15px;">
				
          <label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
        <input type="text" class="usuario" name="usuario" id="usuario">
        <input type="hidden" name="idp" id="idp" value="">
				</div>

          <div style="margin-left:50px; font-size:15px;">
          <div style="margin-left:50px; margin-top:10px;">
  
  <div class="form_grupo" id="grupo_nombre">
  <label for="nombre" class="form_label">Nombre:</label>
     <div class="form_grupo-input">
  <input type="text" id="nombre" class="form_input" name="nombre">
  
    </div>
</div>

  <div class="form_grupo" id="grupo_nombre2" style="margin-top:20px">
  <label for="nombre2" class="form_label">Segundo Nombre:</label>
  <div class="form_grupo-input">
  <input type="text" id="nombre2" class="form_input" name="nombre2">
 
       </div>
  </div>
</div>

<div style="margin-left:250px; margin-top:-130px;">
  <div class="form_grupo" id="grupo_Apat">
  <label for="apat" class="form_label">Apellido Paterno:</label>
  <div class="form_grupo-input">
  <input type="text" id="apat" class="form_input" name="apat">
  
    </div>
  </div>
  
  <div class="form_grupo" id="grupo_Amat" style="margin-top:20px;">
  <label for="amat" class="form_label">Apellido Materno:</label>
  <div class="form_grupo-input">
  <input type="text" id="amat" class="form_input" name="amat">
  
    </div>
  </div>

</div>

</div>
<br>
  <div class="form_grupo" id="grupo_email" style="margin-top:-10px; margin-left:30px; font-size:15px;">
  <label for="email" class="form_label">Email:</label>
  <div class="form_grupo-input">
  <input type="text" id="email" class="form_input" name="email" style="width:400px;">
 
    </div>
   
  </div>

<div class="form_grupo" id="grupo_contra" style="margin-top:10px; margin-left:30px; font-size:15px;">
  <label for="contra" class="form_label">Contraseña:</label>
  <div class="form_grupo-input">
  <input type="password" id="contra" class="contra" name="contra">
  
    </div>
   
  </div>

<div style="margin-left:300px; margin-top: -50px;">
<label for="combo" class="combo" id="combo-cuenta"  style="font-size:15px;">Cuenta:</label>
<select name="cuenta" class="cuenta" id="cuenta" style="font-size:15px; width:100px;" >
<option value="Publico" selected>Publico</option>
<option value="Privado" >Privado</option>
</select>
<br></br>
<label for="combo" class="combo" style="font-size:15px;">Rol:</label>
<select name="roles" class="roles" id="roles" style="font-size:15px; width:150px;" >
<option value="Administrador" selected>Administrador</option>
<option value="Vendedor" >Vendedor</option>
<option value="Comprador">Comprador</option>
</select>
</div>

  
  <br>

<!-- <div style="margin-top:-30px; margin-left:30px; font-size:15px;">
  <label for="fn" class="fn">Fecha de Nacimiento:</label>
  <input type="date" id="fn" name="fn" value="2022-08-31" min="1990-01-01" max="2022-12-31">
  
<label for="fn" class="fn" style="margin-left:10px; margin-top:50px;">Fecha de Ingreso:</label>
  <input type="date" id="fi" name="fi" value="2022-08-31" min="1990-01-01" max="2023-12-31">
  </div> -->

</div>
  <br></br>

  <div style="margin-left:600px; margin-top:-400px;">

<br>
<div style="margin-top:-20px; margin-left:100px;">
<label for="imagen" class="imagen" style="margin-left:20px; margin-top:20px; font-size:15px;">Imagen:   </label>
                  <img src="IMG/Imagen2.jpg"  alt="avatar" style="margin-left:100px; width:150px; height:150px; background-color: black; border: 1px solid transparent; padding:3px; border-image:10 stretch; border-radius: 10%;"><br>
                  <input type="file" class="form-control-file" style="margin-left:10px; margin-top:20px; font-size:16px; " name="foto" id="upload" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                  
</div>
  
</div>
<input type="button" id="editar" name="editar" class="btn btn-primary btn-block" style=" margin-left:600px; margin-top:50px; width:200px; font-size:15px;" value="Guardar Cambios"></input>

</form>



<div class="col-lg-12">
    <table class="table table-hover table-responsive" style="margin-left:30px; margin-top:100px;" >
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
          <th style="width:400px;">Fecha Ingreso</th>
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