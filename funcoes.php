
<?php 
    session_start();
    
    function logarUsuario($nome, $nivelAcesso){
        $usuario = ["logado"=>true,"nome"=>$nome,"nivelAcesso"=>$nivelAcesso];
        $_SESSION['usuario'] = $usuario;
    }

    function addProduto($nome, $descricao, $preco, $img){
        // A função file_get_contents() é utilizada para leitura de um arquivo
        // inteiro em uma string.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fread -> fclose
        $jsonProdutos = file_get_contents("Produtos.json");
        // json_decode(), transforma um JSON em um objeto contendo um array associativo.
        $produtos = json_decode($jsonProdutos, true);
        
        //este comando "entra" dentro do Produtos definido no Json
        // $produtos = $produtos["Produtos"];

        $chave = count($produtos['Produtos']) + 1;
        $novoProduto = ["id"=>"produto$chave","nome"=>$nome, "descricao"=>$descricao, "preco"=>$preco, "img"=>$img];
        
        $produtos["Produtos"][]=$novoProduto;
        
        //json_encode(), é utilizada para gerar um JSON.
        $jsonProdutos = json_encode($produtos);

        //A função file_put_contents() é utilizada para gravar dados em um arquivo.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fwrite -> fclose
        file_put_contents('Produtos.json', $jsonProdutos);

        return true;
    }

    function validarNome($nome){        
        return $nome != "" && strlen($nome) >= 3;
    }
   
    function validarCPF($cpf){
        return strlen($cpf) == 11;
    }

    function validarCartao($nrCartao){
        return strlen($nrCartao) == 16;
    }

    function validarDataValidade($dataValidade){
        return $dataValidade > date('y-m-d');
    }

    function validarCVV($cvv){
        return strlen($cvv) == 3;
    }

    function addUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $nivelUsuario){
        // A função file_get_contents() é utilizada para leitura de um arquivo
        // inteiro em uma string.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fread -> fclose
        $jsonUsuarios = file_exists("Usuarios.json")?file_get_contents("Usuarios.json"):"";
        // json_decode(), transforma um JSON em um objeto contendo um array associativo.
        $Usuarios = json_decode($jsonUsuarios, true);
        
        $itensUsuarios = is_array($Usuarios['Usuarios'])?count($Usuarios['Usuarios']):0;
        $chave = $itensUsuarios + 1;
        $novoUsuario = ["id"=>"usuario$chave","nomeUsuario"=>$nomeUsuario, "emailUsuario"=>$emailUsuario, "senhaUsuario"=>$senhaUsuario, "nivelUsuario"=>$nivelUsuario];
        
        $Usuarios["Usuarios"][]=$novoUsuario;
        
        //json_encode(), é utilizada para gerar um JSON.
        $jsonUsuarios = json_encode($Usuarios);

        //A função file_put_contents() é utilizada para gravar dados em um arquivo.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fwrite -> fclose
        file_put_contents('Usuarios.json', $jsonUsuarios);

        return true;
    }
