<?php

require("./BACKEND/Connection.php");

$consulta=$pdo->prepare("SELECT usuario,nombre,nombre2,ApPat,ApMat,email,FN,Cuenta,Rol,FechaIngreso FROM Usuarios;");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($resultado as $data){
    echo "<tr>
           <td>".$data['usuario']."</td>
           <td>".$data['nombre']."</td>
           <td>".$data['nombre2']."</td>
           <td>".$data['ApPat']."</td>
           <td>".$data['ApMat']."</td>
           <td>".$data['email']."</td>
           <td>".$data['FN']."</td>
           <td>".$data['Cuenta']."</td>
           <td>".$data['Rol']."</td>
           <td style='width:400px;'>".$data['FechaIngreso']."</td>

        <td>
           <button type='button' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=Editar('".$data['usuario']."')>Editar Datos</button>
           <button type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=Eliminar('".$data['usuario']."')>Eliminar</button>
        </td>

    </tr>";

}

?>