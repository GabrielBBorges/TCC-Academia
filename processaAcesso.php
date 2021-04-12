<?php
namespace processaAcesso{
    include 'connection.php';
    Use Connection as Connection;
    
    class ProcessaAcesso {

        var $db;

        public function __construct(){
            $conexao = new Connection("localhost", "root", "", "bancolive"); 
            $this->db = $conexao;
        }
            
        public function verificaAcesso($email, $senha){
            $select = $this->db->select('cliente', '*', " where cli_email = '$email' and cli_senha = '$senha';"); 
            return $select;
        }
            
        public function cadastraUsuario($dados){
            $insert = $this->db->insert('cliente', $dados);
            return $insert;
        }

        public function registro($email){
            $select = $this->db->select('cliente', '*', " where cli_email = '$email';"); 
            return $select; 
        }

        public function SelectID($matric){
            $select = $this->db->select('cliente', '*', " where cli_matric = '$matric';"); 
            return $select; 
        }

        public function selectCliente(){
            $select = $this->db->selectAllCliente(); 
            return $select;
        }

        public function deletarUsuario($matric){
            $select = $this->db->delete('cliente', " where cli_matric = '$matric';"); 
            return $select; 
        }

        public function atualizarUsuario($matricula, $nome, $email, $senha, $endereco, $telefone, $tipo_usuario){
            $update = $this->db->update('cliente', $nome, $email, $senha, $endereco, $telefone, $tipo_usuario, " where cli_matric = '$matricula';"); 
            return $update;
        }


        public function cadastraPlano($dados){
            $insert = $this->db->insert('planos', $dados);
            return $insert;
        }

        public function selectPlano(){
            $select = $this->db->selectAllPlano(); 
            return $select;
        }

        public function deletarPlano($codPlano){
            $select = $this->db->delete('planos', " where tdp_cod = '$codPlano';"); 
            return $select; 
        }

        public function SelectIDPlano($codPlano){
            $select = $this->db->select('planos', '*', " where tdp_cod = '$codPlano';"); 
            return $select; 
        }

        public function atualizarPlano($codigo, $nome, $valor, $caract){
            $update = $this->db->updatePlano('planos', $nome, $valor, $caract, " where tdp_cod = '$codigo';"); 
            return $update;
        }




        public function cadastraModal($dados){
            $insert = $this->db->insert('modalidades', $dados);
            return $insert;
        }

        public function selectModal(){
            $select = $this->db->selectAllModal(); 
            return $select;
        }

        public function deletarModal($codModal){
            $select = $this->db->delete('modalidades', " where mod_cod = '$codModal';"); 
            return $select; 
        }

        public function SelectIDModal($codModal){
            $select = $this->db->select('modalidades', '*', " where mod_cod = '$codModal';"); 
            return $select; 
        }

        public function atualizarModal($codigo, $nome, $valor, $caract){
            $update = $this->db->updateModal('modalidades', $nome, $valor, $caract, " where mod_cod = '$codigo';"); 
            return $update;
        }
    }
}