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

$contadorInputVazio = 0;
foreach ($_POST as $item) {
    $item == ""?$contadorInputVazio++:0;
}

$itensPost = is_array($_POST)?count($_POST):0;

if ($contadorInputVazio == $itensPost){

    echo "<h1>Você não enviou nenhuma informação</h1>";
    echo "<a class='btn btn-primary' href='login.php'>Voltar para login</a>";
    exit;
}


$Usuarios = file_exists("Usuarios.json")?file_get_contents('Usuarios.json'):"";

//este comando está sobrescrevendo $Usuarios apenas com um array associativo...
$Usuarios = json_decode($Usuarios,true);

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];

foreach ($Usuarios['Usuarios'] as $key => $usuario) {
    if($usuario['emailUsuario'] == $email){
        $usuariosExiste = $Usuarios['Usuarios'][$key];
        break;
    }
}

if(isset($usuariosExiste) && password_verify($senha,$usuariosExiste['senhaUsuario'])){
    header("Location:index.php");
} else {
    echo "<h1>e-mail ou senha inválida - tente novamente</h1>";
    echo "<a class='btn btn-primary' href='login.php'>Voltar para login</a>";
}