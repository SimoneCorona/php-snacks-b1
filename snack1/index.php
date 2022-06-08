<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

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
$match_array = [
    "match_1" => [
        "home_team" => "Milano",
        "visiting_team" => "Genova",
        "score_home_team" => "80",
        "score_visiting_team" => "32",
    ],
    "match_3" => [
        "home_team" => "Roma",
        "visiting_team" => "Lecce",
        "score_home_team" => "76",
        "score_visiting_team" => "89",
    ],
    "match_3" => [
        "home_team" => "Ancona",
        "visiting_team" => "Cagliari",
        "score_home_team" => "23",
        "score_visiting_team" => "62",
    ],
]
?>



<?php
for ($i = 0; $i = count($match_array); $i++) {
    $single_match = $match_array[$i];
    echo "<h1>$single_match["home_team"] . - . $single_match["visiting_team"]. | .$single_match["score_home_team"].-. .$single_match["score_visiting_team"] </h1>";
}
?>

</body>
</html>


