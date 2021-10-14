<?php 

/**
 * Utilizzare questo array: https://pastebin.com/CkX3680A
 * Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack5</title>
</head>
<body>
    <h1>Testo</h1>

    <div class="grigio"> 
    <?php foreach($db['teachers'] as $worker)
        { ?>
            <h2><?php echo $worker['name']; ?></h2>
            <h3><?php echo $worker['lastname']; ?></h3>
        <?php } ?>
    </div>

    <div class="verde">
    <?php foreach($db['pm'] as $worker)
        { ?>
            <h2><?php echo $worker['name']; ?></h2>
            <h3><?php echo $worker['lastname']; ?></h3>
        <?php } ?>
    </div>
      
    
</body>
</html>