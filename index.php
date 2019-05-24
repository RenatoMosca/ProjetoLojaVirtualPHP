
<?php 
    // $nome = "Mosca";
    // $usuario = "";
    $usuario = ["logado"=> true,
                "nome"=>"Mosca",
                "nivelAcesso"=> 0];
    // $logado = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Cursos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Ações <span class="sr-only">(current)</span></a>
                </li> -->
                <?php if (isset($usuario) && $usuario != "" && $usuario["logado"]): ?>

                    <?php if ($usuario["nivelAcesso"] == 0):?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Ações <span class="sr-only">(current)</span></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php endif: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>

                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                <?php endif; ?>
             </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>        
    </header>
    <!-- Utilities: mt-5 coloca um espaço entre a navbar e o corpo do site -->
    <main class="container mt-5">
        <section class="row">
        <!-- Coluna para segurar card -->
            <div class="col-md-4"> <!-- para segurar 3 colunas de 4 tabs = 12 colunas -->
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Full Stack</h5>
                        <p class="card-text">Curso de desenvolvimento web</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Full Stack</h5>
                        <p class="card-text">Curso de desenvolvimento web</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Full Stack</h5>
                        <p class="card-text">Curso de desenvolvimento web</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- fim coluna card -->
        </section>
        
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>