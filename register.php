<?php
include "config.php";

if (isset($_POST['submit'])) {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    
    // Insert user into database using prepared statement
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (?, ?, ?)");
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit();
    }

    $stmt->bind_param("sss", $nome, $email, $senha);
    if (!$stmt->execute()) {
        echo "Error executing query: " . $stmt->error;
        exit();
    }

    header("Location: index.php?msg=Novo registro criado com sucesso");
    exit();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registe-se</title>
    <link rel="stylesheet" href="Bootstrap/css/Bootstrap.min.css">
    <style>
        body{
            background-color: green;
        }
        nav{
            height: 70px;
            box-shadow: 0 0 10px orangered;
             border-bottom: 2px solid orangered;
             display:flex; 
             align-items:center; 
             padding: 5px;
             background-color: green;
             color: orangered;
        }

        .row{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 100vh;
            
            
        }

        form{
            background-color: green;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid orangered;
            
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-fixed ">
        <h2>Montessori</h2>

        <ul class="d-flex gap-3" style="list-style: none; align-items:center;">
            <li><a href="login.php" class="btn btn-primary">Entrar</a></li>
            <li><a href="logout.php" class="btn btn-warning">Sair</a></li>
        </ul>
    </nav>

    <div class="container " style="display: flex; justify-content:center; flex-direction:row; box-shadow:2px">
        <div class="row">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="" style="box-shadow: 0 0 10px orangered;display:flex; justify-content:center; flex-direction:column;">
                <h1><img src="" alt="img"></h1>
                
                <label>Usuario:</label>
                <input type="text" name="nome" id="nome">
                <label>Email:</label>
                <input type="email" name="email" id="email">
                <label>Senha:</label>
                <input type="password" name="senha" id="senha" autocomplete="off">

                <div class="btn"style="width: 100px;">
                    <button style="width: 100px;" type="submit" name="submit" class="btn btn-primary">Registrar-se</button>
                </div>
                
            </form>

        </div>
        
    </div>

    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
