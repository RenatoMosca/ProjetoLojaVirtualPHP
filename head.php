<?php 
include "funcoes.php";

$usuario = isset($_SESSION['usuario'])?$_SESSION['usuario']:"";

// A função file_get_contents() é utilizada para leitura de um arquivo
// inteiro em uma string.
// Funciona como uma espécie de de atalho se comparado a sequência
// de comandos: fopen -> fread -> fclose
$jsonProdutos = file_get_contents("Produtos.json");

// $logado = false;

// json_decode(), transforma um JSON em um objeto contendo um array associativo.
$produtos = json_decode($jsonProdutos, true);

//este comando "entra" dentro do Produtos definido no Json
$produtos = $produtos["Produtos"];


// addProduto("Curso UX","descrição",2000,"image/prod-5.jpg");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
