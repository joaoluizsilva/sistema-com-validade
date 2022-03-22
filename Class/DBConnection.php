<?php

Class DBConnection {
    private $_dbHostName = "Endereço do Servidor do Banco de Dados";
    private $_dbName = "Nome do Banco de Dados";
    private $_dbUserName = "Nome do Usuário do Banco";
    private $_dbPassWord = "Senha do Banco de Dados";
    private $_dbCon;

    public function getDbHostName(){
        return $this->_dbHostName;
    }
    public function setDbHostName($host){
        $this->_dbHostName = trim($host);
    }
    public function getDbName(){
        return $this->_dbName;
    }
    public function setDbName($data_name){
        $this->_dbname = trim ($data_name);
    }
    public function getDbUserName(){
        return $this->_dbUserName;
    }
    public function setDbUserName($user_name){
        $this->_dbHostName = trim ($user_name);
    }
    public function getDbPassWord(){
        return $this->_dbPassWord;
    }
    public function setDbPassWord($pass){
        $this->_dbPassWord = trim ($pass);
    }


    public function __construct(){
        // try{
        //     //Código a ser excutado de sucesso
        //     echo "Ojeto Criado com Sucesso";
        // }
    }
}