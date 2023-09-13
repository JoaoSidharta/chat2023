<?php
include_once('../includes/conexao.php');

date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST)){
    $data = file_get_contents("php://input");

    $msg = json_decode($data, true);

    print_r($msg);