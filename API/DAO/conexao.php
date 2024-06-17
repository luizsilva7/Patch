<?php
// conexao.php

// Função para conectar ao banco de dados
function conectar() {
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'db_produtos';

    // realizar a conexão 
    $conexao = mysqli_connect($host, $usuario, $senha, $bd);
    if (mysqli_connect_errno()) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
    return $conexao;
}

// Função para fechar a conexão com o banco de dados
function fecharConexao($conexao) {
    mysqli_close($conexao);
}
?>
