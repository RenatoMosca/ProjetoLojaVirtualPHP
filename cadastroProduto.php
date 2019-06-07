<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "header.php"; ?>

<!-- main.container>section.row>div.col-md-6 modo abreviado-->
<main class="container">
    <section class="row">
        <div class="col-md-6">
            <!--  enctype="multipart/form-data" é usado para possibilitar enviar arquivos -->
            <form action="salvarProduto.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeProduto" placeholder="digite o nome do produto" name="nomeProduto">
            </div>
            <div class="form-group">
                <label for="descricaoProduto">Descrição Completa</label>
                <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="precoProduto">Preço</label>
                <input type="number" step="any" class="form-control" id="precoProduto" placeholder="digite o preço do produto" name="precoProduto">
            </div>
            <div class="form-group">
                <label for="imagemProduto">Imagem do Produto</label>
                <input type="file" name="arquivo" id="imagemProduto">
            </div>
            
            

            <button class="btn btn-success" type="submit">Finalizar cadastro</button>
            </form>
        </div>
    </section>
</main>




</body>
</html>