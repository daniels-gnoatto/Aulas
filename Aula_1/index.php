<?php

    $mensagem = 'Olá, mundo!';
    echo $mensagem;
    
    echo '<h2>Olá, Mundo!</h2>';

    $primeiro_nome = 'daniel';
    $idade = 18;
    $gosta_de_bola = true;

    $resultado = 2025 - $idade;
    echo $resultado;
    
    echo '<br>';
    echo '<br>';

    $num = 37.5;
    echo $num;

    $num2 = (int) $num;
    echo '<br>';
    echo $num2;

    $nota = 10;

    if($nota >= 7){
        echo '<p>Passou na prova</p>';
    }else if($nota == 10){
        echo '<p>Como vc fez isso</p>';
    } else{
        echo '<p>Reprovou na prova</p>';
    };

    for($i = 0; $i <= 5; $i++){

        //echo '<p> Contagem:'. $i . '</p>'

        echo "<p> Contagem: $i  </p>";
    };

    $frutas = array('laranja','banana','tomate','bergamota');

    echo $frutas[2];

    echo '<br>';

    function saudacao ($nome){
        return "Olá, $nome";
    };

    echo saudacao('Douglas');
 
?>