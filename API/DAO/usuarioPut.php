<?php 
   
   function editar_usuario($conexao, $u, $id){

        $sql = "UPDATE products SET nome_produtos = '$u->nome_produtos', price = '$u->price', image = '$u->image' WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>