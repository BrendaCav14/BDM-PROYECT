<?php

require("./BACKEND/Connection.php");

$consulta=$pdo->prepare("SELECT nombre_Cat,descripcion,FK_vendedor FROM Categoria;");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);



foreach($resultado as $data){
    echo "<tr>
           
           <td>".$data['nombre_Cat']."</td>
           <td>".$data['descripcion']."</td>
           <td>".$data['FK_vendedor']."</td>
        <td>
           <button type='button' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=Editar('".$data['nombre_Cat']."')>Editar Datos</button>
           <button type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=Eliminar('".$data['nombre_Cat']."')>Eliminar</button>
        </td>

    </tr>";

}
?>