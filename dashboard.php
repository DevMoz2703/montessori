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

   /* @media (min-width: 956px) {
      .navbar-toggler{
          display: none;
        }
    }

    @media (min-width: 768px) {
        .sidebar {
            position: sticky;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            padding-top: 1rem;
            background-color: #f8f9fa;
            z-index: 1;
            transition: none;
        }


        .content {
            margin-left: 5px;
            padding: 1rem;
        }

        .footer {
            position: relative;
            bottom: unset;
            width: unset;
            text-align: center;
        }

        .sidebar,
        .content {
            display: inline-block;
            vertical-align: top;
        }
        .navbar-toggler{
          display: flex;
        }

    }
    */
  </style>
    </head>
    <body>
        <nav class="navbar navbar-light fixed-top bg-light" >
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
                <a class="nav-link active" href="#">Contacto</a>
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
            
            <?php
              print "<br><li><a href='logout.php' class='btn btn-danger'>Sair</a></li>";
            ?>
        </ul>
    </div>
</div>


        
        
       
          
            <div class="content container-fluid mt-5">
                
             
        
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(65\).png); height: 230px;">
                      <h5 class="card-title">Matrículas</h5>
                      <p class="card-text">Gerencie as matrículas dos alunos.</p>
                      <a href="matriculas.php" class="btn btn-primary">Ir para Matrículas</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(66\).png);height: 230px;">
                      <h5 class="card-title">Turmas</h5>
                      <p class="card-text">Gerencie as turmas dos alunos.</p>
                      <a href="turmas.php" class="btn btn-primary">Ir para Turmas</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(67\).png); height: 230px;">
                      <h5 class="card-title">Educadores</h5>
                      <p class="card-text">Gerencie os educadores da creche.</p>
                      <a href="educadores.php" class="btn btn-primary">Ir para Educadores</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(68\).png); height: 230px;">
                      <h5 class="card-title">Eventos</h5>
                      <p class="card-text">Compromissos da instituição</p>
                      <a href="matriculas.php" class="btn btn-primary">Ir para Eventos</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(69\).png); height: 230px;">
                      <h5 class="card-title">Mensalidades</h5>
                      <p class="card-text">Verifique estado das mesalidades</p>
                      <a href="mensalidade.php" class="btn btn-primary">Ir para Mensalidades</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body" style="background-image: url(Img/pngegg\ \(86\).png); 
                    background-repeat:no-repeat; height: 230px;">
                      <h5 class="card-title">Normas</h5>
                      <p class="card-text">Documentos normativos.</p>
                      <a href="educadores.php" class="btn btn-primary">Ir para Normas</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
              
        
            
        
          
    </div>
  
    

      <script>
      var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})

      </script>
  <!-- Adicionar scripts do Bootstrap no final do documento para melhorar o desempenho -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<footer>
<div class="footer fixed-bottom">
        © 2023 Sistema de Creche. Todos os direitos reservados.
      </div>
</footer>
</html>
