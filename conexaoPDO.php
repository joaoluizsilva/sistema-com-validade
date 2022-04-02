<?php
require "environment.php";

$config = array();
/**
 * o if vai verifica o ENVIRONMENT se ele esta com Dev ou Production
 * para aplicar as configurações corretas. A configuração de produção deve conter as 
 * configurações da HOSPEDAGEM
 */

if (ENVIRONMENT == 'development'){
    define("BASE_URL","http://localhost/sistema/");
    $config['dbname']='db_sistema';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpassword']='';

}else{
    define("BASE_URL","https:");
    $config['dbname']='';
    $config['host']='';
    $config['dbuser']='';
    $config['dbpassword']='';
}
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpassword']);
    echo "Concexão com sucesso";

} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

    
    


