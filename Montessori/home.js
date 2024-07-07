const textodinamico = document.querySelector("h1 span");
const palavras = ["Amor.", "Como Arte.", "O futuro.", "Tudo."];

let palavraindex =0;
let letraindex =0;
let delectando = false

const efeitoescrita = () =>{
    const palavraactual = palavras[palavraindex];
    const letraactual = palavraactual.substring(0, letraindex);
   textodinamico.textContent = letraactual;
   textodinamico.classList.add("parar-blink");

   if(!delectando && letraindex < palavraactual.length){
    // se a condicao for verdadeira, escreve a proxima letra
    letraindex++;
    setTimeout(efeitoescrita, 200);
   } else if(delectando && letraindex > 0){
    // se a condicao for verdadeira, remove a letra previa
    letraindex--;
    setTimeout(efeitoescrita, 100);
   } else{
    //se a palavra for deletada sera alterada para a proxima palavra
    delectando = !delectando;
    textodinamico.classList.remove("parar-blink");
    palavraindex = !delectando ? (palavraindex + 1) % palavras.length : palavraindex;
    setTimeout(efeitoescrita, 1200);
   }
}

efeitoescrita();





function mensagem(){
    alert("Bem vindo a pagina do Jardim Infantil Montessori");
}
function adeus(){
    alert("foi um prazer, volte sempre");
}
function visitante(){
    alert("Conheca o Montessori");
}

const inputNome = document.getElementById('tt');
const inputemail = document.getElementById('em');
const inputsenha = document.getElementById('senha');
const btnentrar = document.getElementById('btn1');

//adicionando um ouvinte de eventos ao botao entrar
btnentrar.addEventListener('click', function(){
    //verificando se o nome e senha estao correctos
    if(inputNome.value ==='joao' && inputemail.value ==='jf@gmail.com' && inputsenha.value === '1234'){
        alert('feito com sucesso');
    }
    else{
        alert('dados incorrectos');
    }

});



const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open');

    toggleBtnIcon.classList = isOpen
    ?'fa-solid fa-xmark'
    :'fa-solid fa-bars'
}