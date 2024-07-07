<?php
include "config.php";

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $sql = "INSERT INTO `crud`(`Id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Novo registro criado com sucesso");
        exit();
    } else {
        echo "falho: " . mysqli_error($conn);
    }
}
?>



<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Php-Application</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class=" text-light">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: orangered;box-shadow: 0 0 20px #3d3d3d;">
        Crud Aplication
    </nav>
    <div class="container bg-dark text-light" style="border-radius: 10px; width:400px; box-shadow: 0 0 20px #3d3d3d;">
        <div class="text-center mb-4 ">
             <h3 class="mt-3"  ; style="padding-top: 15px; ">Adicionar novo usuario</h3>
             <p class=" text-light">
                Complete o formulario para adicionar um novo usuario.
             </p>
        </div>

        <div class="container d-flex justify-content-center text-light" style="box-shadow: 0 0 20px #3d3d3d;">
        <form action="novo.php" method="post" style="width:50vw; min-width: 300px;">
         <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control" placeholder="Nome" name="first_name" required>
            </div>

            <div class="col">
                <label for="" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" placeholder="Sobrenome" name="last_name" required>
            </div>
         </div>

         <div class="mb-3">
         <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" placeholder="exemplo@gmail.com" name="email" required>
            </div>  

            <div class="form-group mb-3 d-flex justify-content-center gap-2">
            <label >Genero:</label> &nbsp;
            <input type="radio" name="gender" id="masculino" value="Masculino" class="form-check-input">
            <label class="form-input-label">Masculino</label>
            &nbsp;
            <input type="radio" name="gender" id="feminino" value="Feminino" class="form-check-input">
            <label class="form-input-label">Feminino</label>


         </div>

         </div>

         <div class=" d-flex justify-content-center gap-3 p-3">
            <button type="submit" class="btn btn-primary" name="submit">Guardar</button>

            <a href="index.php" class="btn btn-danger">Cancelar</a>
         </div>
        </form>
        
    </div>
    
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>s
</body>
</html>