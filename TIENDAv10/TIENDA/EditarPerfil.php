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

          <div style="background-color:white; width:1100px; height: 550px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:330px;">Datos Personales del Usuario</h1>
 
          <div style="margin-left:-300px; margin-top:-50px;">
<div style="margin-left:300px; font-size:15px;">
          <div style="margin-left:50px; margin-top:80px;">
  <div class="form_grupo" id="grupo_nombre">
  <label for="nombre" class="form_label">Nombre:</label>
     <div class="form_grupo-input">
  <input type="text" id="nombre" class="form_input" name="nombre">
  <i class="form_valida-estado  fas fa-times-circle"></i>
    </div>
</div>

  <div class="form_grupo" id="grupo_nombre2" style="margin-top:20px">
  <label for="nombre2" class="form_label">Segundo Nombre:</label>
  <div class="form_grupo-input">
  <input type="text" id="nombre2" class="form_input" name="nombre2">
  <i class="form_valida-estado  fas fa-times-circle"></i>
       </div>
  </div>
</div>

<div style="margin-left:300px; margin-top:-130px;">
  <div class="form_grupo" id="grupo_Apat">
  <label for="apat" class="form_label">Apellido Paterno:</label>
  <div class="form_grupo-input">
  <input type="text" id="apat" class="form_input" name="apat">
  <i class="form_valida-estado  fas fa-times-circle"></i>
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
  <div class="form_grupo" id="grupo_email" style="margin-top:30px; margin-left:350px; font-size:15px;">
  <label for="email" class="form_label">Email:</label>
  <div class="form_grupo-input">
  <input type="text" id="email" class="form_input" name="email" style="width:400px;">
 
    </div>
   
  </div>

  <div class="formulario__grupo" id="grupo__usuario" style="margin-top:30px; margin-left:350px; font-size:15px;">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="usuario" name="usuario" id="usuario">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
<div class="form_grupo" id="grupo_contra" style="margin-top:-55px; margin-left:250px; font-size:15px;">
  <label for="contra" class="form_label">Contraseña:</label>
  <div class="form_grupo-input">
  <input type="password" id="contra" class="contra" name="contra" placeholder="Contraseña">
  <i class="form_valida-estado  fas fa-times-circle"></i>
    </div>
   
  </div>

			</div>
  
  
  <br>

<div style="margin-top:30px; margin-left:300px; font-size:15px;">
  <label for="fn" class="fn">Fecha de Nacimiento:</label>
  <input type="date" id="start" name="fn" value="2022-08-31" min="1990-01-01" max="2022-12-31">
  
<label for="fn" class="fn" style="margin-left:30px;">Fecha de Ingreso:</label>
  <input type="date" id="start" name="fi" value="2022-08-31" min="1990-01-01" max="2023-12-31">
  </div>

</div>
  <br></br>

  <div style="margin-left:600px; margin-top:-400px;">
  <label for="imagen" class="imagen" style="margin-left:-30px; font-size:15px;">Imagen:   </label>

  <img src="https://bootdey.com/img/Content/avatar/avatar7.png"  alt="avatar" style="margin-left:200px; width:150px; height:150px; background-color: black;border-color:black;border:5px;"><br>
<br>
  <button type="button">Seleccionar archivo</button>
  <input type="text" id="country" style="background-color:#c5bbbb;width:280px" readonly>
  <br>
</div>
  <a type="button" href="PaginaInicio.php" onclick="alerta()" class="btn btn-success" style="margin-top:100px; font-size:15px;  margin-left:750px; width:150px;">
  Editar Datos</a>

  <a type="button" href="PaginaInicio.php" class="btn btn-danger" style="font-size:15px; margin-top:100px; margin-left:20px;">
  Cancelar</a>


</form>


          </div>
          <script src="EditarPerfil.js"></script>

</body>
</html>