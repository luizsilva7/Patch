<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            $nome_produtos = $dados->nome_produtos;
            $price = $dados->price;
            $image = $dados->image;

    
            $user = new Usuario("", $nome_produtos, $price, $image, );
            return $user;
        }
?>