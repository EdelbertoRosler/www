<?php 
/*
Crie um script php.
Crie duas variáveis: nome e sobrenome.
Apresente o nome completo num parágrafo de html.
Num segundo parágrafo, apresente o seguinte: "Seu nome tem "x" caracteres". (x é o total).
*/

$nome = "João";
$sobrenome = "Vitor";
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

<h2><?= $nomeCompleto?></h2><!-- o sinal de "=" substitui o echo-->
<h2><?= "Seu nome tem " . mb_strlen($nomeCompleto) . " caracteres"?></h2> 

</body>

</html>