<?php

$notas = [  // array multidimensional (array de arrays)
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => "Ana",
        'nota' => 9,
    ],
    
];

/* (<=>) Se o primeiro elemento for menor que o segundo ele retorna -1, caso for maior, 
retorna 1, caso for igual, retorna 0 */

function OrdenaNotas(array $nota1, array $nota2): int 
{
    return $nota2['nota'] <=> $nota1['nota']; 
};

/* A função usort espera dois parâmetros: o primeiro é um array que ela vai 
ordenar e o segundo é uma função que ensina para ela como ela vai ordenar. */ 

usort($notas, 'OrdenaNotas'); 

var_dump($notas);