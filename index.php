<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
</head>
<body>
    <h1>
        <?php
            $minhaVar = "MOSCA";
            echo $minhaVar."<br>";
            if($minhaVar != "xpto"){
                echo "entrou no if";
            } else {
                echo "não atendeu if";
            }
            echo "<br>";

            for ($i=0; $i < 5; $i++) { 
                echo $i."<BR>";
            }
            echo "<br>";

            var_dump($minhaVar);
        ?>
    </h1>
</body>
</html>