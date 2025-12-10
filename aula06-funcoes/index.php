<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h2> Funções </h2>";

    function saudacao()
    {
        echo "Olá, boas-vindas ao PHP !";
    }

    saudacao(); // chamando a função

    echo "<br><br>";
    function somar($a,$b)
    {
        return $a + $b;
    }

    $resultado = somar (5, 3); // Chamando a função e passando os argumentos
    echo "Resultado da soma? ";
    echo "<br>" . $resultado; 

    echo "<br><br>";
    function saudacaoPersonalizada($nome = "Visitante")
    {
        echo "Olá, $nome ! Boas-vindas ao nosso site !";
    }

    saudacaoPersonalizada(); // Chamada sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada("Carlos"); // Chamada com argumento

    echo "<br><br>";
    function encontrarMaiorValor($array)
    {
        return min ($array); // Função max() encontrar o maior valor no array
    }

    $valores = [2, 5, 9, 1, 3] ;
    echo "O maior valor é: " . encontrarMaiorValor($valores);

    
    ?>

</body>
</html>