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


          <div style="background-color:white; width:1100px; height: 550px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Agregar un Producto</h1>
 
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="producto" class="producto" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Nombre del Producto:</label>

       <input type="text" id="producto" name="producto" style="width:300px; font-size:15px;" placeholder="Nombre del Producto"><br></br>
       <label for="descripcion" class="descripcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Descripcion:</label>

       <input type="text" id="descripcion" name="descripcion" style="width:200px; font-size:15px; width:600px;" placeholder="Descripcion corta sobre el producto"><br></br>
       <label for="categoria" class="categoria" style="margin-left:15px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Categoria:</label>

       <select name="select" class="perfiles" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Musica</option>
          <option value="value2" >Arte</option>
          <option value="value3" >Tecnologia</option>
          <option value="value4" >Moda</option>
          <option value="value5" >Aparatos</option>
          <option value="value6" >Videojuegos</option>
          <option value="value7" >Peliculas</option>
          </select><br></br>
       <label for="precio" class="precio" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">Precio: $</label>
       <input type="text" id="precio" name="precio" style="width:200px; font-size:15px; width:100px;" placeholder="200.00"><br></br>
       <label for="cantidad" class="cantidad" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">Cantidad:</label>
       <select name="select" class="perfiles" style="font-size:15px; width:50px; text-align:center;">
          <option value="value1"  selected>1</option>
          <option value="value2" >2</option>
          <option value="value3" >3</option>
          <option value="value4" >4</option>
          <option value="value5" >5</option>
          <option value="value6" >6</option>
          <option value="value7" >7</option>
          <option value="value8" >8</option>
          <option value="value9" >9</option>
          <option value="value10" >10</option>
          </select>
          <br></br>
          <br></br> 
        </div>


        <div style="margin-left:500px; margin-top:-150px;">
       <label for="calificacion" class="calificacion" style="margin-left:15px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Calificacion:</label>
       <br>
  <div class="rate" style="margin-left:100px; margin-top:-40px">
    <input type="radio" id="star5" name="rate"  />
    <label for="star5" title="text"></label>
    <input type="radio" id="star4" name="rate"/>
    <label for="star4" title="text"></label>
    <input type="radio" id="star3" name="rate" />
    <label for="star3" title="text"></label>
    <input type="radio" id="star2" name="rate"/>
    <label for="star2" title="text"></label>
    <input type="radio" id="star1" name="rate"/>
    <label for="star1" title="text"></label>
 </div>
  
  <br></br>
  <label for="comentarios" class="comentarios" style="margin-left:15px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Comentario:</label>
  <input type="text" id="comentarios" name="comentarios" style="width:450px;font-size:15px;"  placeholder="Escribe un comentario"><br></br>

    </div>

    <div>
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:80px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagenes:   </label>

<img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:400px; margin-top:-180px;">
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 1</label>
<br></br>
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 2</label>
<br></br>
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 3</label>
<br></br>
   </div>



</div> 

<div style="margin-left:850px; margin-top:-40px;">
<button type="button" onclick="alerta()" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-30px;">Agregar</button>
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
        
</div>
</div>
<script src="AgregaProducto.js"></script>

</body>
</html>