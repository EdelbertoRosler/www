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



