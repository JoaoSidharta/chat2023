//pega o campo nome
var nome = document.getElementById("nome");

//função para logar
function Login() {
    //verifica se o campo nome está vazio
    if (nome.value == "") {
        alert("Preencha o campo nome");
    } else {
        //salva o nome no sessionStorage
        sessionStorage.setItem("nome", nome.value);
        //redireciona para a página do chat
        window.location = "chat.php";
    }
}

//verifica se o usuário apertou enter
document.addEventListener("keypress", (event)=>{
    if (event.key == "Enter") {
        Login();
    }
})