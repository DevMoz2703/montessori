<?php
    // Inicia a sessão para armazenar as informações do usuário logado.
    session_start();

    // Verifica se o array $_POST está vazio ou se os campos "usuario" e "senha" estão vazios.
    if (empty($_POST) || empty($_POST['usuario']) || empty($_POST['senha'])) {
        // Se alguma dessas condições for verdadeira, o usuário é redirecionado para a página "index.php" usando JavaScript.
        echo "<script>location.href='index.php';</script>";
        exit();
    }

    // Inclui o arquivo "config.php", que provavelmente contém a configuração do banco de dados.
    include('config.php');

    // Obtém os valores do campo "usuario" e "senha" enviados via POST.
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Cria uma consulta SQL para selecionar um usuário da tabela "usuarios" com o nome de usuário e senha fornecidos.
    $sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

    // Executa a consulta SQL usando $conn->query($sql). Se ocorrer algum erro, a execução será interrompida e o erro será exibido.
    $res = $conn->query($sql) or die($conn->error);

    // Obtém o primeiro resultado da consulta como objeto.
    $row = $res->fetch_object();

    // Obtém o número de linhas retornadas pela consulta.
    $qtd = $res->num_rows;

    // Se houver pelo menos um resultado, armazena as informações do usuário na sessão e redireciona para a página "dashboard.php".
    if ($qtd > 0) {
        $_SESSION['usuario'] = $usuario;
       // $_SESSION['nome'] = $row->nome;
        $_SESSION['tipo'] = $row->tipo;
        echo "<script>location.href='dashboard.php';</script>";
        exit();
    } else {
        // Se não houver resultados, exibe uma mensagem de erro e redireciona para a página "login.php".
        echo "<script>alert('Usuário e/ou senha incorretos');</script>";
        echo "<script>location.href='login.php';</script>";
        exit();
    }
?>
