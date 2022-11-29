<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CONSULTA DE VENTAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="ConsultaVentas.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   

    <script>

function BuscarVentas() {

event.preventDefault();
            var exist = true;
            var exist2 = false;
            var cat=$('#Categoria').val();
            var fecha_inicio=$('#date').val(); 
            var fecha_fin=$('#date2').val(); 
            var vend=$('#vend').val();
            console.log(cat);
            console.log(fecha_inicio);
            console.log(fecha_fin);
            console.log(vend);
//envio a tablaj.php
jQuery.ajax({

            type:"POST",
            url:"ajax-consultaVentas.php",
            data:'Categoria=' + cat +'&date='+ fecha_inicio +'&date2='+ fecha_fin +'&vend='+ vend,
                    success:function(data){
                      $("#resultado1").html(data);

jQuery.ajax({

type:"POST",
url:"ajax-consultaAgrupar.php",
data:'Categoria=' + cat +'&date='+ fecha_inicio +'&date2='+ fecha_fin +'&vend='+ vend,
        success:function(data){
          $("#resultado2").html(data);

         } 
      

});

                     } 
                  

        });

};

</script>

</head>
<body>

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

          <div style="background-color:white; width:1490px; height: 1300px; margin-left:-190px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:500px;">Ventas realizadas del Vendedor</h1>
 
       <br></br>
       <br></br>
      <form method="POST" action="ConsultaVentas.php?usu=<?php echo $data['ID_usuario']?>">
       <input type="hidden" id="vend" name="vend" value="<?php echo $data['ID_usuario']?>" > 
      <div class="InfoProducto" style=" margin-left:200px; margin-top:-100px;">
       <label for="producto" class="producto" style="font-size:20px; margin-top:-250px; ">Filtros de busqueda:</label>
       <select name="Categoria" id="Categoria" class="cat" style="font-size:20px; width:250px; margin-top:150px; margin-left:500px; ">
       <option value="nada">Elije una Categoria...</option>
          <?php 
          require("./BACKEND/Connection.php");

          $consulta = $pdo ->prepare("CALL SP_Categoria('K', null, null, null, null);");
          $consulta->execute();
          $resultado = $consulta->fetchAll();

          
          foreach($resultado as $data){
            echo '<option value="'.$data["nombre_Cat"].'">'.$data["nombre_Cat"].'</option>';

         }
        
          ?>
          </select>
      
       <br></br>
       <div style="margin-left:100px; margin-top:-20px;">
       <label for="producto" class="producto" style="font-size:20px;">Inicio:</label>
       <input type="date" id="date" name="date" value="2022-10-20" min="1990-01-01" max="2022-11-31"  style="font-size:20px;  width:200px;">
        </div>
       <br></br>
       <div style="margin-left:400px; margin-top:-68px;">
       <label for="producto" class="fin" style="font-size:20px;">Fin:</label>
       <input type="date" id="date2" name="date2" value="2022-11-24" min="1990-01-01" max="2022-11-31"  style="font-size:20px; width:200px;">
        </div>
       <br></br>

       <br></br>
       <input type="submit" id-="buscaVentas" name="buscaVentas" class="btn btn-success" style="width:130px; font-size:15px; margin-left:650px; margin-top:-100px;" value="Buscar" 
       onclick="BuscarVentas(this)">

</form>


</div> 

<div class="consulta1" style="margin-left:100px; margin-top:10px; font-size:25px;">
 <label >CONSULTA DETALLADA</label>
       <br>
</div>


<div class="col-lg-11">
    <table class="table table-hover table-responsive" style="margin-left:10px; margin-top:20px; " >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          
    <th style="width:220px;">Fecha</th>
    <th style="width:220px;">Hora</th>
    <th style="width:300px;">Categoria</th>
    <th style="width:1300px;">Producto</th>
    <th style="width:150px;">Calificacion</th>
    <th style="width:200px;">Precio</th>
    <th style="width:200px;">Subtotal</th>
    <th style="width:100px;">Existencia</th>
        </tr>
      </thead>
      <form method="post">
      <tbody id="resultado1" style="font-size:13px; display: block; height:200px; overflow-y: auto;  overflow-x: hidden;">
<?php

require("./BACKEND/Connection.php");
$vend = $_GET['usu'];
$consulta= $pdo->prepare("CALL SP_VentaDet('X',null,null,null,null,null,null,null,null,null,null, :vend);");
$consulta->bindParam(":vend", $vend);
$consulta->execute();
$res = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach($res as $row)
{
  
  if($row['promedio'] == 5){
    echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★★★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
}
if($row['promedio'] == 4){
  echo "      <tr>
  <td style='width:220px;'>".$row['Fecha']."</td>
  <td style='width:150px;'>".$row['Hora']."</td>
  <td style='width:200px;'>".$row['Categoria']."</td>
  <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
  <td style='width:100px; color:yellow; font-size:20px;'>★★★★</td>
  <td style='width:200px;'>".$row['Precio']."</td>
  <td style='width:200px;'>".$row['Subtotal']."</td>
  <td style='width:100px;'>".$row['Cantidad']."</td>

  </tr>";
  }
if($row['promedio'] == 3){
  echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
    }
if($row['promedio'] == 2){
  echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
      }
if($row['promedio'] == 1){
  echo "      <tr>
  <td style='width:220px;'>".$row['Fecha']."</td>
  <td style='width:150px;'>".$row['Hora']."</td>
  <td style='width:200px;'>".$row['Categoria']."</td>
  <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
  <td style='width:100px; color:yellow; font-size:20px;'>★</td>
  <td style='width:200px;'>".$row['Precio']."</td>
  <td style='width:200px;'>".$row['Subtotal']."</td>
  <td style='width:100px;'>".$row['Cantidad']."</td>

  </tr>";
        }
}

?>

      </tbody>

</form>
    </table>

</div>

<div class="consulta2" style="margin-left:200px; margin-top:100px; font-size:25px;">
 <label for="producto"  >CONSULTA AGRUPADA</label>
       <br>
</div>


<div class="col-lg-8">
    <table class="table table-hover table-responsive" style="margin-left:100px; margin-top:20px;" >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          
    <th style="width:200px;">Mes</th>
    <th style="width:200px;">Año</th>
    <th style="width:400px;">Categoria</th>
    <th style="width:200px;">Ventas</th>
        </tr>
      </thead>
      <tbody id="resultado2" style="font-size:13px; display: block; height: 200px; overflow-y: auto;  overflow-x: hidden;">
      <?php

require("./BACKEND/Connection.php");
$vend = $_GET['usu'];
$consulta= $pdo->prepare("CALL SP_VentaDet('Y',null,null,null,null,null,null,null,null,null,null, :vend);");
$consulta->bindParam(":vend", $vend);
$consulta->execute();
$resu = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($resu as $row){
echo "      <tr>
<td style='width:200px;'>".$row['MES']."</td>
<td style='width:200px;'>".$row['AÑO']."</td>
<td style='width:400px;'>".$row['Categoria']."</td>
<td style='width:200px;'>".$row['Ventas']."</td>

    </tr>";
}

?>


      </tbody>

    </table>

</div>

<div style="margin-left:850px; margin-top:200px;">
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:500px;  margin-top:-400px;">Regresar</a>
</div>
        
</div>
</div>

</body>
</html>