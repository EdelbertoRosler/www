<?php

//--------------- variáveis---------------\\
//em variáveis usa-se o sifrão na frente

$teste = 100;   # int
$percent = 0.1; # float
$string1 = "string 1"; # string
$string2 = 'string 2'; # string pode ser com aspas simples tmbem
$bool = true; # boolean
$array = [0,1,3,5]; # array
// $pessoa = new Pessoa(); # objeto
//a mesma variável pode receber tipos diferentes
$teste = "cem";
echo "Valor do teste: $teste";
echo '<br>'; #quebra de linha

//"---------------- operadores e atribuição ---------------<br>";
$a = 8 + 2;        # soma (10)
$b = $a - 3;       # subtração (7)
$c = $a * 3;       # multiplicação (30)
$d = $c / 3;       # divisão (10)
$e = ($c + 1) % 2; # resto divisão (1)
$f = 5 ** 2;       # potência (25)

$a = 10; $b = 7; $c = 30; $d = 10;

$a += 5;           # 15
$b -= 3;           # 4
$c *= 2;           # 60
$d /= 2;           # 5


//"---------------- incremento ---------------<br>";
$a = 10; $b = 7;

$a ++ ;           # 11
$b -- ;           # 6


//"------------igualdade, diferença e comparação----------<br>";

$a = 10;
$b = "10";
$c = 250;
$d = 175;

$a == $b;        # valor igual. (true)
$a === $b;       # valor e tipo igual. (false)
$a != $b;        # false
$a !== $b;       # true

$c > $b;         # maior que. (True)
$c < $b;         # menor que. (False)
$c >= $b;        # maior ou igual. (True)
$c <= $b;        # menor ou igual. (False)

# spaceship operator
$x = 1 <=> 1;  # retorna 0 se (1 == 1 ou 1 === 1) - o primeiro elemento é == o segundo
$x = 3 <=> 2;  # retorna 1 se (3 > 2) - o primerio elemento é maior que o segundo
$x = 1 <=> 2;  # retorna -1 se (1 < 2) - o primerio elemento é menor que o segundo


//"----------------------- operadores lógicos ------------------------<br>";
$a = 10;
$b = 20;
$c = false;

# && = END - e
# || = OR - ou
# ! = NOT - negação

$x= ($a < $b) && ($a < 100); 
   #( true    &&    true  ) AND (true)
$x= ($a > $b) || ($a > 100);
   #( false   ||    false  ) OR (false)
$x= ($a <= $b) && ($a > 100);
   #( true     &&    false ) AND (false)
$x= ($a < $b) || ($b < $a);
   #( true    ||    false  ) OR (true)
$x= !($a < $b) || ($b < $a);
   #(not true  ||  false  ) OR (false)

