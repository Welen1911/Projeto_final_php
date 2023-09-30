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
                $sql = "SELECT `id` FROM `usuarios` WHERE email = '$email' AND senha = '$senha'";

                $fetch = mysqli_query($this->con, $sql);
                if (!$fetch) echo "Erro: ".mysqli_error($this->con);
                else {
                    session_start();

                    $user = mysqli_fetch_object($fetch);
                    $_SESSION['user'] = $user->id;
                    
                    if ($tipo == 'admin') {
                        $_SESSION['admin'] = $user->id;
                    }
                    
                    header('location: ../index.php');
                }
                
            }
        }

        public function getLogin($email, $username, $senha, $key) {
            if ($key == 0) {
                $sql = "SELECT `id` FROM `usuarios` WHERE email = '$email' AND senha = '$senha'";

                $fetch = mysqli_query($this->con, $sql);
                if (!$fetch) echo "Erro: ".mysqli_error($this->con);
                else {
                    session_start();
                    
                    $user = mysqli_fetch_object($fetch);
                    $_SESSION['user'] = $user->id;
                    
                    if ($user->tipo == 'admin') {
                        $_SESSION['admin'] = $user->id;
                    }
                    
                    header('location: ../index.php');
                }
            } else {
                $sql = "SELECT `id`, `tipo` FROM `usuarios` WHERE username = '$username' AND senha = '$senha'";

                $fetch = mysqli_query($this->con, $sql);
                if (!$fetch) echo "Erro: ".mysqli_error($this->con);
                else {
                    session_start();

                    $user = mysqli_fetch_object($fetch);
                    $_SESSION['user'] = $user->id;
                    
                    if ($user->tipo == 'admin') {
                        $_SESSION['admin'] = $user->id;
                    }
                    
                    header('location: ../index.php');
                }
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

        public function cadastrarTipo($nome) {
            $sql = "INSERT INTO `tipos_produtos`(`nome`) VALUES ('$nome')";
            $fetch = mysqli_query($this->con, $sql);
            if (!$fetch) echo "Erro: ".mysqli_error($this->con);
            else {
                header('location: ../index.php?msg=cpr');
            }
        }

        public function tipos() {
            $sql = "SELECT * FROM `tipos_produtos`";
            $fetch = mysqli_query($this->con, $sql);
            if (!$fetch) echo "Erro: ".mysqli_error($this->con);
            else {
                return mysqli_fetch_all($fetch);
            }
        }
    
    }
