<?php    
/**
 * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite.
 * Ogni array avrà una squadra di casa e una squadra ospite,
 * punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema.
 */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    
    <?php 
       
        $listaPartite = [
            [
                "team1" => 'Squadra 1A',
                "team2" => 'Squadra 1B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 2A',
                "team2" => 'Squadra 2B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 3A',
                "team2" => 'Squadra 3B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 4A',
                "team2" => 'Squadra 4B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 5A',
                "team2" => 'Squadra 5B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 6A',
                "team2" => 'Squadra 6B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 7A',
                "team2" => 'Squadra 7B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
            [
                "team1" => 'Squadra 8A',
                "team2" => 'Squadra 8B',
                "point_team1" => rand(1,100),
                "point_team2" => rand(1,100),
            ],
        ];
    ?>


    <ul>
        <?php foreach($listaPartite as $partita) { ?>
            <li> <?php echo $partita['team1']; ?> - <?php echo $partita['point_team1']; ?> |
                 <?php echo $partita['team2']; ?> - <?php echo $partita['point_team2']; ?>
            </li>
        <?php } ?>
        
        
    </ul>
    
    


</body>
</html>