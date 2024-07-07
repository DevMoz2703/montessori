<?php
    session_start();

    if (empty($_SESSION)) {
        print "<script>location.href='index.php';</script>";
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        print "<script>location.href='edit.php?id=$id';</script>";
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
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  
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
                    
                    print "Ola! ".$_SESSION['usuario'];
                    
                    
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


        
        
       
          
<div class="container mt-5">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>'; 
        }
        ?>
        <a href="novo.php" class="btn btn-info mt-5" style="box-shadow: 0 0 10px #3d3d3d;">Adicionar Novo</a>
        <table class="table table-dark table-hover mt-3 text-center" style="box-shadow: 0 0 10px #3d3d3d;">
            <thead class="table-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Educadora</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Dias</th>
                    <th scope="col">Disciplinas</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "config.php";
                    $sql = "SELECT * FROM `turmas`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['Sala']?></td>
                            <td><?php echo $row['Educadora']?></td>
                            <td><?php echo $row['Horario']?></td>
                            <td><?php echo $row['Dias']?></td>
                            <td><?php echo $row['Disciplinas']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="link-light"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['id']?>" class="link-light"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
  
    <div class="footer fixed-bottom">
        © 2023 Sistema de Creche. Todos os direitos reservados.
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
</html>
