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
            <form action="salvarUsuario.php" method="post">

            <div class="form-group">
                <label for="nomeUsuario">Nome do Usuário</label>
                <input type="text" class="form-control" id="nomeUsuario" placeholder="digite o nome do Usuário" name="nomeUsuario">
            </div>
            <div class="form-group">
                <label for="emailUsuario">e-mail</label>
                <input type="email" class="form-control" id="emailUsuario" placeholder="digite o e-mail do Usuário" name="emailUsuario">
            </div>
            <div class="form-group">
                <label for="senhaUsuario">Senha</label>
                <input type="password" step="any" class="form-control" id="senhaUsuario" placeholder="digite a senha do Usuario" name="senhaUsuario">
            </div>
            <div class="form-group">
                <select name="nivelUsuario" class="form-control" id="nivelUsuario">
                    <option selected disabled>Selecione o nível de Acesso</option>
                    <option value="0">Administrador</option>
                    <option value="1">Usuário</option>                    
                </select>
            </div>
            
            

            <button class="btn btn-success" type="submit">Finalizar cadastro</button>
            </form>
        </div>
    </section>
</main>




</body>
</html>