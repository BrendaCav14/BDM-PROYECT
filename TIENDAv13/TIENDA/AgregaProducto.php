<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>AGREGAR PRODUCTO</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="AgregaProducto.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    
    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>


          <form style="background-color:white; width:1100px; height: 2000px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Agregar un Producto</h1>
        <br></br>
        <hr style="border: 3px solid black; width:1090px; border-radius: 5px;">
       
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <div style="margin-top:30px;">
       <label for="producto" class="producto" style="font-size:20px; margin-left:-90px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre</label>
       <input type="text" id="producto" name="producto" class="form-control" style="width:400px; font-size:20px; margin-top:-30px;" placeholder="Nombre del Producto" autocomplete="off">
       </div>   
       <div style="margin-top:-60px;">
          <label for="categoria" class="categoria" style="margin-left:500px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Categoria:</label>
          <select name="select" class="perfiles" style="font-size:20px; width:230px;">
          <option value="value1"  selected>Musica</option>
          <option value="value2" >Arte</option>
          <option value="value3" >Tecnologia</option>
          <option value="value4" >Moda</option>
          <option value="value5" >Aparatos</option>
          <option value="value6" >Videojuegos</option>
          <option value="value7" >Peliculas</option>
          </select><br></br>
        </div>

        

       

<div style="margin-top:50px;">
       <label for="descripcion" class="descripcion" style=" margin-left:-120px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion</label>
       <input type="text" id="descripcion" name="descripcion" class="form-control" style="width:200px; font-size:20px; width:800px; margin-top:-30px;" placeholder="Descripcion corta sobre el producto" autocomplete="off"><br></br>
       </div>
<div style="margin-left=-400px;  margin-top:-10px; font-size:20px;">
<label for="genero" class="genero" style="font-weight: bold; font-family:'Trirong', sans-serif;">Tipo de venta</label>
  
<input type="radio" id="HombreX" name="venta" value="Vender" style="margin-left:10px;">
<label for="HombreX">Vender</label>

<input type="radio" id="MujerX" name="venta" value="Cotizar" style="margin-left:20px;">
<label for="MujerX">Cotizar</label>
   
</div>
 <div >
       <label for="precio" class="precio" style="font-size:20px; margin-left:70px; font-weight: bold; font-family:'Trirong', sans-serif;">Precio: $</label>
       <input type="text" id="precio" name="precio" class="form-control" style="width:150px; font-size:20px; margin-left:150px; margin-top:-30px;" placeholder="0.00"><br></br>
       </div>  
</div>

       
       <label for="cantidad" class="cantidad" style="font-size:20px; margin-left:200px; font-weight: bold; font-family:'Trirong', sans-serif;">Cantidad</label>
       <input type="text" id="precio" name="precio" class="form-control" style="width:100px; font-size:20px; margin-top:-30px; margin-left:300px;" placeholder=""><br></br>

          <br></br>
          <br></br> 
        </div>

    <div style="margin-top:-1400px; margin-left:-200px;">
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:250px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagenes:   </label>

<img src="PRODUCTO/prod.jpg"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:450px; margin-top:-300px;">
 <label style="font-size:15px;">Imagen 1</label>
<input type="file" style="font-size:15px;">

<br>
<label style="font-size:15px;">Imagen 2</label>
<input type="file" style="font-size:15px;">
<br>
<label style="font-size:15px;">Imagen 3</label>
<input type="file" style="font-size:15px;">
<br>
<br>
<label style="font-size:15px;">VIDEO</label>
<input type="file" style="font-size:15px;">
   </div>



<div style="margin-left:800px; margin-top:100px;">
<button type="button" onclick="alerta()" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-60px;">Agregar</button>
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>

<hr style="border: 3px solid black; width:1090px; border-radius: 5px; margin-left:10px;">
</form>  


</div>
</div>
<script src="AgregaProducto.js"></script>

</body>
</html>