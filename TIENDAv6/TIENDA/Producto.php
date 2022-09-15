<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>PRODUCTO</title>"?>
    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="Producto.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>
 
</head>
<body>

<div class="container">
<div class="main-body">




<?php include('navbar.php') ?>

<?php include('carrito.php') ?>
  

<!--------------------------------------------------------------------------------------------------------->


        <div style="background-color:white; width:800px; height: 600px; margin-left:5px; text-align:center;">
        <br></br>
            <h2 class="titulos" style="padding: 10px 50px 20px;">PRISMACOLOR PAQUETE COMPLETO</h2>
            
       <br></br>

       <div class="container" style="margin-top:10px;width:600px;height:300px">
    <div id="myCarousel" class="carousel slide" data-bs-interval="false" data-ride="carousel" data-pause="hover">
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active" style="width:600px;height:300px">
      <img src="https://m.media-amazon.com/images/I/91rOoYtKIaL._AC_SL1500_.jpg" alt="Imagen1" style="margin-left:100px; width:400px; height:300px;">
    </div>

    <div class="item" style="width:600px;height:300px">
      <img src="https://m.media-amazon.com/images/I/71TNbwHO9+L._AC_SL1500_.jpg" alt="Imagen2"  style="margin-left:100px; width:400px; height:300px;">
    </div>

    <div class="item" style="width:600px;height:300px">
      <img src="https://m.media-amazon.com/images/I/81KCdrQMO0L._AC_SL1500_.jpg" alt="Imagen3" style="margin-left:100px; width:400px; height:300px;">
    </div>

    <div class="item" style="width:600px;height:300px">
      <img src="https://m.media-amazon.com/images/I/81KCdrQMO0L._AC_SL1500_.jpg" alt="Imagen3" style="margin-left:100px; width:400px; height:300px;">
    </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
       <br></br>



       <br></br>

       <p style="font-size:15px; padding: 10px 50px 20px;">Grueso, resistente a resistir el agrietamiento y desportilladuras. ideal para adulto libros para colorear. Respaldado por la garantía de 90 días.</p>

</div>

<div style="background-color:white; width:300px; height: 600px; margin-left:810px; margin-top:-600px; text-align:center;">
          <br></br>
          <h2>Precio en Venta:</h2>
          <h1>$ 1,200.00</h1>
          <br>
          <button type="button" class="btn btn-primary" data-toggle="modal2" data-target="#myModal2" style="width:150px; font-size:15px; background-color: #367c66; color:white;">
          Cotizar Producto
          </button>
          <br></br>
          <h4>Categoria:</h4>
          <h4>Arte y Manualidades</h4>
          <br></br>
          <h4>Cantidad:</h4>
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
          <br>
          <h4 style="margin-top:30px;">Calificacion:</h4>

          <div class="rate" style="margin-left:60px;">
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
          <h4 style="margin-top:50px;">Entrega GRATIS en todo Mexico</h4>
          <br>
          <button type="button" class="btn btn-primary" style="width:250px; font-size:15px; background-color:#F2933A">
          Agregar a la WishList
          </button>
          <br>
          <button type="button" class="btn btn-primary" style="width:250px; margin-top:20px; font-size:15px; background-color:#D07118">
          Agregar al Carrito
          </button>
        </div>


          <div style="background-color:white; width:1100px; height: 1500px; margin-left:5px; margin-top:10px">
          <br></br>
          <h1 style="margin-left:100px; color:#D07118; font-weight: bolder; font-size:30px;">Articulos Similares</h1>
          <br></br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-3" style="border-radius: 5% ; height:260px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br>
        <img src="https://m.media-amazon.com/images/I/81SsBn7sRKL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen1" style="width:90px; height:90px;">
    <h5 class="card-title" style="font-size:20px">Paper Mate - Bolígrafos</h5>
    <p class="card-text">Black, Blue, Magenta, Green, lilac, Lime, Orange, Pink, Purple, Red, sky, marigold</p>
    <p style="font-size:15px">Precio: $400.00</p>
        
          </div>
        <div class="custom-column-footer" style="text-align:center;"><button class="btn btn-primary btn-lg">Agregar al Carrito</button></div>
      </div>
    </div>

    <div class="col-sm-6 col-md-3" style="border-radius: 5% ; height:260px; background-color:#E7F3FF;">
      <div class="custom-column">        
      
      <div class="custom-column-content" style="text-align:center;">
        <br>
        <img src="https://m.media-amazon.com/images/I/91U4dloJNZL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen2" style="width:90px; height:90px;">
    <h5 class="card-title" style="font-size:20px">Marcadores de tiza</h5>
    <p class="card-text"> 8 colores vibrantes para ayudar a que tus diseños, mensajes y lemas salgan de pizarras o pizarras blancas. </p>
    <p style="font-size:15px">Precio: $250.00</p>
        
          </div>
        <div class="custom-column-footer" style="text-align:center;"><button class="btn btn-primary btn-lg">Agregar al Carrito</button></div>
      </div>
      </div>

      <div class="col-sm-6 col-md-3" style="border-radius: 5% ; height:260px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br></br>
        <ol>
        <img src="https://m.media-amazon.com/images/I/71i2HikoGNL._AC_SL1500_.jpg" class="card-img-top" alt="Imagen3" style="width:80px; height:80px;">
    <h5 class="card-title" style="font-size:20px">Marcadores-Crayola</h5>
    <p class="card-text">10 unidades. Marcadores trazo ancho originales, clásicos, 1, Variados</p>
    <p style="font-size:15px">Precio: $400.00</p>
        </ol>
          </div>
        <div class="custom-column-footer" style="text-align:center;"><button class="btn btn-primary btn-lg">Agregar al Carrito</button></div>
      </div>
    </div>

    <div class="col-sm-6 col-md-3" style="border-radius: 5% ; height:260px; background-color:#E7F3FF;">
      <div class="custom-column">        
      
      <div class="custom-column-content" style="text-align:center;">
        <br></br>
        <img src="https://m.media-amazon.com/images/I/81FS5fZNY4L._AC_SL1500_.jpg" class="card-img-top" alt="Imagen4" style="width:80px; height:80px;">
    <h5 class="card-title" style="font-size:20px">Caliart-pintura acrílica</h5>
    <p class="card-text">12 pinceles, 24 colores (2.0 fl oz, 2 onzas), pinturas artísticas para artistas, niños, estudiantes</p>
    <p style="font-size:15px">Precio: $480.00</p>
        
          </div>
        <div class="custom-column-footer" style="text-align:center;"><button class="btn btn-primary btn-lg">Agregar al Carrito</button></div>
      </div>
      </div>

  </div>
</div>

<br></br>
<br></br>
<br></br>

<h1 style="margin-left:400px; color:#D07118; font-weight: bolder; font-size:30px;">Comentarios del Producto</h1>

<!-- CARDS -->         
<div class="container" style="margin-left:200px;">
  <div class="row">
    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:250px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br>
        <div>
        <img src="IMG/Imagen1.jpg" class="card-img-top" alt="Imagen1" style="border-radius:80%; width:50px; height:50px;">
        <h5>Ashley Burton</h5>
        </div>
    <div class="rate" style="margin-left:260px;">
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
  <br></br>
    <p class="card-text" style="font-size:13px; color:gray;"> 5 de septiembre de 2021 </p>
    <p style="font-size:14px">Tienen colores muy bonitos y es una buena marca,tambien me gustaria decir que la entrega fue buena. Me gustaria decir que mis amigos los usan.</p>
        
          </div>

        </div>
    </div>

    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:250px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br>
        <div>
        <img src="IMG/Imagen2.jpg" class="card-img-top" alt="Imagen1" style="border-radius:80%; width:50px; height:50px;">
        <h5>John Green</h5>
        </div>
    <div class="rate" style="margin-left:260px;">
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
  <br></br>
    <p class="card-text" style="font-size:13px; color:gray;"> 16 de octubre de 2021 </p>
    <p style="font-size:14px">Increibles para usarlos con mis hijas y que puedan dibujar lo que quieran.</p>
        
          </div>

        </div>
    </div>

    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:250px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br>
        <div>
        <img src="IMG/Imagen3.jpg" class="card-img-top" alt="Imagen1" style="border-radius:80%; width:50px; height:50px;">
        <h5>Alberto Contreras</h5>
        </div>
    <div class="rate" style="margin-left:260px;">
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
  <br></br>
    <p class="card-text" style="font-size:13px; color:gray;"> 23 de octubre de 2021 </p>
    <p style="font-size:14px">Me encanta dibujar con ellos !</p>
        
          </div>

        </div>
    </div>

    <div class="col-sm-24 col-md-8" style="border-radius: 5% ; height:250px; background-color:#E7F3FF;">
      <div class="custom-column">
        
        <div class="custom-column-content" style="text-align:center;">
        <br>
        <div>
        <img src="IMG/Imagen4.jpg" class="card-img-top" alt="Imagen1" style="border-radius:80%; width:50px; height:50px;">
        <h5>Fatima Rodriguez</h5>
        </div>
    <div class="rate" style="margin-left:260px;">
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
  <br></br>
    <p class="card-text" style="font-size:13px; color:gray;"> 1 de noviembre de 2021 </p>
    <p style="font-size:14px">Quiero decir que los colores duran mucho y muy resistentes. Excelente producto realmente lo recomiendo.</p>
        
          </div>

        </div>
    </div>
    

</div>

</div>


<!----------------------------------------------------------------------------------------------------------------->
          
<div class="container" >
  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CARRITO DE COMPRAS</h4>
          <button type="button" class="close" data-dismiss="modal2">&times;</button>
        </div>
        
        
   
    </div>
  </div> 
         <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" href="" class="btn btn-success" href="" style="font-size:medium;">Continuar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal2" style="font-size:medium;">Close</button>
        </div>

        </div>
      </div>
    </div>

  </div>
  

<!--------------------------------------------------------------------------------------------------------->


</body>
</html>