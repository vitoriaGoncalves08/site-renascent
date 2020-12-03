<?php
        require_once("Conexao.php");
    class Funcionario{
        private $nome,$email,$senha,$cpf,$nascimento;
        public function getNome(){
                return $this->nome;
        }
        public function setNome($nome){
                $this->nome = $nome;
                return $this;
        }
        public function getEmail(){
                return $this->email;
        }
        public function setEmail($email){
                $this->email = $email;
                return $this;
        }
        public function getSenha(){
                return $this->senha;
        }
        public function setSenha($senha){
                $this->senha = $senha;
                return $this;
        }
        public function getNascimento(){
                return $this->nascimento;
        }
        public function setNascimento($nascimento){
                $this->nascimento = $nascimento;
                return $this;
        }
        public function getCpf(){
                return $this->cpf;
        }

        public function setCpf($cpf){
                $this->cpf = $cpf;
                return $this;
        }

        public function cadastrarFuncionario($funcionario){
                $conexao = Conexao::getConexao();
                $insert = $conexao->prepare("INSERT INTO tbfuncionario(nomeFuncionario,
                emailFuncionario,senhaFuncionario,cpfFuncionario,dtNascimentoFuncionaio)
                values (?,?,?,?,?)");
                $insert->bindValue(1,$funcionario->getNome());
                $insert->bindValue(2,$funcionario->getEmail());
                $insert->bindValue(3,$funcionario->getSenha());
                $insert->bindValue(4,$funcionario->getCpf());
                $insert->bindValue(5,$funcionario->getNascimento());
                $insert->execute();
                return "".$funcionario->getSenha();
        }
    }
?>