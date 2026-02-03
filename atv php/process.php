<?php

    include("connection.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['dataNascimento'];
    $senha = $_POST['senha'];



    $sql = "INSERT INTO usuario(nome, email, cpf, dataNascimento, senha) VALUES ('$nome', '$email', '$cpf', '$dataNascimento', '$senha')";

    if($conn->query($sql) === TRUE){
       echo "usuario cadrastrado com sucesso";
       header("location:");
    }

    else{
        echo "erro: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();