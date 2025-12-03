<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES</title>
</head>
<body>
    <h1>Operadores Aritimeticos</h1>
    <?php
    //Operadores Aritimeticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = 4 - 2;
    $multiplicacao = 4 * 3;
    $potenciacao =2 ** 2;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
 
    echo "Resultado da Soma é $soma <br>";
    echo "Resultado da Subtração é $subtracao <br>";
    echo "Resultado da Multiplicação é $multiplicacao <br>";
    echo "Resultado da Potenciação é $potenciacao <br>";
    echo "Resultado da Divisão é $divisao <br>";
    echo "Resultado do Resto da divisão de $a/$b é: $restodivisao <br> <br>";
 
    echo "============================================================";
    //Operadores de Atribuição
 
    echo "<h1> Operadores de Atribuição </h1>"; //Titulo
 
    $rua = "<br><br> Rua Amador Bueno";
    $rua .= " na Cidade de São Paulo";
 
    $preco = 2.45;
    $preco += 2.30;
    $preco -= 1.30;
 
    // Formata o número para usar vírgula como separador decimal
    $preco_formatado = number_format($preco, 2, ',', '.' );
 
    // Exibe o Resultado
    echo "$rua, <br> Preço R$ $preco_formatado <br> <br>";
 
    // Operadores de Comparação
 
    $c = 10;
    $d = "10";
 
    echo "<h1> Comparação de igualdade </h1>"; // <h1> </h1> Titulo podendo mudar de tamanho para h2/h3...
    echo ($c == $d) ? "São iguais." : "Não são iguais."; //? é tipo true e : é false / se senão
    echo "<br>";
    echo($c ===$d) ? "São Estritamente iguais." : "Não são estritamente iguais."; //? é tipo true e : é false
 
    echo "<h1> Comparação de Diferença </h1>";
 
    echo ($c != $d) ? "São Diferentes." : "Não são diferentres.";
    echo "<br>";
    echo ($c !== $d) ? "São estritamente diferentes." : "Não são estritamente diferentes.";
 
    $teste = false;
    echo "<h1> Negação </h1>";
    echo (!$teste) ? "É verdadeiro." : "É falso.";
 
    $e = 5;
    $f = 3;
 
    echo "<h1> Maior que e Menor que </h1>";
    echo ($e > $f) ? "E é maior que F." : "E Não é Maior que F";
    echo "<br>";
    echo ($e < $f) ? "E é maior que F." : "E não é Maior que F";
 
    $h = 4;
    $i = 4;
    $j = 2;
    echo "<h1> Maior ou Igual a, Menor ou Igual a </h1>";
 
    echo ($h > $i) ? "H é maior ou igual a I" : "H não é maior ou igual a I";
    echo "<br>";
    echo ($i <= $j) ? "I é menor ou igual a J" : "I não é menor ou igual a J";
    echo "<br>";
 
    //Operadores Lógicos
 
    echo "<h1> Operadores Logicos </h1>";
 
    $idade = 26;
    $tem_cnh = true;
 
    echo ($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir.";
    echo "<br>";
 
    $tem_ingresso = false;
    $tem_convitevip = true;
 
    echo($tem_ingresso or $tem_convitevip) ?"Você pode entrar na festa." : "Você não pode entrar na festa.";
    echo "<br>";
   
    // && para and e || para or
 
    $sol = true;
    $sem_chuva = false;
    $feriado = true;
 
    echo($sol && $sem_chuva || $feriado) ? "Você pode sair para passear" : "Melhor ficar em casa";
 
 
    ?>
</body>
</html>