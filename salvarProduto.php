<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php 
include_once "funcoes.php";

// echo "<pre>";
// var_dump($_FILES);

$contadorInputVazio = 0;
foreach ($_POST as $item) {
    $item == ""?$contadorInputVazio++:0;
}

if ($contadorInputVazio == count($_POST)){

    echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
    echo "<a class='btn btn-primary' href='cadastroProduto.php'>Voltar para o Cadastro</a>";
    exit;
}

// $imgAceitas = ["0","image/png","image/jpg","image/jpeg"];
$imgAceitas = ["image/png","image/jpg","image/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];

$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descricaoProduto = $_POST['descricaoProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$caminhoImg = "image/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];

if($erroEnvio !== 0){
    echo "<h1>Houve um erro no envio do arquivo - Verifique e tente novamente</h1>";
    echo "<a class='btn btn-primary' href='cadastroProduto.php'>Voltar para o Cadastro</a>";
    exit;
}

var_dump($typeFile);
var_dump($imgAceitas);
if(!is_numeric(array_search($typeFile, $imgAceitas))){
    echo "<h1>Extensão do arquivo inválida - Extensões válidas: png, jpg ou jpeg</h1>";
    echo "<a class='btn btn-primary' href='cadastroProduto.php'>Voltar para o Cadastro</a>";
    exit;
}

move_uploaded_file($arquivoTemp, "image/$nomeArquivo");
$retorno = addProduto($nomeProduto,$descricaoProduto,$precoProduto,$caminhoImg);

if($retorno == true){
    echo "<h1>Produto cadastrado com sucesso</h1>";
    echo "<a class='btn btn-primary' href='index.php'>Voltar</a>";    
}
?>