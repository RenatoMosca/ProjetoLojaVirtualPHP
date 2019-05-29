<?php 
include "funcoes.php";

$usuario = logarUsuario("Mosca", 0);

// $logado = false;
$produtos = [
    "produto1" => ["nome"=>"Curso Fullstack",
                  "descricao"=>"O curso Fullstack ensina programação",
                  "preco"=> 1200,
                  "img"=> "image/prod-1.jpg"],
    "produto2" => ["nome"=>"Curso Android",
                  "descricao"=>"O curso Android ensina a criação de Apps",
                  "preco"=> 1400,
                  "img"=> "image/prod-2.jpg"],              
    "produto3" => ["nome"=>"MKT Digital",
                  "descricao"=>"O curso MKT Digital apresenta princípios básicos de Marketing",
                  "preco"=> 1700,
                  "img"=> "image/prod-3.jpg"],          
    "produto4" => ["nome"=>"Mídias Digitais",
                    "descricao"=>"O curso Mídias Digitais discute aspectos mercadológicos do uso de mídias digitais",
                    "preco"=> 1700,
                    "img"=> "image/prod-4.jpg"]           

];

$produtos = addProduto("Curso UX","descrição",2000,"image/prod-5.jpg",$produtos);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
