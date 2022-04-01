<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Contas Correntes</h1>
<?php

#tres formas de buscar outros arquivos: include; require e require_once
//include 'funcoes.php';//Não dá erro se o arquivo não for encontrado, apenas um aviso
//require 'funcoes.php';//gera error caso não encontre o arquivo
require_once 'funcoes.php';// melhor, pois ele importa o arquivo apenas uma vez
require_once 'criar_conta.php';
require_once 'Conta.php';


// $contas = [
//     '111.001.001-11' => [
//         'titular' => 'Beto',
//         'saldo' => 2800
//     ],
//     '222.002.002-22' => [
//         'titular' => 'Lise',
//         'saldo' => 3700
//     ],
//     '333.003.003-33' => [
//         'titular' => 'Gabriel',
//         'saldo' => 1855
//     ]
// ];

// $contas['111.001.001-11'] = saque($contas['111.001.001-11'], 500);//total 2300
// $contas['111.001.001-11'] = deposito($contas['111.001.001-11'], 1000);//total 3300

// foreach($contas as $cpf => $dados){
//     mensagem($cpf . "  " . $dados['titular'] . " = " .  $dados['saldo']);
// };//dentro de contas, a chave será cpf, e cada um tera seus dados

// echo "<br>";

// letrasMaiusculas($contas['333.003.003-33']);

// // outra sintaxe para imprimir a array:---------------
// foreach ($contas as $cpf => $dados) {
//     mensagem( "$cpf {$dados['titular']} {$dados['saldo']}" );
// }

// echo "<br>";

// // outra sintaxe para imprimir a array:---------------
// //pegando os valores de uma lista através de variáveis individuais
// foreach ($contas as $cpf => $dados) {
//     ['titular' => $titular, 'saldo' => $saldo] = $dados;
//     mensagem( "$cpf $titular $saldo");
// }

echo "<br>";

// $contas[0] = criar_conta("111.001.001-11", "Fabiano Cruz", 555);
// $contas[1] = criar_conta("222.002.002-22", "Gabriel Teixeira", 1250);
// $contas[2] = criar_conta("333.003.003-33", "Ana Lucia", 7888);
$contas = criar_conta("004.004.004-44", "Roberto Rio Sul", 2300);

foreach ($contas as $cpf => $dados) {
    mensagem( "$cpf - {$dados['titular']} - R$ {$dados['saldo']}" );
}

echo "<br>";


$primeira = new Conta();

$primeira->cpf = "111.001.001-11";
$primeira->titular = "Roberto";
$primeira->saldo = 875;

var_dump($primeira);
echo "<br>";



?>

<d1><!--usado para lista-->
    <?php foreach ($contas as $cpf => $value) { ?>
        <dt><!--definição de um termo na lista-->
            <h3> <?= $value['titular']; ?> - <?= $cpf; ?> </h3>
        </dt>
        <dd><!--detalhes da descrição-->
            saldo: <?= $value['saldo']; ?>
        </dd>
    <? }?>
</d1>


</body>

</html>