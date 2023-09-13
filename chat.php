<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chat2023-Projeto de PRW">
    <link rel="stylesheet" href="./static/css/chatstyle.css">
    <title>Chat2023-Chat</title>
</head>

<body>
    <div class="container">
        <div class="headerusu">
            <h1>Usuario:</h1>
            <h1 id="usuario"></h1>
        </div>
        <div class="chat" id="chat">
            <div class="mensagens" id="mensagens">
            </div>
        </div>
        <div class="envio">
            <input type="text" name="mensagem" id="mensagem" placeholder="Mensagem">
            <button type="submit" onclick="Enviar()">Enviar</button>
        </div>
    </div>
    <script src="./static/js/mensagens.js"></script>
</body>

</html>