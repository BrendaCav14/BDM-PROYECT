<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>MIS PRODUCTOS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>



          <div style="background-color:white; width:1100px; height: 620px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:400px;">Autorizar Productos</h1>

 <br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row" style="background-color:pink; border-radius: 5% ;  height: 500px; display: block; overflow-y: auto;  overflow-x: hidden;">


<div id ="prod" name="prod">


</div>

 
    </div>
</div>
  


</div>

<script src="autorizarprod.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>