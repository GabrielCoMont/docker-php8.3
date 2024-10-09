<?php 

$path = $_SERVER['PHP_SELF'];

function getMessage($path){
switch($path){
    case '/index.php':
        echo "<p>Apresentação</p>";
    break;
    case '/topico01.php':
        echo "<p>Interação Humano-Computador</p>";
    break;
    case '/topico02.php':
        echo "<p>História do UX</p>";
    break;
    case '/topico03.php':
        echo "<p>Disciplinas do UX</p>";
    break;
    case '/topico04.php':
        echo "<p>Quem é Usuário?</p>";
    break;
    case '/topico05.php':
        echo "<p>Beneficios do UX</p>";
    break;
    case '/topico06.php':
        echo "<p><Desafio de Revisão</p>";
    break;
 }
}
?>