<?php

//---------------------------- functions --------------------------------//

function sum($x, $y)
{
    echo "$x + $y = " . ($x + $y); # até o php 7 precisava colocar os parênteses por causa da concatenação
}

// ou com retorno:
function sum2($x, $y)
{
    return $x + $y;
}

sum(10, 15); # 10 + 15 = 25
echo "<br>";
echo sum2(10, 15); # 25
echo "<br>";


$name = "joao";
if(testName($name)){ 
    echo "Cliente correto!"; 
}

function testName($n)
{
    if ($n == "Joao"){ 
        return true; 
    } else {
        return false; 
        }
}




//----------------- parâmetros opcionais e name arguments -----------------//

function multiplication($x, $y = 2) # posso deixar um valor default para caso não seja passado no argumento 
{                                   # mas os parâmetros opcionais devem ser colocados depois dos não opcionais, nunca antes
    echo $x * $y;
}

multiplication(10, 15); # 150
echo "<br>";
multiplication(10); # 20

echo "<br>";

    
function addThree($a, $b = 10, $c = 100) # exemplo name arguments >>>>>>> obs: introduzido no php 8
{
    echo $a + $b + $c;
}

addThree(50, c: 500); # a=50; b=10; c=500 (560) - na hora de chamar a função posso especificar o valor dos argumentos
echo "<br>";
addThree(c: 200, a: 0); # a=0; b=10; c=200 (210) - a ordem não importa

echo "<br>";


//------------------- escopo de variáveis nas funções ---------------------

$a = 100;

function test()
{
    global $a; # global serve para trazer a variável externa para dentro da função
    $a = 200;
}
test();
echo $a; # se eu chamar a função test() antes, a variável vai assumir o valor passado na função, caso eu não tenha chamado a função, o valor continua sendo o valor inicial


$b = 500;

function test2()
{
    $GLOBALS["b"] = 1000; # dentro dessa função o valor da variável b assume o novo valor passado
}

test2();
echo "<p>$b</p>";