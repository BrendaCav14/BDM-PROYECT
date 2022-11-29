<?php
if($_POST) {

    $Cat =$_POST['Categoria'];
    $f1 = $_POST["date"];
    $f2 = $_POST["date2"];
    $vend = $_POST["vend"];

if($Cat != "nada"){
require("./BACKEND/Connection.php");

$busca= $pdo->prepare("CALL SP_VentaDet('A',:cat,:f,:fin,null,null,null,null,null,null,null,:vend);");
$busca->bindParam(":cat", $Cat);
$busca->bindParam(":f", $f1);
$busca->bindParam(":fin", $f2);
$busca->bindParam(":vend", $vend);
$busca->execute();
$ventas = $busca->fetchAll(PDO::FETCH_ASSOC);
if($ventas){
foreach($ventas as $row )
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
}
else
    {
        echo"<h2 style='margin-top:20px; color:red; '>No hay Resultados.</h2>";
    }


}
else{
    require("./BACKEND/Connection.php");

    $busca= $pdo->prepare("CALL SP_VentaDet('B',null,:f,:fin,null,null,null,null,null,null,null,:vend);");
    
    $busca->bindParam(":f", $f1);
    $busca->bindParam(":fin", $f2);
    $busca->bindParam(":vend", $vend);
    $busca->execute();
    $ventas = $busca->fetchAll(PDO::FETCH_ASSOC);
    if($ventas){
    foreach($ventas as $row )
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
    }
    else
    {
        echo"<h2 style='margin-top:20px; color:red; '>No hay Resultados.</h2>";
    }

}




}

?>