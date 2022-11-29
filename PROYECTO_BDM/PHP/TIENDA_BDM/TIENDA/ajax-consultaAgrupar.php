<?php

if($_POST) {

    $Cat =$_POST['Categoria'];
    $f1 = $_POST["date"];
    $f2 = $_POST["date2"];
    $vend = $_POST["vend"];

if($Cat != "nada"){
require("./BACKEND/Connection.php");

$busca= $pdo->prepare("CALL SP_VentaDet('C',:cat,:f,:fin,null,null,null,null,null,null,null,:vend);");
$busca->bindParam(":cat", $Cat);
$busca->bindParam(":f", $f1);
$busca->bindParam(":fin", $f2);
$busca->bindParam(":vend", $vend);
$busca->execute();
$ventas = $busca->fetchAll(PDO::FETCH_ASSOC);
if($ventas){
foreach($ventas as $row)
{
    echo "      <tr>
<td style='width:200px;'>".$row['MES']."</td>
<td style='width:200px;'>".$row['AÑO']."</td>
<td style='width:400px;'>".$row['Categoria']."</td>
<td style='width:200px;'>".$row['Ventas']."</td>

    </tr>";
}

}

else
    {
        echo"<h2 style='margin-top:20px; color:red; '>No hay Resultados.</h2>";
    }


}
else
{
    require("./BACKEND/Connection.php");

    $busca= $pdo->prepare("CALL SP_VentaDet('D',null,:f,:fin,null,null,null,null,null,null,null,:vend);");
    $busca->bindParam(":f", $f1);
    $busca->bindParam(":fin", $f2);
    $busca->bindParam(":vend", $vend);
    $busca->execute();
    $ventas = $busca->fetchAll(PDO::FETCH_ASSOC);
    if($ventas){
    foreach($ventas as $row)
    {
        echo "      <tr>
    <td style='width:200px;'>".$row['MES']."</td>
    <td style='width:200px;'>".$row['AÑO']."</td>
    <td style='width:400px;'>".$row['Categoria']."</td>
    <td style='width:200px;'>".$row['Ventas']."</td>
    
        </tr>";
    }
    
    }
    
    else
        {
            echo"<h2 style='margin-top:20px; color:red; '>No hay Resultados.</h2>";
        }

}

}

?>