<?php
include_once('../includes/conexao.php');

date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST)){
    $data = file_get_contents("php://input");

    $msg = json_decode($data, true);

    print_r($msg);

    $nome = filter_var($msg['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($nome)) {
        header('location: index.php');
        exit;
    }

    $mensagem = filter_var($msg['mensagem'], FILTER_SANITIZE_SPECIAL_CHARS);

    $data = date('Y-m-d H:i:s');

    $sql = "INSERT INTO chat (nome, mensagem, data) VALUES ('$nome', '$mensagem', '$data')";

    $conexao->query($sql);
    }