<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seu jogo</title>

     <style>
        .times {
            display: flex;
            gap: 10px;
            margin: 10px 0;
        }

        .times img {
            width: 70px;
            height: auto;
        }
    </style>
</head>
<body>
    <span style='font-weight: bold;'>Times Europeus</span>

    <div class="times">
        <img src="https://upload.wikimedia.org/wikipedia/pt/4/43/FCBarcelona.svg" alt="Barcelona">
        <img src="https://upload.wikimedia.org/wikipedia/pt/c/cc/Chelsea_FC.svg" alt="Chelsea">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/8d/FC_Bayern_M%C3%BCnchen_logo_%282024%29.svg" alt="Bayern">
    </div>

    <a href="palpites.php?tipo=E">Clique aqui para jogar com times Europeus</a>

    <br><br>

    <span style='font-weight: bold;'>Times Brasileiros</span>

    <div class="times">
        <img src="https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png" alt="Corinthians">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Cruzeiro_Esporte_Clube_%28logo%29.svg" alt="Cruzeiro">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Gremio_logo.svg" alt="Gremio">
    </div>
    <a href="palpites.php?tipo=B">Clique aqui para jogar com times Brasileiros</a>

</body>
</html>