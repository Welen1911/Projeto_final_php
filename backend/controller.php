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
                return mysqli_fetch_object($fetch);
            }
        }
    
    }

   


?>