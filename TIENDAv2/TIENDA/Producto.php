<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>PRODUCTO</title>"?>

    <link rel="stylesheet" href="Producto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
<div class="main-body">


     <!-- NAVEGADOR -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ol >
            <a class="navbar-brand" href="LandingPage.php" style="color:white; font-family: Sofia, sans-serif; font-size:40px;" >Shopping ♥</a>
            
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:500px; background-color:#D07118">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16" 
    style=" margin-top:3px; color:white;">
    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
  </svg>
    
    Carrito de Compras
    </button>

    
    

            <a class="tucuenta" style="color:white; margin-left:10px;">Tu cuenta: </a>
            <a class="tucuenta2" style="color:white;" >Kenneth56 </a>
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar" class="avatar">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:950px;">
    <a class="dropdown-item" href="#" >Configuracion</a>
    <a class="dropdown-item" href="#" >Editar Perfil</a>
    <a class="dropdown-item" href="#" >Cerrar Sesion</a>

  </div> 
            </ol>
          </nav>
<!----------------------------------------------------------------------------------------------------------------->
          
    <div class="container" >
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CARRITO DE COMPRAS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="col-25">
    <div class="container">
      <h4>PRODUCTOS <span class="price" style="color:black; margin-left:330px;"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a class="product" href="#">Producto 1</a> 

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
      <span class="price">$15</span></p>
      <p><a class="product" href="#">Producto 2</a> 
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
      <span class="price">$5</span></p>
      <p><a class="product" href="#">Producto 3</a> 
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
      <span class="price">$8</span></p>
      <p><a class="product" href="#">Producto 4</a> 
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
      <span class="price">$2</span></p>
      <hr>
      <p class="total">Total <span class="price2" style="color:black"><b>$30</b></span></p>
    </div>
  </div> 
         <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-success" href="MetodoPago.php" style="font-size:medium;">Continuar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size:medium;">Close</button>
        </div>

        </div>
      </div>
    </div>

  </div>
  

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
          <br></br>
          <h4 style="margin-top:80px;">Calificacion:</h4>

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
         
          <br></br>
          <h4 style="margin-top:70px;">Entrega GRATIS en todo Mexico</h4>
          <br>
          <button type="button" class="btn btn-primary" style="width:250px; font-size:15px; background-color:#D07118">
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


</body>
</html>