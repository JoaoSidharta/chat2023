<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="chat2023-projeto de PRW">
    <link rel="stylesheet" href="./static/css/chatstyle.css">
    <title>chat2023-chat</title>
</head>
<body>
    <div class="container">
        <div class="headerusu">
            <h1>Usuario:</h1>
            <h1 id="usuario"></h1>
        </div>
        <div class="chat" id="chat">
        </div>
            <div class="envio">
                <input type="text" name="mensagem" id="mensagem" placeholder="mensagem">
                <button type="submit" onclick="enviar()">enviar</button>
            </div>
        </div>
        
        <script src="./static/js/mensagens.js"></script>
    
</body>
</html>