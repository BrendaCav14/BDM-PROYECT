<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query = $pdo->prepare("DELETE FROM Categoria WHERE nombre_Cat = :id");

$query->bindParam(":id",$data);
$query->execute();
echo "ok";


?>