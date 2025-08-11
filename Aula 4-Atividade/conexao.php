<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "";
$db = "crud_exemplo";

$conn = new mysql($hot, $user, $password, $db); // Erro: $hot ao invés de $host

if ($conn->connect_error) {  // Conexão insegura. 
    echo "Falha na conexão!";  // Ao invés de de echo é melhor o Die.
}
?>