<?php
    class Connection
    {
        public $_conn;
        private $servername;
        private $username;
        private $password;
        private $dbname;

        //criar a conexao
        function __construct($server, $user, $passwd, $db){
            $this->servername = $server;
            $this->username = $user;
            $this->password = $passwd;
            $this->dbname = $db;

            try {
                $this->_conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",
                    $this->username,
                    $this->password);
                $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexao realizada com sucesso!";
            } catch
            (PDOException $e) {
                echo "Falha na conexao! <br/>";
                echo "Erro encontrado: " . $e->getMessage();
            }
        }

        public function connect(){
            return $this->_conn ? $this->_conn : null;
        }

        public function select($tabela, $colunas = "*", $where = " where 1=1;"){
            $sql = "SELECT $colunas FROM $tabela $where";
            $stmt = $this->_conn->query($sql);
            try{
                $result = $stmt->fetch();
                return $result; 
            } catch (PDOException $e) {
                echo "Erro no select";
            }
        }

        public function selectAllCliente(){
            $sql = "select * from cliente";
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function selectAllPlano(){
            $sql = "select * from planos";
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }
        
        public function selectIDCliente($id){
            $sql = "select * from cliente where cli_matric = $id";
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchObject(__CLASS__);
            return $result;
        }

        public function selectAllModal(){
            $sql = "select * from modalidades";
            $stmt = $this->_conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function insert($tabela, $dados){
            foreach ($dados as $key => $value) {
                $keys[] = $key;
                $insertvalues[] = '\'' . $value . '\'';
            }
            
            $keys = implode(',', $keys);
            $insertvalues = implode(',', $insertvalues);
            $sql = "INSERT INTO $tabela($keys) VALUES($insertvalues)";
            return $this->executar($sql);
        }

        public function delete($tabela, $where = " where 1=1;"){
            $sql = "DELETE FROM $tabela $where";
            $stmt = $this->_conn->query($sql);

            try{
                $result = $stmt->fetch();
                return $result;
                
            } catch (PDOException $e) {
                echo "Erro no delete";
            }
        }

        public function update($tabela, $nome, $email, $senha, $endereco, $telefone, $tipo_usuario, $where = " where 1=1;"){
            $sql = "UPDATE $tabela 
                    SET cli_nome = '$nome', cli_email = '$email', cli_senha = '$senha', cli_endereco = '$endereco', cli_tel = '$telefone', id_tipo_usuario = '$tipo_usuario' 
                        $where"; 
            $stmt = $this->_conn->query($sql);

            try{
                $result = $stmt->rowcount();
                return $result;
            } catch (PDOException $e) {
                echo "Erro ao atualizar";
            }
        }

        public function updatePlano($tabela, $nome, $valor, $caract, $where = " where 1=1;"){
            $sql = "UPDATE $tabela 
                    SET tdp_nome = '$nome', tdp_valor = $valor, tdp_caract = '$caract'
                    $where"; 
            $stmt = $this->_conn->query($sql);

            try{
                $result = $stmt->rowcount();
                return $result;
            } catch (PDOException $e) {
                echo "Erro ao atualizar";
            }
        }

        public function updateModal($tabela, $nome, $valor, $caract, $where = " where 1=1;"){
            $sql = "UPDATE $tabela 
                    SET mod_nome = '$nome', mod_valor = $valor, mod_caract = '$caract'
                    $where"; 
            $stmt = $this->_conn->query($sql);

            try{
                $result = $stmt->rowcount();
                return $result;
            } catch (PDOException $e) {
                echo "Erro ao atualizar";
            }
        }

        private function executar($sql){
            try {
                $return_result = $this->_conn->exec($sql);
                return $return_result;
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    echo "Login existente";
                }
                //echo "<br/>Código do erro: " . var_dump($e->errorInfo) . "<br/>" ;
                echo $sql . "<br/>" . $e->getMessage();

                $this->_conn = null;
            }
        }
    }
