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
            $this->setData($result[0]);
        }

    }

    public static function getList(){

        $sql = new Sql();

        return  $sql->select("Select * from usuarios order by login ");

    }

    public static function busca($login){

        $sql = new Sql();

        return $sql->select("Select * from usuarios where login like :login order by login", array(":login"=>"%".$login."%"));

    }

    public function login($login, $senha){

   
        $sql = new Sql();

        $result = $sql->select("Select * from usuarios where login = :login and senha = :senha", array(
            ":login"=>$login,
            "senha"=>$senha
        ));


        if(isset($result[0])){

            $this->setData($result[0]);
     
        }else{
            throw new Exception("Login ou senha invalido");
            
        }


    }

    public function setData($data){
        $this->setId($data['id']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
        $this->setDtCadatro(new DateTime($data['dtcadatro']));

    }

    public function insert(){

        $sql = new Sql();

        $result = $sql->select("CALL sp_usuarios_insert(:login, :senha)", array(
            ":login"=>$this->getLogin(),
            ":senha"=>$this->getSenha()
        ));

        if(count($result) > 0){
            $this->setData($result[0]);
        }
      

    }

    public function __construct($login="" , $senha="" ){
        $this->setLogin($login);
        $this->setSenha($senha);

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