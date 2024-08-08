<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo php</title>
</head>

<body>

    <h1>
        <?php

        $nome = "gustavo"; ///Variável
        const SOBRENOME = "velho"; //Constante (só da para concatenar com o ".")
        var_dump($nome); //testa o tipo 



        echo "ola $nome";
        echo " seu sobrenome é"  .  SOBRENOME;

        ?>
    </h1>




</body>

</html>