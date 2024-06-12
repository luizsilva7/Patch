<?php 

    class Usuario{
        public $id;
        public $nome_produtos;
        public $price;
        public $image;

        function __construct($id_informado, $nome_informado, $preco_informado, $imagem_informado){
            $this->id = $id_informado;
            $this->nome_produtos = $nome_informado;
            $this->price = $preco_informado;
            $this->image = $imagem_informado;
        }

        
    }
?>
