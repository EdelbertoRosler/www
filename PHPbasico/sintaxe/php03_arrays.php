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

$numericArray[] = 14;                   # adicionar um elemento no final do array
array_push($numericArray, 16, 18);      # adiciona um ou mais elementos no final do array
array_unshift($numericArray, 13);       # adiciona um elemento no início do array
$textArray[1] = "Mariana";              # alterar um valor, indicando a chave
array_pop($numericArray);               # remover o último elemento - retorna o seu valor
array_shift($numericArray);             # remover o primeiro elemento - retorna o seu valor
unset($numericArray[3]);                # remover um elemento específico; esta função também remove uma variável
count($numericArray);                   # contar o tamanho da array
echo $numericArray[3];                  # imprimir um elemento de uma array
echo "<br>";

#--------------------
$numer = [6,4,100,29];

echo gettype($numer);                   # retorna o tipo da variárvel
if (is_array($numer)){
    echo " yes, this is a array!";
}#verifica se é array

echo"<br>";

array_is_list($numer);                  # verifica se a array é uma lista (chaves 0,1,2,3...)
array_key_exists(3, $numer);            # verifica se a chave existe
in_array(100, $numer, true);            # verifica se o valor existe - ele tem o parâmerto strict para verificar com true ele usa ===, e false ele usa ==
isset($numer);                          # verifica se a chave existe e não é nula
array_search(100, $numer);              # retorna a chave do valor passado
array_diff($array1, $array2);           # gera um novo array com os elementos que estão no primeriro array mas não estão no segundo (compara os valores)
array_diff_key($array1, $array2);       # gera um novo array com os elementos que estão no primeriro array mas não estão no segundo (compara as chaves)
array_diff_assoc($array1, $array2);     # compara tanto a chava quanto os valores 
array_flip($numer);                     # inverte chave-valor (o que era chave vira valor e vice-versa)
$novo = array_merge($array1, $array2);  # gerar um array através de outros arrays (não preserva as chaves)
$novo = [...$array1, ...$array2];       # gerar um array através de outros arrays - os três pontinhos serve para "desenpacotar"
extract($textArray);                    # cria variáveis com o nome das chaves de uma array
compact("João", "Maria", "Anna");       # cria um array através de variávies

#---------------Arrays Associativos--------------

# chave => valor
$register = [
    "name" => "Paulo Ribeiro",
    "CPF" => "001.002.003-04",
    "email" => "pauloribeiro@gmail.com"
];

echo $register["email"];                # pauloribeiro@gmail.com
echo "<br>";

#---------------Arrays Multidimencionais----------------

$values = [
    [10,20,30,40],
    [100,200,300,400],
    [1000,2000,3000,4000]
];
echo $values[1][2];                     # 300
echo "<br>";
echo $values[0][3];                     # 40
echo "<br>";


$cities = [
    "Brasil" => ["São Paulo", "Rio de Janeiro", "Curitiba"],
    "Portugual" => ["Lisboa", "porto", "Coimbra"],
    "Espanha" => ["Madrid", "Barcelona", "Sevilha"]
];
echo $cities["Brasil"][2];              # Curitiba
echo "<br>";
echo $cities["Espanha"][0];             # Madrid
echo "<br>";

//------------------------------------------------

$notas = [
    "Ana" => 8,
    "João" => 10,
    "Paulo" => 5,
    "Tiago" => 9
];

sort($notas);                           # ordenar, mas perde a referência das chaves
foreach ($notas as $key => $value) {
    echo "$key - $value <br>";
}
echo "<br>";

asort($notas);                          # ordena em ordem crescente pelo VALOR e mantém as chaves relacionadas com os valores correspondentes
// var_dump($notas);
foreach ($notas as $key => $value) {
    echo "$key - $value <br>";
}
ksort($notas);                          # ordena em ordem crescente pela CHAVE e mantém as chaves relacionadas com os valores correspondentes
arsort($notas);                         # ordena pelos valores decrescente
krsort($notas);                         # ordena pelas chaves decrescente


$provas = [
    [
        'aluno' => 'Beto',
        'nota' => 97,
    ],
    [
        'aluno' => 'Maria',
        'nota' => 78,
    ],
    [
        'aluno' => 'Adriano',
        'nota' => 65,
    ],
    [
        'aluno' => 'Bia',
        'nota' => 81,
    ],
];
echo"<br>";

foreach ($provas as $key => $value) {
    echo "$key {$value['aluno']} {$value['nota']}";
    echo"<br>";
};

echo"<br>";

# essa função de ordenação retorna -1 se nota1 < nota2; 1 se nota1 > nota2; 0 se nota1 == nota2 
function ordenaCresc(array $nota1, array $nota2): int {
    return $nota1['nota'] <=> $nota2['nota'];
};

usort($provas, 'ordenaCresc');          # ordena uma coleção em ordem crescente, o primeiro parâmetro é a coleção e o segundo parâmetro é uma função de ordenação

