<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CREAR LISTAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>
</head>
<body>

<div class="container">
<div class="main-body">

    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>


          <form style="background-color:white; width:1100px; height: 1000px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Lista</h1>
 
       <br></br>
       <hr style="border: 3px solid black; width:1090px; border-radius: 5px;">
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <div style="margin-top:30px;">
       <label for="producto" class="producto" style="font-size:20px; margin-left:-90px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre</label>
       <input type="text" id="producto" name="producto" class="form-control" style="width:400px; font-size:20px; margin-top:-30px;" placeholder="Nombre de la lista" autocomplete="off">
       </div>   
       <div style="margin-top:10px;">
       <label for="producto" class="producto" style="font-size:20px; margin-left:-120px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion</label>
       <input type="text" id="producto" name="producto" class="form-control" style="width:850px; font-size:20px; margin-top:-30px;" placeholder="Descripcion corta..." autocomplete="off">
       </div> 
       <br>
<label for="opcion" class="opcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Elija una opcion para su lista</label>
<h5>Si desea que su lista Privada,sera una lista de compras personal</h5>
<h5>Si desea que su lista Publica,sera una wishlist que alguien mas pueda ver en su perfil</h5>

<select name="select" class="opciones" style="font-size:20px; width:150px;">
          <option value="value1"  selected>Publico</option>
          <option value="value2" >Privado</option>
          </select><br></br>

    <div>
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:-80px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagen:   </label>

<img src="PRODUCTO/prod.jpg" alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:300px; margin-top:-180px;">
 <label style="font-size:15px;">Imagen</label>
<input type="file" style="font-size:15px;">
   </div>



</div> 

<div style="margin-left:850px; margin-top:80px;">
<a type="button" onclick="alerta()" href="PaginaInicio.php" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-200px;">Agregar Lista</a>
<a type="button" href="PaginaInicio.php" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
<hr style="border: 3px solid black; width:1090px; border-radius: 5px;">  
</form>
   
</div>
</div>
<script src="Listas.js"></script>

</body>
</html>