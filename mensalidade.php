<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensalidades - Sistema de Gestão Escolar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de Gestão Escolar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mensalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Professores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disciplinas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container mt-4">
        <h1>Mensalidades</h1>

        <!-- Tabela de mensalidades -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Data de vencimento</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui você pode adicionar os dados das mensalidades dinamicamente com PHP -->
                <tr>
                    <td>João Silva</td>
                    <td>10/06/2023</td>
                    <td>R$ 500,00</td>
                    <td>Pendente</td>
                    <td>
                        <!-- Botão para editar a mensalidade -->
                        <a href="#" class="btn btn-sm btn-warning me-2"><i class="bi bi-pencil"></i> Editar</a>

                        <!-- Botão para excluir a mensalidade -->
                        <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Botão para adicionar nova mensalidade -->
        <a href="#" class="btn btn-primary"><i class="bi bi-plus"></i> Adicionar nova mensalidade</a>
    </div>

    <!-- Bootstrap JS (coloque no final do arquivo para melhorar a performance) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>
