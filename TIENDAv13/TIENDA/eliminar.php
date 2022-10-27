<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query = $pdo->prepare("DELETE FROM Usuarios WHERE usuario = :usu");

$query->bindParam(":usu",$data);
$query->execute();
echo "ok";


?>