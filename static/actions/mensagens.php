<?php
include_once('../includes/conexao.php');

$sql = "SELECT * FROM chat ORDER BY id DESC LIMIT 20";

$resultado = $conexao->query($sql);

$values = array();

$pattern = '/<a\s+(?:[^>]*?\s+)?href=([\'"])(.*?)\1[^>]*>.*?<\/a>/i';

foreach ($resultado as $linha) {
    $values[] = '{"nome": "' . preg_replace($pattern, '', str_replace('"', '&quot;', $linha['nome'])) . '", "mensagem": "' . preg_replace($pattern, '', str_replace('"', '&quot;', $linha['mensagem'])) . '", "data": "' . $linha['data'] . '"}';
}

$values = array_reverse($values);

echo "[" . implode(",", $values) . "]";