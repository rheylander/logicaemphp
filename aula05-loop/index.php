<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, Do While, for, foreach</title>
</head>
<body>
    <h3>
    <?php    
    //While
    echo "<h2>While</h2>";
    $i = 1;
    while ($i <= 5){
        echo $i . "<br>"; //Imprimeo valor de $i e pula para a proxima linha.
        $i++;
    }
   
    echo "<br>";
    $j = 2;
    while ($j <= 10) {
        echo $j . "<br>"; //Imprime os números pares
        $j += 2; //Incrementa de 2 em 2, o mesmo que $j = $j + 2
    }
   
    //Do While - Faça Enquanto
    echo "<h2>Do While</h2>";
    $m = 1;
    do {
        echo $m . "<br>";
        $m++;
    } while ($m <= 5 );
   
    //For
    echo "<h2> For </h2>";
   
    for ($n = 1; $n <= 5; $n++) {
        echo $n . "<br>";
    }
    echo "<br>";
    for ($p = 1; $p <= 5; $p++){
        echo "O quadrado de $p é " . ($p * $p) . "<br>";
    }
   
 
    //Foreach
    echo "<h2> Foreach </h2>";
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>"; //Imprime o nome de cada fruta
    }
    echo "<br>";
    $idades = [
        "João" =>25,
        "Maria" => 30,
        "Pedro" => 22
    ];
 
    foreach ($idades as $nome => $idade)
    {
        echo "$nome tem $idade anos. <br>"; // Exibe nome e idade
    }
 
    ?>
</h3>
</body>
</html>
 