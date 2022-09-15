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

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>



<div class="Pago">


<div class="col-25">
    <div class="container">
      <h1>Carrito <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h1>
      <br></br>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
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
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
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

      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
    
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
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>

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
  <br></br>
  <hr>
  <h2 class="metodo_text">Metodo de Pago</h2>
<p  class="ingresar_text">Ingrese los datos necesarios para generar su compra</p>

<br></br>
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
            <div class="row">
              <div class="col-50">
                <label for="state"id="estado" >Estado</label>
                <input type="text" id="state" name="state" placeholder="NY"> 
              </div>
             <br></br>
              <div class="col-50">
                <label for="zip" id="CP">Codigo Postal</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
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
            <a href="PaginaInicio.php" type="button" href="Producto.php" id="cancelar" class="btn btn-danger" value="Cancelar">

    </div>       
<br></br>

</div>
</div>
<script src="MetodoPago.js"></script>

</body>
</html>