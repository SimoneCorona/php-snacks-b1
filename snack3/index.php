<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
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
$array = [
    "01-01-2007" => [
        "Photo_Milano",
        "visiting_Genova",
    ],
    "03-02-2023" => [
        "Photo_mountain",
        "visiting_Monte_bianco",
    ],
    "01-01-2027" => [
        "Photo_river",
        "cat_vibe",
    ],
];

$arrayKeys = array_keys($array);

for ($i = 0; $i < count($array); $i++) {
    $single_key = $arrayKeys[$i];
    $single_post = $array[$single_key];

    
    echo "<h1>Post del $single_key</h1> <br>";


    for ($j = 0; $j < count($single_post); $j++) {
        $date_posts = $single_post[$j];
        echo "<h2>$date_posts</h2>";
    }
}
?>

</body>
</html>