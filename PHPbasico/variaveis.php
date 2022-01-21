<?php

//--------------- variáveis---------------\\
//em variáveis usa-se o sifrão na frente
$teste = 100;   # int
$percent = 0.1; # float
$strint = "string"; # string
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


//"---------------- igualdade ---------------<br>";

$sum = 10;
$div = "10";

$sum == $div;        # valor igual. Neste caso, dá true
$sum === $div;       # valor e tipo igual. neste caso, dá false

    

