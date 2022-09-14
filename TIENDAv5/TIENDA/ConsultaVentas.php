<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CONSULTA DE VENTAS</title>"?>

    <link rel="stylesheet" href="ConsultaVentas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!----->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!------>       
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

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="margin-left:-120px; width:120px; height:75px; text-align:center; background-color:#E88EBA">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
</button>
<div class="offcanvas offcanvas-start"  data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" >
  <div class="offcanvas-header">
  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar" class="avatar">
    <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Tu cuenta: Kenneth56 </h4>
    <br></br>
    <h5 style="margin-top:80px; margin-left:-100px; text-align:center;">Kennet Valdez</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr>
  <div class="offcanvas-body">
    
  <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <button type="button" class="btn btn-light" style="width:100%; text-align:center; font-size:20px; color:#7B1842;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16" style="color:black;">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg>
                  Inicio
                </button>

                  </li>
<hr>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <button type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color:blue;">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                  Perfil
                  </button>
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <button type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16" style="color:red;">
                  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                  </svg>
                  Mis Listas
                  </button>
                  </li>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <button type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16" style="color:green;">
                  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                  </svg>
                  Mis Productos
                  </button>
                  </li>
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <button type="button" class="btn btn-light" style="width:400px; text-align:center; font-size:20px; color:#7B1842;"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16" style="color:#c2830d;">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
</svg>
                  Pedidos
                  </button>
                  </li>
              
                </ul>
              </div>

  </div>
</div>

    <!-- NAVEGADOR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:-75px;">
            <ol >
            <a class="navbar-brand" href="LandingPage.php" style="color:white; font-family: Sofia, sans-serif; font-size:40px;" >Shopping ♥</a>
            
            <form class="form-inline" style="margin-left: 300px; margin-top:10px;">
    
    <input class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" style="width: 300px;font-size:15px;">
    
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:#E7F3FF;font-size:15px;">Buscar</button>
  </form>

 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top:-60px; margin-left:720px; background-color:#D07118">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16" 
    style=" margin-top:3px; color:white;">
    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
  </svg>
    
    Carrito de Compras
    </button>
<div style="margin-top:-60px; margin-left:850px;">
            <a class="tucuenta" style="color:white; margin-left:10px;">Tu cuenta: </a>
            <a class="tucuenta2" style="color:white;" >Kenneth56 </a>
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar" class="avatar">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:950px;">
    <a class="dropdown-item" href="#" >Configuracion</a>
    <a class="dropdown-item" href="#" >Editar Perfil</a>
    <a class="dropdown-item" href="#" >Cerrar Sesion</a>
</div>
  </div> 
            </ol>
          </nav>

          <div style="background-color:white; width:1100px; height: 800px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Ventas realizadas del Vendedor</h1>
 
       <br></br>
       <br></br>
      
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="producto" class="producto">Filtros</label>
       <br></br>
       <label for="producto" class="producto">Rango de Fechas</label>
       <br></br>
       <label for="producto" class="producto" >Inicio:</label>
       <input type="date" id="date" name="trip-start" value="2022-08-31" min="1990-01-01" max="2022-12-31">
       <br></br>
       <label for="producto" class="fin">Fin:</label>
       <input type="date" id="date" name="trip-start" value="2022-08-31" min="1990-01-01" max="2022-12-31">
       <br></br>
       <label for="producto" class="fin">Categoria:</label>
       <select name="select" class="perfiles" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Musica</option>
          <option value="value2" >Arte</option>
          <option value="value3" >Tecnologia</option>
          <option value="value4" >Moda</option>
          <option value="value5" >Aparatos</option>
          <option value="value6" >Videojuegos</option>
          <option value="value7" >Peliculas</option>
          </select>
       <br></br>
       <button type="button" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-70px;">Buscar</button>




</div> 

<div class="consulta1">
 <label for="producto"  >CONSULTA DETALLADA</label>
       <br></br> 
</div>
<div>

<table>
  
  <tr>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Categoria</th>
    <th>Producto</th>
    <th>Calificacion</th>
    <th>Precio</th>
    <th>Existencia</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  
</table>




</div>

<div class="consulta2">
 <label for="producto"  >CONSULTA AGRUPADA</label>
       <br></br> 
</div>
<div>

<table class="table2">
  
  <tr>
    <th>Mes</th>
    <th>Año</th>
    <th>Categoria</th>
    <th>Ventas</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  
</table>




</div>

<div style="margin-left:850px; margin-top:40px;">
<button type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:100px;">Regresar</button>
</div>
        
</div>
</div>

</body>
</html>