<?php

$height = 1.76;
$kilo = 78;

$imc = $kilo / $height ** 2;

echo " Seu IMC é <b>$imc</b>.<br> Conforme OMS, seu IMC está na categoria:<br>";

if ($imc < 18.49) echo "<b>Baixo</b>";
elseif ($imc > 18.49 && $imc < 24.99) echo "<b>Adequado</b>";
elseif ($imc > 24.99 && $imc < 29.99) echo "<b>Sobrepeso</b>";
else echo "<b>Obesidade</b>";

