<!DOCTYPE html>
<html lang="pt-br"> <!-- language = idioma-->
<head>
    <meta charset="UTF-8"> <!-- padrão de código -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- largura para exibir na tela: "1.0" = total-->
    <title>Meu Primeiro PHP</title> <!-- Título da página "que aparece na aba" -->
</head> <!-- cabeçalho -->
<body> <!-- parte que fica onde tudo que aparece na tela -->


</head>    
</body>
    <h2> <!-- muda o tamanho do texto - nesse caso: título em negrito-->
    <?php //programa em php = inicio
       
       echo "Meu primeiro PHP \u{1F600}" ; // inseri emoji use "\u" mais código dentre de "{}"
    
echo "<br> <br>"; // pula uma linha

    //Váriaveis
    $nome = "Ana";
    $sobrenome= "Cunha";

    //A variável pode ser mudada
    $nome = "Ana Claudia";

        echo "Seja bem-vindo $nome $sobrenome";

echo "<br> <br>"; // pula uma linha

    const time = "São Paulo";
        echo "Meu time de futebol é o " .time;

echo "<br> <br>"; // pula uma linha

    //Tipos de dados
    $sobrenome2 = "Albuquerque" ;  // string
    $idade = 45;                // int
    $peso = 85.7;               // float
    $casado = false;            // boolean

    echo "$sobrenome2 $idade $peso";

echo "<br> <br>"; // pula uma linha (duas quebras)

    //Método 1: Usando var_dump para exibir o valor do booleano
    var_dump($casado);

echo "<br> <br>"; // pula uma linha (duas quebras)


    //Método 2: Usando uma conversão para string
    echo ($casado ? "Casado" : "Não é casado");
        echo "<br> <br>"; // pula uma linha (uma quebra)

    //tipos primitivos        
    var_dump($sobrenome2);
        echo "<br>"; // pula uma linha (uma quebra)
    var_dump($idade);
        echo "<br>"; // pula uma linha (uma quebra)
    var_dump($peso);

    echo "<br> <br>"; // pula uma linha (duas quebras)

    $frase = "Meu time de futebol é o " .time;
    $frase2 = "Meu nome é $nome e meu sobrenome é $sobrenome";

    echo ($frase);
    echo "<br>";
    echo ($frase2);

?> <!-- encerra programação em php -->
    
    <h2>
    <p> Meu primeiro parágrafo</p>

</body>
</html>