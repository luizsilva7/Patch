<?php 
   
   function incluir_usuario($conexao, $u){

        $sql = "INSERT INTO products (nome_produtos, price, image) VALUES ('$u->nome_produtos', '$u->price','$u->image');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>