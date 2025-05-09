<h1>Minha Primeira Página PHP</h1>
<?php
echo "Olá, Mundo!"; //Exibir uma mensagem na tela
echo "<br>"; //Quebra de linha
echo "Meu nome é Renan";
echo "<br>";
echo "<p>Estou aprendendo PHP!</p>";
echo "<p>Estou gostando de PHP!</p>";

//Comentário de uma linha
# Coemntário de uma linha
/*
 Comentário de múltiplas linhas
 Aqui você pode escrever várias linhas de comentários
 sem se preocupar com o limite de uma linha.
*/

// Variáveis
// Usamos o símbolo $ para declarar uma variável
$nome = "Renan"; // String
$idade = 17; // Inteiro
$peso = 69.9; // Float
$altura = 1.72; // Float
$casado = False; // Booleano (True ou False)
?>
<h1>Dados Pessoais</h1>
<?php
// Exibindo variáveis
echo "Meu nome é $nome<br>";
echo "Eu tenho $idade anos";
echo "Meu peso é $peso kg<br>";
echo "Eu tenho $altura M de altura<br>"
?>

<h1>Sobre Mim</h1>
<?php
echo "<p>Gosto de PHP!!!</p>";

?>