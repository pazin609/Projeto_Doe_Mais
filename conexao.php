<?php
$usuario = 'root';
$senha = '';
$database = 'cadastro';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Fala na conexão no banco de dados:" . $mysqli->error);
}