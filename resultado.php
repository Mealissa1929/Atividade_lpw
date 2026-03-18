<?php

require_once("modelo/Palpite.php");

$tipo = $_GET['tipo'];
$palpite = $_GET['palpite'];

switch ($tipo) {
    case 'E':
        $um = new Palpite('Barcelona', 'https://upload.wikimedia.org/wikipedia/pt/4/43/FCBarcelona.svg');
        $dois = new Palpite('Chelsea', 'https://upload.wikimedia.org/wikipedia/pt/c/cc/Chelsea_FC.svg');
        $tres = new Palpite('Bayern', 'https://upload.wikimedia.org/wikipedia/commons/8/8d/FC_Bayern_M%C3%BCnchen_logo_%282024%29.svg');

        if ($palpite == 'Barcelona') {
            $escolhido = $um;
        } else if ($palpite == 'Chelsea') {
            $escolhido = $dois;
        } else {
            $escolhido = $tres;
        }
        break;

    case 'B':
        $um = new Palpite('Corinthians', 'https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png');
        $dois = new Palpite('Cruzeiro', 'https://upload.wikimedia.org/wikipedia/commons/9/90/Cruzeiro_Esporte_Clube_%28logo%29.svg');
        $tres = new Palpite('Gremio', 'https://upload.wikimedia.org/wikipedia/commons/0/08/Gremio_logo.svg');

        if ($palpite == 'Corinthians') {
            $escolhido = $um;
        } else if ($palpite == 'Cruzeiro') {
            $escolhido = $dois;
        } else {
            $escolhido = $tres;
        }
        break;

    default:

        break;
}

$aleatorio = rand(1, 3);

if ($aleatorio == 1) {
    $sorteado = $um;
} else if ($aleatorio == 2) {
    $sorteado = $dois;
} else {
    $sorteado = $tres;
}


if ($sorteado == $escolhido) {
    
    echo "<h1 style='color: green;'>Parabéns, você acertou!</h1>";
    echo "<img src='" . $escolhido->getLink(). "' style='width:300px;'>";

} else {
    //errou
    echo "<h1 style='color: red;'>Que pena, você errou!</h1>";
    echo "<p style='color: orange; '>O time sorteado foi: </p>";
    echo "<img src='" . $sorteado->getLink() . "' style='width:300px; filter: blur(8px);'>";
}
