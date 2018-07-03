<?php

class Usuario{

    private $id;
    private $login;
    private $senha;
    private $dtcadatro;

    public function getId(){
        return $this->id;
    }

    public function setId($value){
        $this->id = $value;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($value){
        $this->login = $value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
        $this->senha = $value;
    }

    public function getDtCadatro(){
        return $this->dtcadatro;
    }

    public function setDtCadatro($value){
        $this->dtcadatro = $value;
    }


    public function loadById($id){


        $sql = new Sql();

        $result = $sql->select("Select * from usuarios where id = :id", array(":id"=>$id));


        if(isset($result[0])){

            $row = $result[0];

            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDtCadatro(new DateTime($row['dtcadatro']));
        }

    }

    public function __toString(){

    
            return json_encode(array(
                "id"=>$this->getId(),
                "login"=>$this->getLogin(),
                "senha"=>$this->getSenha(),
                "dtcadatro"=>$this->getDtCadatro()->format("d/m/Y H:i:s")
            ));



    }





}



?>