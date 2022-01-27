<?php 
/*
Crie um script php.
Crie duas variáveis: nome e sobrenome (ambas em minúsculas)
Numa página html simples, apresente o seguinte:
Seu nome é: NOME e seu sobrenome é; SOBRENOME (ambas em MAIÚSCULAS)
*/

$nome = "joão";
$sobrenome = "vitor";
$nomeCompleto = "$nome $sobrenome";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title></title>
</head>
<body>

<h2><?= "Seu nome é: " . mb_strtoupper($nome) . " e seu sobrenome é: " . mb_strtoupper($sobrenome)?></h2><!-- o sinal de "=" substitui o echo-->

</body>

</html>