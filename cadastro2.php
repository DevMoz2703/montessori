<?php
    session_start();

        if (empty($_SESSION)) {
            print "<script>location.href='index.php';</script>";
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <!-- Adicionar link para o arquivo CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  
        <title>Dashboard</title>
        <style>
    html,
    body {
      height: 100%;
      background-color: green;
    }
    a{
        text-decoration: none;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -250px;
        height: 100%;
        width: 250px;
        padding-top: 1rem;
        background-color: #f8f9fa;
        z-index: 1;
        transition: left 0.3s ease-in-out;
    }

    .sidebar.active {
        left: 0;
    }

    .content {
        margin-left: 0;
        padding: 1rem;
    }

    .footer {
        background-color: #f8f9fa;
        padding: 1rem;
        text-align: center;
    }
    @media (max-width: 767.98px) {
    .sidebar {
        display: none;
    }

    .offcanvas.active {
        display: block;
    }
}

    aside{
        width: 220px;
        background-color: #ddddda;
        box-shadow: 0 0 4px #f8f9fa;
    }
    section{
        box-shadow: 0 0 4px #f8f9fa;
        background-color: #f8f9fa;
        width: 550px;
    }

.footer{
    text-align: center;
}

.radio{
    display: flex;
    
    align-items: center;  
}

.botao{
    background: #73a4dc;
    padding: 10px 15px;
    border-radius: 2px;
    border: none;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}

.botao:hover{
    background: #5988bd;
}


  </style>
    </head>
    <body>
        <nav class="navbar fixed navbar-light bg-light" >
            <div class="container-fluid" >
                <a href="dashboard.php" class="navbar-brand">Sigc-Montessori</a>
                <?php
                    
                    print "ola! ".$_SESSION['usuario'];
                    
                    
                ?>
                 <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
           <span class="navbar-toggler-icon"></span>
</button>
            </div>

           

        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vídeos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-lg-none" href="#">Logout</a>
            </li>
            <?php
              print "<br><li><a href='logout.php' class='btn btn-danger'>Sair</a></li>";
            ?>
        </ul>
    </div>
</div>


        
        
       
          
<div class="container mt-1">
    <div class="row ">
        <aside class="col-md-3">
            <h1>Montessori</h1>
            <a href="">Dados pessoais</a><hr>
            <a href="">Dados escolares</a><hr>
            <a href="">Anexos</a><hr>
        </aside>
        
        <section class="col-md-6">
            <h2>Tela de Cadastro</h2>
            <h4>Dados Pessoais</h4>

            <form action="" id="formulario" method="post" name="formulario">
                <legend>Formulário de Cadastro</legend>

                <div class="form-group">
                    <label for="upload">Foto:</label>
                    <input type="file" class="form-control" id="upload" placeholder="escolha a foto">
                </div>

                <div class="form-group">
                    <img src="../FormularioValido/IMG_20230524_121326_353.jpg" id="preview" alt="Admin">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="insira seu nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobreNome">Sobrenome:</label>
                        <input type="text" class="form-control" name="Sobrenome" id="sobreNome" placeholder="insira seu sobrenome">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="insira seu email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="Senha" id="senha" placeholder="insira sua senha">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="data">Data de nascimento:</label>
                        <input type="date" class="form-control" name="data" id="data" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="BI">Nº de Bilhete de identificação:</label>
                        <input type="text" class="form-control" name="BI" id="BI" placeholder="insira seu numero de BI">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="paises">Pais de nascimento:</label>
                        <select class="form-control" name="paises" id="paises">
                            <option value="Moçambique" selected>Moçambique</option>
                            <option value="Afeganistão">Afeganistão</option>
                            <!-- Rest of the options -->
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="provincia">Provincia:</label>
                        <select class="form-control" name="provincia" id="provincia">
                            <option value="Maputo">Maputo</option>
                            <option value="Gaza">Gaza</option>
                            <option value="Inhambane">Inhambane</option>
                            <option value="Manica">Manica</option>
                            <option value="Sofala">Sofala</option>
                            <option value="Tete">Tete</option>
                            <option value="Nampula">Nampula</option>
                            <option value="Zambezia">Zambezia</option>
                            <option value="Cabo Delgado">Cabo Delgado</option>
                            <option value="Niassa">Niassa</option>
                        </select>
                    </div>
                </div>

                <!-- Add any additional form fields or buttons here -->
				<div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="insira seu telefone">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="Endereco" placeholder="insira seu endereço">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="mensagem" class="form-label">Tua mensagem para nós:</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="8" placeholder="escreva uma mensagem"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo">
                    <option value="">Informar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="X">Nao especificar</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="notificacoes" name="notificacoes">
                <label for="notificacoes" class="form-check-label">Desejo receber notificações</label>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Ja ouviu falar de nós:</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="" name="" value="sim">
                    <label for="" class="form-check-label">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="" name="" value="nao">
                    <label for="" class="form-check-label">Não</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary mx-2" onclick="">Enviar</button>
            <button type="reset" class="btn btn-secondary mx-2">Limpar</button>
        </div>
    </div>
            </form>
        </section>
    </div>
</div>

  
    <div class="footer">
        © 2023 Sistema de Creche. Todos os direitos reservados.
      </div>

      <script>
      var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})


/* imagem */

const input = document.getElementById('upload');
const preview = document.getElementById('preview');

input.addEventListener('change', function(){
    const file = this.files[0];

    if(file){
        const leitor = new FileReader();

        leitor.addEventListener('load',function(){
            preview.src = leitor.result;
        });
        leitor.readAsDataURL(file);
    }
});





/* criando a funcao validar */

function validar(){
    // obtendo o valor do input pelos "names"

    const nome = formulario.nome;
    

    // obtendo o valor do input pelos Id
    const sobrenome = document.getElementById("sobreNome");
    const email = document.getElementById("email");
    const telefone = document.getElementById("telefone");
    const mensagem = document.getElementById("mensagem");
    const endereco = document.getElementById("endereco");
    const senha = document.getElementById("senha");


    //verificar se o nome esta vazio
    if (nome.value=="" || nome.value==" "){
        alert("nome não informado");

        //deixar o nome com o focus
        nome.focus();
    } 
    if (sobrenome.value =="" || sobrenome==" "){
        alert("sobrenome não informado");

        
        sobrenome.focus(); 
    }

    if (email.value =="" || email==" "){
        alert("email não informado");

        
        email.focus(); 
    }
    if (senha.value =="" || senha==" "){
        alert("Senha não informada");

        
        senha.focus(); 
    }
    if (endereco.value =="" || endereco==" "){
        alert(" Endereço não informado");

        
        endereco.focus(); 
    }
    if(telefone.value=="" || mensagem.value=="" ){
        alert("Informe os restantes campos para um cadastro seguro");

        
         
        mensagem.focus(); 
        telefone.focus(); 
    }else{
        alert("cadastro feito com sucesso");
    }
//Criado por Joao de Deus Chichava Junior
    
}
      </script>
	  
  <!-- Adicionar scripts do Bootstrap no final do documento para melhorar o desempenho -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
