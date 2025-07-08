<?php

    $mensagem = 'Olá, mundo!';

    echo $mensagem;

    echo '<h2> Olá, mundo! </h2>';

    $primeiro_nome = 'Amanda';
    $idade = 18;
    $gosta_de_bolo = true;
    $resultado_ano = 2025 - $idade;

    echo $resultado_ano;

    echo '<br>';
    echo '<br>';

    $num = 37.5;

    echo $num;

    $num2 = (int) $num;
    echo '<br>';
    echo $num2;

    $nota = 8;

    if($nota >=7){
        echo '<p>Passou na Prova </p>';
    }else if($nota > 10){
        echo '<p> Como você fez isso? </p>'; 
    }else{
        echo '<p>Reprovou na prova.</p>';
    };

    for ($i = 0; $i <=5; $i++){
        //echo '<p> contagem'  .$i.  '</p>';
       echo "<p> contagem: $i </p>";

    }

    $frutas = array ('laranja', 'banana', 'tomate', 'bergamota');
    echo $frutas [3];
    
    echo'<br>';
    
    function saudacao ($nome){
        return "Olá  $nome";
    };

    echo saudacao('Amanda');

   
?>