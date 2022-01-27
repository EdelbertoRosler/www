<?php 
/*
Crie um script php
Crie duas variáveis: nome e sobrenome
Numa estrutura básico de html, apresente um título estático h3 com o texto: "Meu nome é:"
Apresente numa tag h1 o nome completo apartir das variáveis
*/

$nome = "Edelberto";
$sobrenome = "Rösler";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title></title>
</head>
<body>

<h3> Meu nome é:</h3>
<h1><?= "$nome $sobrenome"?></h1><!-- o sinal de "=" substitui o echo-->

<!-- outra forma seria assim-->
<h1><?php echo $nome . " " . $sobrenome?></h1>

</body>

</html>

