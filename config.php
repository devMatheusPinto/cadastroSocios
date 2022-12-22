<meta charset="utf-8">
<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cobanaSocios";

$conexao = new SQLite3('socios.db');

if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}

?>