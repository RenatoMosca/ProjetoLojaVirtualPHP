<?php
    if($_POST){

            $nomeCliente = $_POST["nomeCliente"];
            $nomeProduto = $_POST["nomeProduto"];

            

    }else {
        header("Location: index.php");
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
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Olá <?php echo $nomeCliente; ?>. Parabéns pela sua compra do produto <?php echo $nomeProduto; ?>
                </div>
            </div>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary">Voltar para Home</a>
            </div>
        </section>
    </main>

</body>
</html>