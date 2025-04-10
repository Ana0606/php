<?php

// Configurações de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste";

// Criando conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificando conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem sucedida!";

?>