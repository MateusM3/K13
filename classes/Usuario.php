<?php
/**
 * Created by PhpStorm.
 * User: Mateus Monteiro
 * Date: 30/09/2017
 * Time: 20:32
 */
    require_once 'Crud.php';

    class Usuario extends  Crud {
        protected $table = 'usuarios';
        private $nome;
        private $cep;
        private $rua;
        private $numero;
        private $complemento;
        private $bairro;
        private $cidade;
        private $uf;
        private $telefone;
        private $celular;
        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        /**
         * @return mixed
         */
        public function getCep()
        {
            return $this->cep;
        }
        /**
         * @return mixed
         */
        public function getRua()
        {
            return $this->rua;
        }

        /**
         * @param mixed $rua
         */

        public function setRua($rua)
        {
            $this->rua = $rua;
        }
        /**
         *
         * @param mixed $cep
         */


        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        /**
         * @return mixed
         */
        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * @param mixed $numero
         */
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        /**
         * @return mixed
         */
        public function getComplemento()
        {
            return $this->complemento;
        }

        /**
         * @param mixed $complemento
         */
        public function setComplemento($complemento)
        {
            $this->complemento = $complemento;
        }

        /**
         * @return mixed
         */
        public function getBairro()
        {
            return $this->bairro;
        }

        /**
         * @param mixed $bairro
         */
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        /**
         * @return mixed
         */
        public function getCidade()
        {
            return $this->cidade;
        }

        /**
         * @param mixed $cidade
         */
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        /**
         * @return mixed
         */
        public function getUf()
        {
            return $this->uf;
        }

        /**
         * @param mixed $uf
         */
        public function setUf($uf)
        {
            $this->uf = $uf;
        }

        /**
         * @return mixed
         */
        public function getTelefone()
        {
            return $this->telefone;
        }

        /**
         * @param mixed $telefone
         */
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        /**
         * @return mixed
         */
        public function getCelular()
        {
            return $this->celular;
        }

        /**
         * @param mixed $celular
         */
        public function setCelular($celular)
        {
            $this->celular = $celular;
        }

        /**
         * @return mixed
         */



        public function insert()
        {
            // TODO: Implement insert() method.
            $sql = "INSERT INTO $this->table(nome ,cep ,rua ,numero ,complemento,bairro ,cidade ,uf , telefone,celular)
                VALUES (:nome, :cep, :rua, :numero,:complemento,:bairro,:cidade,:uf,:telefone,:celular)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome',$this->nome);
            $stmt->bindParam(':cep',$this->cep);
            $stmt->bindParam(':rua',$this->rua);
            $stmt->bindParam(':numero',$this->numero);
            $stmt->bindParam(':complemento',$this->complemento);
            $stmt->bindParam(':bairro',$this->bairro);
            $stmt->bindParam(':cidade',$this->cidade);
            $stmt->bindParam(':uf',$this->uf);
            $stmt->bindParam(':telefone',$this->telefone);
            $stmt->bindParam(':celular',$this->celular);

            return $stmt->execute();
        }

        public function update($id)
        {
            $sql = "UPDATE $this->table SET nome=:nome,cep=:cep,rua=:rua,numero=:numero,complemento=:complemento ,bairro=:bairro,cidade=:cidade,uf=:uf,telefone=:telefone,celular=:celular WHERE id=:id";

                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(':nome',$this->nome);
                    $stmt->bindParam(':cep',$this->cep);
                    $stmt->bindParam(':rua',$this->rua);
                    $stmt->bindParam(':numero',$this->numero);
                    $stmt->bindParam(':complemento',$this->complemento);
                    $stmt->bindParam(':bairro',$this->bairro);
                    $stmt->bindParam(':cidade',$this->cidade);
                    $stmt->bindParam(':uf',$this->uf);
                    $stmt->bindParam(':telefone',$this->telefone);
                    $stmt->bindParam(':celular',$this->celular);
                    $stmt->bindParam(':id',$id);
            return $stmt->execute();
        }


    }