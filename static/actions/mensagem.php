<?php

include_once('../includes/conexao.php');

$sql = "SELECT * FROM chat ORDER BY id DESC LIMIT 10";

$resultado = $conexao->query($sql);

