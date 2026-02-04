<?php

include("connection.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

echo $titulo, $autor, $ano, $categoria, $quantidade;



$sql = "INSERT INTO livros(titulo, autor, ano, categoria, quantidade) VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

if($conn->query($sql) === TRUE){
    header("Location:listagem.php");
}
else{
    echo "erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();