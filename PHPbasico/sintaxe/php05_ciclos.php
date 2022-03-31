<?php

//---------------------------- While --------------------------------//
echo "Usando While...<br>";

$i = 0;
while($i < 10){
    echo $i++ . " ";
}

echo "<br>";

$i = 0;
while($i < 10) echo $i++ . " ";             # posso fazer em uma linha se estiver apenas um comando


//-------------------------- Do While ------------------------------//
echo "<br><br>Usando Do While...<br>";

$i = 0;
do {
    echo $i++ . " ";
} while($i < 10);


echo "<br>";

$i = 0;
do echo $i++ . " "; while($i < 10);         # posso fazer em uma linha se estiver apenas um comando


//-------------------------- FOR ------------------------------//
echo "<br><br>Usando For...<br>";

for($i = 0; $i < 10; $i++){
    echo $i . " ";
}

echo "<br>";

for($i = 0; $i < 10; $i++) echo $i . " ";   # posso fazer em uma linha se estiver apenas um comando

echo "<br>"; # quebra de linha-------

# o primeiro e o último parâmetros podem ter mais de uma variável para aplicar a lógica necessária
for($cont = 0, $i = 9; $cont < 10; $cont++, $i--)
    echo "i: $i - cont: $cont <br>";

echo "<hr>";
echo "Usando for <br>";
$nomes = ["Anna", "Paul", "Joao", "Carla"];
for($i = 0; $i < sizeof($nomes); $i++)
    echo "$nomes[$i], ";

echo "<hr>";


echo "Usando foreach <br>";

//------------------------------ FOREACH ----------------------------------

$nomes = ["Anna", "Paul", "Joao", "Carla"];
foreach ($nomes as $n) {
    echo "$n, ";
}

echo "<br><br>";
# Usando chave e valor:
$estados = [
    "Rio Grande do Sul" => "Porto Alegre",
    "Paraná" => "Curitiba",
    "Santa Catarina" => "Florianópolis",
    "Minas Gerais" => "Belo Horizonte"
];
foreach ($estados as $key => $value) {
    echo "O estado do $key tem como capital $value<br>";
}
