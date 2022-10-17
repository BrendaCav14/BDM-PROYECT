<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php echo  "<title>METODO DE PAGO</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="Pago.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>
    
  </head>


<body>

<div class="container" >
<div class="main-body">


    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>



<div class="Pago">


<div class="col-25">
    <div class="container" style="height:1300px;">
      <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Realizar Compra</h1>
      <h1>Carrito <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h1>
      <br>
      <p><a href="#">Producto 1</a> <span class="price">$15</span></p>
      <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
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
      <h4>Calificacion:</h4> 
      <div class="rate">
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
  <br>
  <h4 >Comentario:</h4>
  <div>  <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
 <br>
      <p><a href="#">Producto 2</a> <span class="price">$5</span></p>

      <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
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

      <h4>Calificacion:</h4> 
      <div class="rate">
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
  <br>
  <h4 >Comentario:</h4>
  <div>  <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
 <br>

      <p><a href="#">Producto 3</a> <span class="price">$8</span></p>
     <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
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
      <h4>Calificacion:</h4> 
      <div class="rate">
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
  <br>
  <h4 >Comentario:</h4>
  <div>  <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
 <br>
      <p><a href="#">Producto 4</a> <span class="price">$2</span></p>
      <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
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
      <h4>Calificacion:</h4> 
      <div class="rate">
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
  <br>
  <h4 >Comentario:</h4>
  <div>  <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
 <br>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>

  <hr>
  <h2 class="metodo_text" style="margin-top:-300px;">Metodo de Pago</h2>
<p  class="ingresar_text">Ingrese los datos necesarios para generar su compra</p>
<hr>

<div class="row">
<div class="col-50" id="aqui">
            <h3 class="fact">Facturacion</h3>
            <br>
            <label for="fname"><i id="name" class="fa fa-user"></i> Nombre:</label>
            <input type="text" id="fname" name="firstname" placeholder="Brenda">
            <label for="fname"><i id="name2" class="fa fa-user"></i> Segundo Nombre:</label>
            <input type="text" id="fname" name="firstname" placeholder="Stefania"><br></br>
            <label for="fname"><i id="name3" class="fa fa-user"></i> Apellido Paterno:</label>
            <input type="text" id="fname" name="firstname" placeholder="Cavazos">
            <label for="fname"><i id="name4" class="fa fa-user"></i> Apellido Materno:</label>
            <input type="text" id="fname" name="firstname" placeholder="Contreras"><br></br>
            <label for="email"><i id="email-text" class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="ejemplo@hotmail.com"><br></br>
            <label for="adr"><i id="adress" class="fa fa-address-card-o"></i> Calle</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i id="ciudad" class="fa fa-institution"></i> Ciudad</label>
            <input type="text" id="city" name="city" placeholder="New York">
            <br></br>
           
              <div>
                <label for="state"id="estado" >Estado</label>
                <input type="text" id="state" name="state" placeholder="NY"> 
                <label for="zip" id="CP">Codigo Postal</label>
                <input style="width:60px;" type="text" id="zip" name="zip" placeholder="10001">
              </div>

            </div>
            </div>
<br>
            <div class="col-50" id="aqui2">
            <h3>Pago</h3>
            <label for="fname">Tarjetas Aceptadas</label>
            <div class="icon-container" id="tarjetas">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <br>
            <label for="cname">Nombre de Tarjeta</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum" id="numcc">Numero de Tarjeta de Credito</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br></br>
            <label for="expmonth" id="expmes">Mes Exp</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <label for="expyear" id="expaño">Año Exp</label>
            <input type="text" id="expyear" name="expyear" placeholder="2018">
            <label for="cvv" id="cvv-text">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">
           
            </div>

            <input type="button" onclick="alerta()" id="comprar" class="btn btn-success" value="Realizar Compra">
            <a type="button" href="Producto.php" id="cancelar" class="btn btn-danger">Cancelar</a>
          
    </div>       
<br></br>

</div>
</div>
<script src="MetodoPago.js"></script>

</body>
</html>