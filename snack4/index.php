<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $array_num = [];

while(count($array_num) < 15){
    $number= rand(0,100);
    
    if(in_array($number, $array_num)) {

    } else {
        $array_num[] += $number;
    }
    
}

for ($i = 0; $i < count($array_num); $i++) {
    echo "<h3>$array_num[$i]</h3>" ;
}

?>
</body>
</html>
