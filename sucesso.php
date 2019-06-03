<?php

function validarCompra($dadosCompras){
    $erros = [];
    if (!$dadosCompras){
        $erros[] = "Não foi recebido nenhum dado no formulário";
    }
    if (!validarNome($dadosCompras["nomeCliente"])){
        $erros[] = "Nome inválido - verifique!";
    }
    if (!validarCPF($dadosCompras["cpfCliente"])){
        $erros[] = "CPF inválido - verifique!";
    }
    if (!validarCartao($dadosCompras["cartaoCliente"])){
        $erros[] = "Cartão inválido - verifique!";
    }
    if (!validarDataValidade($dadosCompras["dataValidadeCartao"])){
        $erros[] = "Data do Cartão inválida - verifique!";
    }
    if (!validarCVV($dadosCompras["cvvCartao"])){
        $erros[] = "CVV do Cartão inválido- verifique!";
    }
    return $erros;
}

    
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "head.php"; ?>
<body>
    <?php include "header.php"; ?>
    <!-- main.container>section.row>div.col-md-12 digitar e dar enter Emmet-->
    <main class="container">
        <section class="row">
            <?php 
            $errosValidacao = validarCompra($_POST);
            if(count($errosValidacao) > 0): ?>
            <div class="col-md-12">
                <!-- exibir erros de cadastro -->
                <ul>
                    <?php foreach($errosValidacao as $erro): ?>
                        <li><?php echo $erro; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        Olá <?php echo $_POST['$nomeCliente']; ?>. Parabéns pela sua compra do produto <?php echo $_POST['$nomeProduto']; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary">Voltar para Home</a>
            </div>
        </section>
    </main>

</body>
</html>