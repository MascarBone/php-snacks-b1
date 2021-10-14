<?php 
/**
 * Creare un array contenente qualche alunno di un'ipotetica classe. 
 * Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 * Stampare Nome, Cognome e la media dei voti di ogni alunno.
 * 
 * Se la media è inferiore a 5 la scriviamo in rosso, altrimenti in verde.
 */

$classe = [
    [
        'nome' => 'Suyt',
        'cognome' => 'Biuty',
        'voti' => [8,9,5,4,3,2,7,8],
    ],
    [
        'nome' => 'Dufds',
        'cognome' => 'Fortze',
        'voti' => [0,1,0,1,0,1,0,1],
    ],
    [
        'nome' => 'Noni',
        'cognome' => 'Forzi',
        'voti' => [8,88,18,9,4,2,11,8],
    ],
    [
        'nome' => 'Chdse',
        'cognome' => 'Ioppre',
        'voti' => [1,4,3,4,3,2,7,8],
    ],
    [
        'nome' => 'Studente5',
        'cognome' => 'Cognome5',
        'voti' => [4,5,6,8,11,6,3],
    ],
];


function mediaVoti($array)
{
    $num = array_sum($array);
    
    return round($num/count($array), 2);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack3</title>
</head>
<body>
    <h1>Testo</h1>
    
    <div>
        <?php foreach($classe as $alunno) { ?>
            <ul>
                <li>
                    <h2><?php echo $alunno['nome'] . " " . $alunno['cognome']; ?></h2>
                    <?php $andamento = mediaVoti($alunno['voti']); ?>
                    
                    <p
                    class="<?php echo ($andamento > 5) ? 'red' : 'green'?>">
                    <!-- Commentato il tentativo originario con un if in php all'interno della classe. -->
                    <!-- // if($voto > 5)
                    // {
                    //     echo 'red';
                    // } else
                    // {
                    //     echo 'green';
                    //     } -->
                    <!-- ?>"> -->

                    <?php echo $andamento ?></p>
                    
                </li>
            </ul>
        <?php } ?>        
    </div>
    
</body>
</html>