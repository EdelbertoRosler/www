<?php

//-------------- concatenação de strings ----------------

$a = "João" . " " . "da Silva"; # o ponto concatena strings
echo "$a (caso 01)<br>";

$b = "João";
$b .= " da Silva"; # o "ponto e igual" faz a concatenação com o valor já existente da string
echo "$b (caso 02)<br>";

$nome = "joão";
$sobrenome = "da Silva";
$espacoEmBranco = " ";
$nomeCompleto = $nome . $espacoEmBranco . $sobrenome; # posso utilizar o ponto para conctenar as variáveis ou...
$nomeCompleto2 = "$nome $espacoEmBranco $sobrenome"; #...colocar as variáveis dentro de aspas duplas sem o ponto.
echo "$nomeCompleto (caso 03)<br>";
echo "$nomeCompleto2 (caso 04)<br>";

//--------------------Trabalhando com strings------------------------//

$string01 = "Esta String Possui 32 Caracteres";
$n = "<br>";

echo $string01[0];                              # E
echo $n;
echo $string01[24];                             # r
echo $n;

# total de caracteres
$totalCaracteres = mb_strlen($string01);           # 32   Se usar "mb_strlen" ele não conta a acentuação    

# substring apartir de uma posição inicial e final
$substring = substr($string01, 5, 6);              # string

# toda a string para maiúsculas
$stringToUpper = strtoupper($string01);            # ESTA STRING POSSUI 32 CARACTERES

# toda a string para minúsculas
$stringToLawer = strtolower($string01);            # esta string possui 32 caracteres

# substituir uma letra por outra
$stringReplace = str_replace("s", "S", $string01); # ESta String PoSSui 32 CaractereS

# verificar a posição da primeira ocorrência de um caractere
$stringPosition = strpos($string01, "a");          # 3

# remover espaço em branco (ou outro caracter) do início e do final da string
$str = 'Esta é uma string com espaço no final ';
$str2 = '.Esta é uma string qualquer.';
trim($str);                                         # Esta é uma string com espaço no final
trim($str2, '.');                                   # Esta é uma string qualquer

# remover só do lado direito ou só do esquerdo
$csv = '.Esta é uma string com espaço no final.';
ltrim($csv, '.');                                   # remove o caracter só da esquerda
rtrim($csv, '.');                                   # remove o caracter só da direita

# dividir uma string em elementos de uma array, apartir de um caracter específico
$str = "Hello world. It's a beautiful day.";
explode(" ",$str);                                  # Array([0]=>Hello [1]=>world. [2]=>It's [3]=>a [4]=>beautiful [5]=>day.)

# transformar os valores de uma array em uma string
$teste = ['a', 'b', 'c'];
implode($teste);                                    # string(3) "abc"
implode(",", $teste);                               # string(5) "a,b,c" 

# verifica se contém determinada expressão
$stringContains = str_contains($string01, "carractere");  # false
if ($stringContains)
    echo "Contém a expressão!";
else echo "Não contém isso!";

echo "<br>";

# inicia com a expressão
$stringStartsWith = str_starts_with($string01, "Esta"); # true
if ($stringStartsWith)
    echo "Começa com isso!";
else echo "Não não não!";

echo "<br>";

# termina com a expressão
$stringEndsWith = str_ends_with($string01, "Possui"); # false
if ($stringEndsWith)
    echo "Termina com isso sim!";
else echo "Não! não termina assim!";

echo "<br>";

//----------------- HEREDOC E NOWDOC -------------------

#para usá-los, basta abrir o label com 3 sinais de menor + LABEL; e fechar só com LABEL ( <<<LABEL ... LABEL )

$cliente = "João da Silva";
$email = "joaodasilva@gmail.com";

# HEREDOC permite fazer o parse das variáveis no texto
$text = <<<LABEL
Olá $cliente, nós já encontramos o seu cadastro.<br>
Nós acamos de enviar para o seu email: $email, todas as instruções para darmos continuidade
no processo de aquisição dos nossos serviços.<br> Agradecemos o seu contato!
LABEL;
echo $text;

# NOWDOC não consigo fazer o parse das variávei. Coloco o Label entre aspas simples
$text = <<<'LABEL'
Olá $cliente, nós já encontramos o seu cadastro.<br>
Nós acamos de enviar para o seu email: $email, todas as instruções para darmos continuidade
no processo de aquisição dos nossos serviços.<br> Agradecemos o seu contato!
LABEL;

//-----------------------------ESCAPE----------------------------------

echo "<p>Este é um parágrafo em html</p>"; #posso usar comandos html no php
// echo "<br>";

# para usar aspas dentro de strings por exemplo, eu uso a "\" para fazer o escape e
# poder utilizar o caractere especial sem problema.

$text01 = 'I didn\'t know this app'; # se eu não usar a barra vai dar problema
$text02 = "I don't know anything about the \"new world\" that awaits us"; # se ñ usar a \ dará problema


# tem alguns caracteres de escape que são usados apenas no terminal
echo "João da Silva\n\rTeste de escape"; #\n\r quebra de linha (no terminal)
echo "<br>";

//-----------------------

/* Apartir do php 7 foi introduzido o caracter de escape Unicode.
Você chama o ocaracter apartir de um código hexadecimal.

Tabela unicode: https://utf8-chartable.de/
*/
echo "\u{A9}";  # COPYRIGHT
echo "\u{BC}";  # ¼
echo "\u{AE}";  # REGISTERED
echo "  modo php<br>";


/* Tem tambem através de HTML entities

Tabela: https://dev.w3.org/html5/html-author/charref
*/
echo "&copy;";
echo "&frac14;";
echo "&reg;";
echo "  modo html";
echo "<br>";




// outras funções: https://www.php.net/manual/pt_BR/ref.strings.php













