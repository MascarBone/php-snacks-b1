<?php 

/**
 * Creare un array con 15 numeri casuali, 
 * tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
 */

?>

<?php 
    function random15()
    {
        $array = [];
        // $i = 0;
        while(count($array) < 15)
        {
            $num = rand(1,50);
            if(array_search($num, $array) === false)
            {
                // $array[] = $num;
                array_push($array, $num);

                // echo '<br>num ' . $num;
                // echo ' ciclo: ' . $i . '<br>';
                // echo 'array length ' . count($array);
            }
            // $i++;
        }
        return $array;
    }
;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    
<?php 

$list = random15();

var_dump($list);


?>


</body>
</html>