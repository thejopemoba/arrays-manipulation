<?php

$dados = [
    'nome' => 'Beatriz',
    'nota' => 9,
    'idade' => 18,
];

/* essa função pega todas as chaves e transforma em variáveis já existentes, porém
a doc diz para NUNCA utilizar com dados externos, podendo alterar o comportamento
do programa */

extract($dados);

/* já essa função, é o contrário da extract, transforma variáveis já existentes,
transformando-as em um array*/

var_dump(compact('nome', 'nota', 'idade'));

?>