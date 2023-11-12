<?php

/* tupla é um pequeno conjunto de elementos onde a posição dele pode significar algo
(no PHP não tem isso, é só para contextualizar pq temos algo parecido) */

/* isso é um simples array, porém para eu dar significado para ele eu devia
colocar em variáveis a parte cada elemento, mas o php tem um função para isso 
"list()" */

$dados = ['João', 10, 20];

list($nome, $nota, $idade) = $dados; 

// desde o php 7.1, podemos usar essa sintaxe:

[$nome, $nota, $idade] = $dados;

// caso tenha arrays associativos como:

$dados2 = [
    'nome' => 'Beatriz',
    'nota' => 9,
    'idade' => 18,
];

// tem que informar as chaves dentro da função list:

['nome' => $nome2, 'nota' => $nota2, 'idade' => $idade2] = $dados2;   

var_dump($nome2, $nota2, $idade2);

//ex

$contas = [
    [
        'titular' => "Beatriz Ferreira",
        'saldo' => 600
    ],
    [
        'titular' => "João Pedro",
        'saldo' => 1810
    ],
    [
        'titular' => "Ellen Cristina",
        'saldo' => 3500
    ],
];

// definindo as variáveis aproveitando da função list

foreach($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais." . PHP_EOL;
}

?>