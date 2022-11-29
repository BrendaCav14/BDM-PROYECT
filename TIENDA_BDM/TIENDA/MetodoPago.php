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
  <!-- <script src="https://www.paypal.com/sdk/js?client-id=ARrje-NKnHnmb4pHLDGQXmn4brT5BFSJQ3mgV_LiA7Io4O6BO30KHz9hOZ6qIRFkI-Pv6iSdtCKTsw7v&currency=MXN&components=buttons"> -->

  <!-- </script> -->
<!-- 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script> -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body>

  <div class="container" >
    <div class="main-body">


      <?php include('navbar.php') ?>



      <div class="Pago" style="width:1490px; height:600px; margin-left:-190px;">


        <div class="col-25" >
          <div class="container" style="margin-left:-50px;">
         

 
          <form method='post'> 
            <div class="container" style="width:500px; height:400px; margin-left:50px; margin-top:0px; background-color:#ececec; border-radius:10%; border:none;">
        <div class="block-heading">
          <h3 style="margin-top:50px; font-size:30px;">Metodo de Pago</h3>
          <p style="font-size:10px;">Por favor llenar los campos necesarios para proceder con su pedido.</p>
        </div>
        
    
        <br>
        <?php
        $id = $_GET["usu"];
        include('./BACKEND/Connection.php');
        $stmt= $pdo->prepare("CALL SP_MetodoPago('X',null,null,null,null,null,null,:usu);");
        $stmt->bindParam(":usu", $id);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC); //User data
 
if($res){
if($res['FK_Comprador'] != $id){

  echo '
  
  <div class="card-details">
    <h4 class="title">Detalles de Tarjeta de Credito</h4>
    <div class="row">
      <div class="form-group col-sm-7">
        <label for="card-holder" style="font-size:20px;">Nombre Tarjeta</label>
        <input name="nombreT" id="nombreT" value="'.$res["Nombre"].'"
        style="font-size:20px; height:35px;" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" autocomplete="off">
      </div>
      <div class="form-group col-sm-5">
        <label for="" style="font-size:20px;">Fecha Exp</label>
        <div class="input-group expiration-date">
        
          <input name="MesExp" id="MesExp" type="text" value="'.$res['MesExp'].'"
          style="font-size:20px; height:35px;" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" maxlength="2" onkeypress="return onlyNumberKey(event)" autocomplete="off">
          <span class="date-separator">/</span>
          <input name="AñoExp" id="AñoExp" type="text"  value="'.$res['AñoExp'].'"
          style="font-size:20px; height:35px;" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" maxlength="2" onkeypress="return onlyNumberKey(event)" autocomplete="off">
        </div>
      </div>
      <div class="form-group col-sm-8">
        <label for="card-number" style="font-size:20px;">Numero de Tarjeta</label>
        <input name="NumT" id="NumT" style="font-size:20px; height:35px;" type="text" value="'.$res['NumTarjeta'].'"
        class="form-control creditCardText" placeholder="XXXX-XXXX-XXXX-XXXX" aria-label="Card Holder" aria-describedby="basic-addon1" maxlength="30" onkeypress="return onlyNumberKey(event)" autocomplete="off">
      </div>
      <div class="form-group col-sm-4">
        <label for="cvc" style="font-size:20px;">CVC</label>
        <input name="cvc" id="cvc" style="font-size:20px; height:35px;" type="text" value="'.$res['CVC'].'"
        class="form-control" placeholder="XXX" aria-label="Card Holder" aria-describedby="basic-addon1"  maxlength="3" onkeypress="return onlyNumberKey(event)" autocomplete="off">
      </div>


   

    </div>
  </div>

</div>';

}

}
else{
echo '
<div class="card-details">
            <h4 class="title">Detalles de Tarjeta de Credito</h4>
            <div class="row">
              <div class="form-group col-sm-7">
                <label for="card-holder" style="font-size:20px;">Nombre Tarjeta</label>
                <input name="nombreT" id="nombreT" style="font-size:20px; height:35px;" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" autocomplete="off">
              </div>
              <div class="form-group col-sm-5">
                <label for="" style="font-size:20px;">Fecha Exp</label>
                <div class="input-group expiration-date">
                  <input name="MesExp" id="MesExp" type="text" style="font-size:20px; height:35px;" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" maxlength="2" onkeypress="return onlyNumberKey(event)" autocomplete="off">
                  <span class="date-separator">/</span>
                  <input name="AñoExp" id="AñoExp" type="text"  style="font-size:20px; height:35px;" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" maxlength="2" onkeypress="return onlyNumberKey(event)" autocomplete="off">
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number" style="font-size:20px;">Numero de Tarjeta</label>
                <input name="NumT" id="NumT" style="font-size:20px; height:35px;" type="text" class="form-control creditCardText" placeholder="XXXX-XXXX-XXXX-XXXX" aria-label="Card Holder" aria-describedby="basic-addon1" maxlength="30" onkeypress="return onlyNumberKey(event)" autocomplete="off">
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc" style="font-size:20px;">CVC</label>
                <input name="cvc" id="cvc" style="font-size:20px; height:35px;" type="text" class="form-control" placeholder="XXX" aria-label="Card Holder" aria-describedby="basic-addon1"  maxlength="3" onkeypress="return onlyNumberKey(event)" autocomplete="off">
              </div>


           
       
            </div>
          </div>
       
      </div>
';

}
?>
 


      
 
   <input style=" padding: 10px 20px 7px 20px;  color:white;	background-color: blue; border-radius: 5px; border: none; cursor: pointer; width: 400px; hover: #f3bb37;"
            type="submit" name="comprar" id="comprar" value="Realizar Compra">

<div style="margin-left:600px; margin-top:-500px; width:880px; height:400px;">
<br>
<h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:60px;">Realizar Compra

              <span class="price" style="color:black; margin-top:-20px; margin-left:350px;">
      <i class="fa fa-shopping-cart" style="margin-left:100px; font-size:50px;"></i> 
      </span></h1>
            <br>
  <input type='hidden' name='Total' id='Total' style='margin-left:400px; width:100px;' value='<?php echo $prod['total']?>'>
  <input type='hidden' name='compraID' id='compraID' value='<?php echo $prod['FK_Comprador']?>' style='width:100px;'>

            <h2 name='importe' id='importe' style='margin-left:550px;'>UNIDAD------SUBTOTAL</h2>  
            <div style="height: 350px; display: block; overflow-y: auto;  overflow-x: hidden; border:none"> 

         
            <div id="metodopago" >
        
            <?php

$id = $_GET["usu"];

include('./BACKEND/Connection.php');
$stmt= $pdo->prepare("CALL SP_CarritoDet('X',null,null,null,null,null,null,null,:usu);");
$stmt->bindParam(":usu", $id);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data

foreach($res as $prod){


  echo " 
  <br>
  <input type='hidden' name='comprador[]' id='comprador' value='".$prod['FK_Comprador']."' style='width:100px;'>

  <input type='hidden' name='cant[]'    id='cant'  value='".$prod['cantidad']."' style='width:100px;'>
  <input type='hidden' name='producto[]' id='producto' value='".$prod['FK_Producto']."' style='width:100px;'>
  <input type='hidden' name='vendedor[]' id='vendedor' value='".$prod['FK_Vendedor']."' style='width:100px;'>
  <input type='hidden' name='precio[]'    id='precio'  value='".$prod['precio']."' style='width:100px;'>
  <input type='hidden' name='importe[]'    id='importe'  value='".$prod['subtotal']."' style='width:100px;'>
  <input type='hidden' name='idcar[]'    id='idcar'  value='2' style='width:100px;'>

  <p> 
<div style='margin-left:100px; margin-top:-10px;'>
<h2 style='margin-left:-80px; max-width:500px; max-lenght:500px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1;'>
  ".$prod['nombre']."</h2> 
<h2 style='margin-left:450px;'>$".$prod['precio']."  
<h2  style='margin-left:600px; margin-top:-30px;'>$".$prod['subtotal']."</h2>    
<h2  style='margin-left:200px; margin-top: 15px;'>Cantidad: ".$prod['cantidad']."</h2>  </h2>

</div> 
</p>
 
  <h2 style='margin-top:-20px;'>Calificacion:
  <select name='calificacion[]' id='calificacion' class='calif' style='font-size:20px; width:130px; margin-top:-50px; margin-left:20px; color:yellow;'>

            <option value='5' style='width:100px; color:yellow; font-size:20px;'>★★★★★</option>
            <option value='4' style='width:100px; color:yellow; font-size:20px;'>★★★★</option>
            <option value='3' style='width:100px; color:yellow; font-size:20px;'>★★★</option>
            <option value='2' style='width:100px; color:yellow; font-size:20px;'>★★</option>
            <option value='1' style='width:100px; color:yellow; font-size:20px;'>★</option>

       
  </select></h2>




  <br>
  <h2>Comentario:</h2>
  <div> <input type='text' name='comentario[]' id='comentario' class='form-control' id='coment' name='coment' style='font-size:20px; background-color:#ececec; color:blue; height:35px;' placeholder='Escriba un comentario' autocomplete='off'></div>

  <br>
  <hr style='border: none; height: 1px; background-color:black'>
  <br>
  </form>";





}



echo ' </div>

            
</div>

            </div>
          
  <hr style="border: none; height: 1px; background-color:black; margin-left:600px; margin-top:80px; width:870px;">
            <h4 style="font-size:30px; font-weight: bold; margin-left:900px; margin-top:-10px;" >TOTAL </h4>';

if($prod["total"] !=  0){

  echo "<h4 style='font-size:25px; font-weight: bold; margin-left:1150px; margin-top:-30px;'>$".$prod["total"]."</h4>";
  }
  else
  {
  echo "<h4 style='font-size:25px; font-weight: bold; margin-left:1150px; margin-top:-30px;' >$0.00</h4>";
  }

 

?>

<?php
if(isset($_POST['comprar'])){

  $idcar = $_POST['idcar'];
  $nombreT = $_POST['nombreT'];
  $MesExp = $_POST['MesExp'];
  $AñoExp = $_POST['AñoExp'];
  $NumT = $_POST['NumT'];
  $CVC = $_POST['cvc'];
 
  $producto = $_POST['producto'];
  $Vendedor = $_POST['vendedor'];
  $precio = $_POST['precio'];
  $importe = $_POST['importe'];
  $cant = $_POST['cant'];
  $cali = $_POST['calificacion'];
  $coment = $_POST['comentario'];
  $Total = $_POST['Total'];
  $Comprador = $_POST['comprador'];
  $CompraID = $_POST['compraID'];

require("./BACKEND/Connection.php");
if(empty($coment) || empty($nombreT) || empty($MesExp) || empty($AñoExp) || empty($NumT) || empty($CVC)){

echo "<script>  Swal.fire({
  icon: 'error',
  title: 'Campos Vacios',
  text: 'Porfavor escriba un comentario en cada producto que desee comprar.',
  timer: 5000 // es ms (mili-segundos)
}) </script>";

}
else{

      $sqlm = "CALL SP_MetodoPago('I',null,:nom,:numt,:mes,:a,:cvc,:comp);";

      $querym =  $pdo->prepare($sqlm);                      
      $querym->bindParam(":nom",$nombreT);
      $querym->bindParam(":numt",$NumT);
      $querym->bindParam(":mes",$MesExp);
      $querym->bindParam(":a",$AñoExp);
      $querym->bindParam(":cvc",$CVC);
      $querym->bindParam(":comp",$CompraID);
      
      $metodo = $querym->execute(); 


$sqlv = "CALL SP_Venta('I', null, null, :t, :c);";

$queryv =  $pdo->prepare($sqlv);                      
$queryv->bindParam(":t",$Total);
$queryv->bindParam(":c",$CompraID);

$venta = $queryv->execute(); 


  foreach($producto as $index => $names){

    // echo $cant[$index]."-".$cali[$index]."-".$coment[$index]."-".$precio[$index]."-".$importe[$index]."-".$names."-".$Comprador[$index]."-".$Vendedor[$index];

    $cantAr = $cant[$index];
    $caliAr = $cali[$index];
    $comentAr = $coment[$index];
    $precioAr = $precio[$index];
    $importeAr = $importe[$index];
    $productoAr = $names;
    $compraAr = $Comprador[$index];
    $vendeAr = $Vendedor[$index];

    // $sql = "VALUES (now(), '$cantAr' , '$caliAr' , '$comentAr' , '$precioAr' , '$importeAr' , '$productoAr' , '$compraAr' , '$vendeAr')";
    $sql="CALL SP_VentaDet('I',null,null,null,'$cantAr','$caliAr','$comentAr','$precioAr','$importeAr','$productoAr', '$compraAr','$vendeAr');";

    $stmt= $pdo->prepare($sql);
    $stmt->execute();



  }

echo "<script>
var nom = document.getElementById('compraID').value; 
Swal.fire({
  title: 'PEDIDO REALIZADO',
  text: 'Muchas Gracias por su preferencia.',
  showDenyButton: true,
  confirmButtonText: 'Aceptar',
}).then((result) => {
  
  if (result.isConfirmed) {
    location.href='PaginaInicio.php?usu='+ nom;
  } 

})</script>"; 

  
        }
      }
 

?>

  <div style="text-align: right; padding-bottom: 40px; margin-top:50px; margin-left:-100px; padding: 10px 20px 7px 20px;">

	</div>

          </div>
        </div>
        </div>

        <hr style="border: none; height: 1px; ">
        <div style="margin-left:-150px; margin-top:-1200px;">
    
     
        <br>

        <br>



          <!-- <div id="paypal-button-container"> -->
          
          <!-- <script>
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
          </script> -->
          </div>

<script>

function onlyNumberKey(evt) {
              
              // Only ASCII character in that range allowed
              var ASCIICode = (evt.which) ? evt.which : evt.keyCode
              if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                  return false;
              return true;
          }

  $('.creditCardText').keyup(function() {
  var foo = $(this).val().split("-").join(""); // remove hyphens
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
  }
  $(this).val(foo);
});
  
</script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

    </div>
  </div>


</body>

</html>