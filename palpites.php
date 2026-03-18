<?php

    $tipo = $_GET['tipo'];

    switch ($tipo) {
        case 'E':
            echo '<img  src="https://upload.wikimedia.org/wikipedia/pt/4/43/FCBarcelona.svg" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=E&palpite=Barcelona">Clique aqui para palpitar o Barcelona</a>';
            echo '<br><br>';
            echo '<img src="https://upload.wikimedia.org/wikipedia/pt/c/cc/Chelsea_FC.svg" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=E&palpite=Chelsea">Clique aqui para palpitar o Chelsea</a>';
            echo '<br><br>';
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/8/8d/FC_Bayern_M%C3%BCnchen_logo_%282024%29.svg" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=E&palpite=Bayern">Clique aqui para palpitar o Bayern</a>';
            break;

        case 'B':
            echo '<img  src="https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=B&palpite=Corinthians">Clique aqui para palpitar o Corinthians</a>';
            echo '<br><br>';
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Cruzeiro_Esporte_Clube_%28logo%29.svg" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=B&palpite=Cruzeiro">Clique aqui para palpitar o Cruzeiro</a>';
            echo '<br><br>';
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Gremio_logo.svg" width="80">';
            echo '<br>';
            echo '<a href="resultado.php?tipo=B&palpite=Gremio">Clique aqui para palpitar o Gremio</a>';
            break;
        
        default:
            echo "Tipo inexistente";
            break;
    }
