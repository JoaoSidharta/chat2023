//pega o nome do usuário salvo no sessionStorage
var nome = sessionStorage.getItem("nome");
//variavel para colocar o nome do usuário no chat
var usuario = document.getElementById("usuario");
//pega o campo mensagem
var mensagem = document.getElementById("mensagem");
//array para salvar as iformações do usuário e da mensagem
const dados = { nome: nome, texto: ""};

//coloca o nome do usuário no chat
usuario.innerHTML = nome;

//função para enviar a mensagem
async function Enviar(){
    //remove os espaços do começo e do final da mensagem
    mensagem.value = mensagem.value.trim();

    //verifica se o usuário está logado
    if (nome == null) {
        alert("Você não está logado");
        window.location = "index.php";
    }
    //verifica se o campo mensagem está vazio
    if (mensagem.value == "") {
        alert("Preencha o campo mensagem");
    } else {
        //salva a mensagem no array dados
        dados.texto = mensagem.value;
        
        //envia a mensagem para o arquivo recebe.php
        res = await fetch("./static/actions/recebe.php", {
            //define o método como POST
            method: "POST",
            //converte o array dados em JSON
            body: JSON.stringify(dados),
            //define o cabeçalho da requisição
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            }
        });

        if (res.ok) {
            console.log(res);
            mensagem.value = "";  
        } else {
            alert("Erro ao enviar a mensagem");
            href = "index.php";
        }
    } 
}

//verifica se o usuário apertou enter
document.addEventListener("keypress", (event)=>{
    if (event.key == "Enter") {
        //chama a função Enviar
        Enviar();
    }
})

//função para buscar as mensagens
async function getMessages() {
    console.log("Buscando mensagens...");
    //busca as mensagens no arquivo mensagens.php
    results = await fetch("./static/actions/mensagens.php")
        .then((data) => {
            return data.json();
        })

    //variavel para colocar as mensagens
    var mensagens = document.getElementById("mensagens");
    //limpa as mensagens
    mensagens.innerHTML = "";
    //coloca as mensagens no chat
    results.forEach((result) => {
        //verifica se a mensagem é do usuário
        if (result.nome == nome) {
            mensagens.innerHTML += `<div class="mensagemUsuario"><h1>${result.nome}:</h1> <p>${result.mensagem}</p> <p>${result.data}</p></div>`;
        //verifica se a mensagem é do sistema
        } else {
            mensagens.innerHTML += `<div class="mensagem"><h1>${result.nome}:</h1> <p>${result.mensagem}</p> <p>${result.data}</p></div>`;
        }
    });
    //variavel para colocar o chat no final
    chat = document.getElementById('chat');
    //coloca o chat no final
    chat.scrollTop = chat.scrollHeight;
}
buscaMessages = setInterval(getMessages, 1000);

getMessages();

