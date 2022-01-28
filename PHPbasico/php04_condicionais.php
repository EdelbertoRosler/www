<?php
//------------------------ Condicionais ---------------------------

$name = "Davi";
$age = 15;

# IF                                    # Não precisa usar chaves quando for apenas uma linha de comando
if($name == "Davi") echo "Encontramos seu nome em nossos sistemas!";

echo "<br>";

# IF ... ELSE                           # Não precisa usar chaves quando for apenas uma linha de comando
if($age >= 12 && $age < 18) echo "Adolescente!";
    else echo "Adulto!";

echo "<br>";

# IF ... ELSEIF ... ELSE                 # Não precisa usar chaves quando for apenas uma linha de comando
if($age > 0 && $age < 12) 
    echo "Criança!"; 
elseif($age >= 12 && $age < 18) 
    echo "Adolescente!";
elseif($age >= 18 && $age < 65) 
    echo "Adulto!";
else 
    echo "Idoso!";

echo "<br>";

# Quando usamos o php dentro do html é comum não usar as "{}", e neste caso,
# coloca-se dois pontos no lugar da abertura das chaves ( { ) e endif no seu fechamento ( } ).
$number = 10;
if ($number == 10):
    echo "Acertou";
else :
    echo "Errou";
endif;


# Condicional dentro de condicioanal
$number = 112;

if($number > 0)
if($number > 100) 
echo "O número $number é maior que 100";
elseif($number == 100) 
echo " O número $number é igual a 100";
else 
echo "O número $number é positivo, mas menor que 100";
else echo "O número $number é negativo";


echo "<br>";
//----------------------------- Switch --------------------------------

$name = "Anna";

# deve-se atentar para o uso dos ":" e do break
switch($name){
    case "Maria":
        echo 1;
        break;
    case "Anna":
        echo 2;
        break;
    case "Mariana":
        echo 3;
        break;
    default :
        echo 0;
        break;
}
  

            
//-------------------------- Operador Ternário ----------------------------

$opcao = 0;

# Se opcao é igual a 1 então name = Tiago, senão name = Marcos
$name = $opcao == 1 ? "Tiago" : "Marcos";

# Outra maneira seria assim:
$opcao == 1 ? $name = "Tiago": $name = "Marcos";

# Apresentando um texto direto
echo $opcao == 1 ? "Pagamento efetuado!" : "Aguardando pagamento...";


// Usando html junto com o php -------------------
# comparado estrutura do IF com o Operador Ternário
?>

<!-- usando IF -->
<?php if($opcao == 1): ?>
    <h2>Pagamento efetuado!</h2>
<?php else: ?>
    <h2>Aguardando pagamento...</h2>
<?php endif; ?>
    
<!-- com operador ternário -->
<h2><?= $opcao == 1 ? "Pagamento efetuado!" : "Aguardando pagamento..."; ?></h2>


<!-- controlando o CSS -->
<h2 style="color: <?= $opcao == 1 ? "red" : "blue"?>"> Definindo a cor deste texto em php </h2>



<?php
//------------------------------- Match ------------------------------------
# ele só resolve uma expressão por condição. 
 $value = 75;

 echo match($value){
     25 => "Baixo",
     50 => "Intermediário",
     75 => "Bom",
     100 => "Otimo",
     default => "Sem Comentários"
 };
 echo "<br>";

 # posso colocar mais de um valor para teste
 echo match($value){
    0, 10, 20 => "Baixo",
    30, 40, 50, 60 => "Intermediário",
    70, 80 => "Bom",
    90, 100 => "Otimo",
    default => "Sem Comentários"
};
echo "<br>";


# No Switch a comparação é por valor (==)
# No Match a comparação é por valor e tipo (===)
# exemplo:

$x = "1";

switch($x){
    case 1: 
        echo "Inteiro"; break;
    case "1":
        echo "String";
}                       # Inteiro

echo "<br>";

echo match($x){
    1 => "Inteiro",
    "1" => "String"
};                      # String

//---------------------------------------------------------------------------------------------------------

