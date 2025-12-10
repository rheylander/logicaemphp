<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 


    //      Exercícios com if e else:
    /*  1. Faça um programa que verifique se um número é positivo ou negativo.
    O programa deve receber um número do usuário e, em seguida, imprimir se o 
número é positivo ou negativo. Se o número for igual a zero, deve imprimir "O 
número é zero".*/

    echo "<h2>1. Verifique se o número é positivo ou negativo.</h2>";

    $numerodousuario = 5;

    if ($numerodousuario >= 0 )
        
        {   
        echo "O número é positivo ." ;
        }
        
        elseif ($numerodousuario <= 0)
        {
        echo "o número é negativo .";
        }

        else
        {
            echo "número inválido .";
        }




        /* pula uma linha */ echo "<br><br>";

    //  2. Faça um programa que classifique a nota de um estudante
    /*  O programa deve receber a nota de um estudante (de 0 a 10) e, com base nessa nota,
    classificar o desempenho do estudante:
    De 0 a 4.9: "Reprovado"
    De 5 a 6.9: "Recuperação"
    De 7 a 8.9: "Aprovado"
    De 9 a 10: "Aprovado com Distinção"*/
    
        echo "<h2>2. Confirme se o aluno foi aprovado ou reprovado.</h2>";

        $notadoaluno = 10.0;

        if ($notadoaluno >= 0 && $notadoaluno <= 4.9 )
        {
            echo "Reprovado .";
        }

        elseif($notadoaluno >= 5 && $notadoaluno <= 6.9)
        
            {
                echo "Recuperação .";
            }

        elseif($notadoaluno >= 7.0 && $notadoaluno <= 8.9)
        {
            echo "Aprovado .";
        }
        
        elseif($notadoaluno >= 9.0 && $notadoaluno = 10.0)
        {
            echo "Aprovado com distinção .";
        }
        
        else 
        {
            echo "Nota Inválida .";
        }


         /* pula uma linha */ echo "<br><br>";

         /* 3. Faça um programa que verifique se uma pessoa pode votar
    O programa deve receber a idade de uma pessoa e verificar se ela pode votar ou 
    não. A idade mínima para votar é 16 anos. Se a pessoa tiver entre 16 e 17 anos, 
    pode votar, mas não é obrigatório. Para pessoas acima de 18 anos, o voto é 
    obrigatório.*/

         echo "<h2>3. Verifique se uma pessoa tem direito ao voto.</h2>";
        /*pular uma linha*/ echo "<br>";
        $idade = 17;

        if ($idade < 16)
        {
            echo "você não pode votar .";
        }

        elseif ($idade >= 16 && $idade <= 17)
        {
            echo "Você tem direito ao voto .";
        }

        elseif ($idade >=18)
        {
            echo "Você tem direito e obrigação ao voto.";
        }
       
        else 
            {
            echo "Idade informada inválida .";
            }

        /* pula uma linha */ echo "<br>";

        /*  4. Faça um programa que verifique se um número é par ou ímpar
        O programa deve receber um número inteiro e verificar se ele é par ou ímpar. Se o 
        número for par, o programa deve imprimir "O número é par". Caso contrário, deve 
        imprimir "O número é ímpar". */

        echo "<h2> 4. O número é par ou ímpar?</h2>";

        $number = 10;

        if ($number % 2 == 0) 
            {
            echo "O número é par";
            } 
        else 
            {
            echo "O número é ímpar";
            }
        ?>

        


        


        /* pula uma linha */ echo "<br>";

        /*       5. Faça um programa que calcule o preço de um ingresso de cinema baseado no horário
        O programa deve receber o horário de uma sessão de cinema (em formato de 24 
        horas) e aplicar a seguinte lógica:
        Se o horário for entre 10:00 e 12:00: "Preço do ingresso: R$ 10,00" (matinal)
        Se o horário for entre 12:01 e 17:00: "Preço do ingresso: R$ 20,00" (diurno)
        Se o horário for entre 17:01 e 22:00: "Preço do ingresso: R$ 30,00" (noturno)
        Se o horário for entre 22:01 e 23:59: "Preço do ingresso: R$ 40,00" (última sessão) */
                
    ?>
    
</body>
</html>