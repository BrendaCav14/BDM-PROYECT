<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CREAR LISTAS</title>"?>

    <link rel="stylesheet" href="Listas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
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
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:450px; background-color:#D07118">
    
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

          <div style="background-color:white; width:1100px; height: 600px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Lista</h1>
 
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="producto" class="producto" style="font-size:15px; margin-left:-50px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre de la Lista:</label>
       <input type="text" id="producto" name="producto" style="width:300px; font-size:15px;" placeholder="Nombre"><br></br>
       <label for="descripcion" class="descripcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" style="width:200px; font-size:15px; width:600px;" placeholder="Descripcion corta"><br></br>
<br></br>
<label for="opcion" class="opcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Elija una opcion para su lista</label>
<h5>Si desea que su lista Privada,sera una lista de compras personal</h5>
<h5>Si desea que su lista Publica,sera una wishlist que alguien mas pueda ver en su perfil</h5>

<select name="select" class="opciones" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Publico</option>
          <option value="value2" >Privado</option>
          </select><br></br>

    <div>
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:-80px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagen:   </label>

<img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:300px; margin-top:-130px;">
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 1</label>
<br></br>
   </div>



</div> 

<div style="margin-left:850px; margin-top:40px;">
<button type="button" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-30px;">Agregar Lista</button>
<button type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</button>
</div>
        
</div>
</div>

</body>
</html>