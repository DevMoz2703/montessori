<?php
include "config.php";

if (isset($_POST['submit'])) {
    $sala = mysqli_real_escape_string($conn, $_POST['sala']);
    $educadora = mysqli_real_escape_string($conn, $_POST['educadora']);
    $horario = mysqli_real_escape_string($conn, $_POST['horario']);
    $dias = mysqli_real_escape_string($conn, $_POST['dias']);
    $disciplinas = mysqli_real_escape_string($conn, $_POST['disciplinas']);

    $sql = "INSERT INTO `turmas`(`id`, `Sala`, `Educadora`, `Horario`, `Dias`,`Disciplinas`) VALUES (NULL,'$sala','$educadora','$horario','$dias','$disciplinas')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: turmas.php?msg=Novo registro criado com sucesso");
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
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class=" text-light" style="background-color: green;">
    
    <div class="container bg-success text-light" style="border-radius: 10px; box-shadow: 0 0 20px #3d3d3d;">
        <div class="text-center mb-4 ">
             <h3 class="mt-3"  ; style="padding-top: 15px; ">Adicionar nova turma</h3>
             <p class=" text-light">
                Complete o formulario para adicionar uma nova turma.
             </p>
        </div>

        <div class="container d-flex justify-content-center text-light">
        <form action="novo.php" method="post">
         <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Sala:</label>
                <input type="text" class="form-control" placeholder="um objecto alegre" name="sala" required>
            </div>

            <div class="col">
                <label for="" class="form-label">Educadora:</label>
                <input type="text" class="form-control" placeholder="Nome da educadora" name="educadora" required>
            </div>
         </div>

            <div class="mb-3">
                <label for="" class="form-label">Horario:</label>
                 <input type="time" class="form-control" placeholder="horario de actividades" name="horario" required>
            </div>  
            <div class="mb-3">
                <label for="" class="form-label">Dias:</label>
                 <input type="date" class="form-control" placeholder="dias de actividades" name="dias" required>
            </div>  
            <div class="mb-3">
                <label for="" class="form-label">Disciplinas:</label>
                 <input type="text" class="form-control" placeholder="Disciplinas" name="disciplinas" required>
            </div>  



         </div>

         </div>

         <div class=" d-flex justify-content-center gap-3 p-3">
            <button type="submit" class="btn btn-primary" name="submit">Guardar</button>

            <a href="turmas.php" class="btn btn-danger">Cancelar</a>
         </div>
        </form>
        
    </div>
    
</div>

<script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>