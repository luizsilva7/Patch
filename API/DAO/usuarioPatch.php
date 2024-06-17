<?php
    $conexao = conectar();

function editar_usuario_parcialmente($conexao, $campo, $novo_valor, $id) {
    switch ($campo) {
        case 'nome_produtos':
            $valor = "'$novo_valor'";
            break;
        case 'price':
            $valor = $novo_valor;
            break;
        case 'image':
            $valor = "'$novo_valor'";
            break;
        default:
            die("Campo inválido: $campo");
    }

    $sql = "UPDATE products SET $campo = $valor WHERE id = $id";
    $res = mysqli_query($conexao, $sql);    
    return $res;
}

// Verifica se a requisição é do tipo PATCH
if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    $input = file_get_contents('php://input');
    $dados = json_decode($input, true);

    $id = $dados['id'];
    $campo = $dados['campo'];
    $novo_valor = $dados['novo_valor'];

    $resp = editar_usuario_parcialmente($conexao, $campo, $novo_valor, $id);

    return $resp;
} 

?>