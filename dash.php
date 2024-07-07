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
  <title>Sistema de Creche - Dashboard</title>
  <!-- Adicionar link para o arquivo CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
 
   
</head>
<body>
   
  
    <div class="footer">
        © 2023 Sistema de Creche. Todos os direitos reservados.
      </div>
  <!-- Adicionar scripts do Bootstrap no final do documento para melhorar o desempenho -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="jquery-3.7.0.js"></script>
</body>
</html>
