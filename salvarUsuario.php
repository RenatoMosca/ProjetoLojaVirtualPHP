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

$itensPost = is_array($_POST)?count($_POST):0;

if ($contadorInputVazio == $itensPost){

    echo "<h1>Você não enviou nenhuma informação</h1>";
    echo "<a class='btn btn-primary' href='cadastroUsuario.php'>Voltar para o Cadastro</a>";
    exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT);
$nivelUsuario = $_POST['nivelUsuario'];

$retorno = addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelUsuario);

if($retorno == true){
    echo "<h1>Usuário cadastrado com sucesso</h1>";
    echo "<a class='btn btn-primary' href='login.php'>Ir para login</a>";    
} else {
    echo "<h1>Erro no cadastro</h1>";
    echo "<a class='btn btn-primary' href='cadastroUsuario.php'>Voltar</a>";    
}
?>