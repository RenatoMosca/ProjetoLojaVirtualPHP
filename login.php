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
            <form action="logarUsuario.php" method="post">

            <div class="form-group">
                <label for="emailUsuario">e-mail</label>
                <input type="email" class="form-control" id="emailUsuario" placeholder="digite o e-mail do Usuário" name="emailUsuario">
            </div>
            <div class="form-group">
                <label for="senhaUsuario">Senha</label>
                <input type="password" step="any" class="form-control" id="senhaUsuario" placeholder="digite a senha do Usuario" name="senhaUsuario">
            </div>
            <a href="cadastroUsuario.php" class="btn btn-primary">Cadastre-se</a> <button class="btn btn-success" type="submit">Logar</button>
            </form>
        </div>
    </section>
</main>




</body>
</html>