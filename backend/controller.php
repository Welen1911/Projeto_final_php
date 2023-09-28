<?php 
    class Controller {
        protected $con;
        private $user;
        private $produtos;

        public function __construct($con)
        {
            $this->con = $con;
        }

        public function cadastrar($nome, $email, $userName, $tipo, $senha) {
            $sql = "INSERT INTO `usuarios`(`nome`, `email`, `username`, `tipo`, `senha`) VALUES ('$nome', '$email', '$userName', '$tipo', '$senha')";
            if(!mysqli_query($this->con, $sql)) echo "Erro: ".mysqli_error($this->con);
            else {
                    echo "Cadastro feito com sucesso!";
            }
        }

        public function getId($id) {
            $sql = "SELECT `id`, `nome`, `email`, `username`, `tipo` FROM `usuarios` WHERE id = '$id'";

            $fetch = mysqli_query($this->con, $sql);
            if (!$fetch) echo "Erro: ".mysqli_error($this->con);
            else {
                return mysqli_fetch_object($fetch);
            }
        }






        public function getProducts() {
            $sql = "SELECT * FROM `produtos`";

            $fetch = mysqli_query($this->con, $sql);
            if (!$fetch) echo "Erro: ".mysqli_error($this->con);
            else {
                return mysqli_fetch_all($fetch);
            }
        }

        public function cadastrarProduto($nome, $descricao, $preco, $tipo) {

            $sql = "SELECT `id` FROM `tipos_produtos` WHERE nome = '$tipo'";
            $fetch = mysqli_query($this->con, $sql);
            if (!$fetch) echo "Erro: ".mysqli_error($this->con);
            else {
                $tipo_id = mysqli_fetch_assoc($fetch);
                $tipo_id = $tipo_id['id'];
                $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `preco`, `tipo_id`) VALUES ('$nome','$descricao','$preco', $tipo_id)";

                if (!mysqli_query($this->con, $sql)) echo "Erro: ".mysqli_error($this->con);
                else header('location: ../index.php?msg=cpr');

            }
        }
    
    }

   


?>