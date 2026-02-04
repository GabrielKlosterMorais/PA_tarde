<?php
session_start();
require "connection.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);

        if ($senha == $user['senha']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            header("Location: painel.php");
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <form action="process.php" method="POST" onsubmit="return validarform()">
        <?php if(isset($erro)) echo "<p style='color:red; text-align:center;'>$erro</p>"; ?>
        <div class="container flex centro-coluna centro-linha">
            <input type="email" placeholder="email" name="email">
            <input type="password" placeholder="senha" name="senha">
            <button type="submit">entrar</button>
        </div>
     </form>
</body>
</html>