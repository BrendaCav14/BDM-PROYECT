<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo  "<title>METODO DE PAGO</title>" ?>

  <link rel="stylesheet" href="Cuerpo.css">
  <link rel="stylesheet" href="Pago.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

  <?php include('bootstrap.php') ?>
  <script src="https://www.paypal.com/sdk/js?client-id=ARrje-NKnHnmb4pHLDGQXmn4brT5BFSJQ3mgV_LiA7Io4O6BO30KHz9hOZ6qIRFkI-Pv6iSdtCKTsw7v&currency=MXN&components=buttons">

  </script>"

</head>


<body>

  <div class="container">
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
              <option value="value1" selected>1</option>
              <option value="value2">2</option>
              <option value="value3">3</option>
              <option value="value4">4</option>
              <option value="value5">5</option>
              <option value="value6">6</option>
              <option value="value7">7</option>
              <option value="value8">8</option>
              <option value="value9">9</option>
              <option value="value10">10</option>
            </select>
            <h4>Calificacion:</h4>
            <div class="rate">
              <input type="radio" id="star5" name="rate" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" />
              <label for="star2" title="text"></label>
              <input type="radio" id="star1" name="rate" />
              <label for="star1" title="text"></label>
            </div>
            <br>
            <h4>Comentario:</h4>
            <div> <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
            <br>
            <p><a href="#">Producto 2</a> <span class="price">$5</span></p>

            <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
              <option value="value1" selected>1</option>
              <option value="value2">2</option>
              <option value="value3">3</option>
              <option value="value4">4</option>
              <option value="value5">5</option>
              <option value="value6">6</option>
              <option value="value7">7</option>
              <option value="value8">8</option>
              <option value="value9">9</option>
              <option value="value10">10</option>
            </select>

            <h4>Calificacion:</h4>
            <div class="rate">
              <input type="radio" id="star5" name="rate" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" />
              <label for="star2" title="text"></label>
              <input type="radio" id="star1" name="rate" />
              <label for="star1" title="text"></label>
            </div>
            <br>
            <h4>Comentario:</h4>
            <div> <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
            <br>

            <p><a href="#">Producto 3</a> <span class="price">$8</span></p>
            <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
              <option value="value1" selected>1</option>
              <option value="value2">2</option>
              <option value="value3">3</option>
              <option value="value4">4</option>
              <option value="value5">5</option>
              <option value="value6">6</option>
              <option value="value7">7</option>
              <option value="value8">8</option>
              <option value="value9">9</option>
              <option value="value10">10</option>
            </select>
            <h4>Calificacion:</h4>
            <div class="rate">
              <input type="radio" id="star5" name="rate" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" />
              <label for="star2" title="text"></label>
              <input type="radio" id="star1" name="rate" />
              <label for="star1" title="text"></label>
            </div>
            <br>
            <h4>Comentario:</h4>
            <div> <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
            <br>
            <p><a href="#">Producto 4</a> <span class="price">$2</span></p>
            <select name="select" class="perfiles" style="font-size:13px; width:50px; text-align:center;">
              <option value="value1" selected>1</option>
              <option value="value2">2</option>
              <option value="value3">3</option>
              <option value="value4">4</option>
              <option value="value5">5</option>
              <option value="value6">6</option>
              <option value="value7">7</option>
              <option value="value8">8</option>
              <option value="value9">9</option>
              <option value="value10">10</option>
            </select>
            <h4>Calificacion:</h4>
            <div class="rate">
              <input type="radio" id="star5" name="rate" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" />
              <label for="star2" title="text"></label>
              <input type="radio" id="star1" name="rate" />
              <label for="star1" title="text"></label>
            </div>
            <br>
            <h4>Comentario:</h4>
            <div> <input type="text" id="coment" name="coment" placeholder="Escriba un comentario"></div>
            <br>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
          </div>
        </div>

        <hr>
        <h2 class="metodo_text" style="margin-top:-300px;">Metodo de Pago</h2>
        <p class="ingresar_text">Ingrese los datos necesarios para generar su compra</p>
        <hr>

        <br>
        <div class="col-50" id="aqui2">
          <h3>Pago</h3>

          <div id="paypal-button-container"></div>
          
          <script>
            paypal.Buttons({
              style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
              },
              createOrder: function(data, actions){
                return actions.order.create({
                  purchase_units: [{
                    amount: {
                      value: 100
                    }
                  }]
                });
              }
            }).render('#paypal-button-container');
          </script>

         

      

      </div>
      <br></br>

    </div>
  </div>
  <script src="MetodoPago.js"></script>

</body>

</html>