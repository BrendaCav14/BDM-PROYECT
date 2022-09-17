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


          <div style="background-color:white; width:1100px; height: 600px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Lista</h1>
 
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="producto" class="producto" style="font-size:15px; margin-left:-50px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre de la Lista:</label>
       <input type="text" id="producto" name="producto" style="width:300px; font-size:15px;" placeholder="Nombre"><br></br>
       <label for="descripcion" class="descripcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" style="width:200px; font-size:15px; width:600px;" placeholder="Descripcion corta"><br></br>
<br></br>
<label for="opcion" class="opcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Elija una opcion para su lista</label>
<h5>Si desea que su lista Privada,sera una lista de compras personal</h5>
<h5>Si desea que su lista Publica,sera una wishlist que alguien mas pueda ver en su perfil</h5>

<select name="select" class="opciones" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Publico</option>
          <option value="value2" >Privado</option>
          </select><br></br>

    <div>
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:-80px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagen:   </label>

<img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:300px; margin-top:-130px;">
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 1</label>
<br></br>
   </div>



</div> 

<div style="margin-left:850px; margin-top:40px;">
<a type="button" onclick="alerta()" href="PaginaInicio.php" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-30px;">Agregar Lista</a>
<a type="button" href="PaginaInicio.php" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
        
</div>
</div>
<script src="Listas.js"></script>

</body>
</html>