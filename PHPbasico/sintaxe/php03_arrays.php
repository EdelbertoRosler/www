<?php
// ----------------------- Arrays ---------------------------

$numericArray = [2,4,6,8,10,12];        # declarar array normal
$textArray = ["João", "Maria", "Anna"];

# posso colocar chave específica (índice 10 recebe 1000...)
$arrayWithKey = [
    10 => 1000,
    20 => 2000,
    30 => 3000
];

# adicionar um elemento no array, ele vai para o final
$numericArray[] = 14;                   # [2,4,6,8,10,12,14]
$arrayWithKey[] = 3100;                 # o elemento vai assumir o último índice + 1, nesse caso, índice 31
array_push($numericArray, 16);          # [2,4,6,8,10,12,14,16]

# alterar um elemento
$textArray[1] = "Mariana";

# remover o último elemento
array_pop($numericArray);               # [2,4,6,8,10,12,14]

# contar o tamanho da array
echo count($numericArray);              # 7
echo "<br>";

# imprimir elemento de uma array
echo $numericArray[0];
echo "<br>";
echo $textArray[1];
echo "<br>";

#---------------Arrays Associativos--------------

# chave => valor
$register = [
    "name" => "Paulo Ribeiro",
    "CPF" => "001.002.003-04",
    "email" => "pauloribeiro@gmail.com"
];

echo $register["email"];            # pauloribeiro@gmail.com
echo "<br>";

#---------------Arrays Multidimencionais----------------

$values = [
    [10,20,30,40],
    [100,200,300,400],
    [1000,2000,3000,4000]
];
echo $values[1][2];                 # 300
echo "<br>";
echo $values[0][3];                 # 40
echo "<br>";


$cities = [
    "Brasil" => ["São Paulo", "Rio de Janeiro", "Curitiba"],
    "Portugual" => ["Lisboa", "porto", "Coimbra"],
    "Espanha" => ["Madrid", "Barcelona", "Sevilha"]
];
echo $cities["Brasil"][2];          # Curitiba
echo "<br>";
echo $cities["Espanha"][0];         # Madrid
echo "<br>";



