<?php 
   

   function pegar_usuario($conexao){
    $dados = json_decode(file_get_contents('php://input'));
    
    $nome_produtos = $dados -> nome_produtos;
    $id = $dados -> id;
    echo $id;
    echo $nome_produtos;

    $sql = "SELECT * FROM products WHERE id = $id AND nome_produtos = '$nome_produtos'";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $usuarios = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id = utf8_encode( $registro['id']);
        $nome_produtos = utf8_encode($registro['nome_produtos']);
        $price = utf8_encode(  $registro['price']);
        $image = utf8_encode( $registro['image']);
       
        
        $novo_usuario = new Usuario($id, $nome_produtos, $price, $image);
        array_push($usuarios ,$novo_usuario);
    };
    
    fecharConexao($conexao);
    return $usuarios;
   };

   
?>