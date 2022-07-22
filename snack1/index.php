<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema. 
Olimpia Milano - Cantù | 55-60
-->

<?php
    $todayBasketMatches = [
        ['homeTeam' => 'Shohoku',
        'guestTeam' => 'Toyotama',
        'homeTeamScore' => 78,
        'guestTeamScore' => 65],
        ['homeTeam' => 'Sannoh',
        'guestTeam' => 'Kainan',
        'homeTeamScore' => 81,
        'guestTeamScore' => 104],
        ['homeTeam' => 'Ryonan',
        'guestTeam' => 'Shoyo',
        'homeTeamScore' => 92,
        'guestTeamScore' => 98],
    ];
    var_dump($todayBasketMatches);
    var_dump($todayBasketMatches[1]['homeTeam']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le partite di oggi</title>
</head>
<body>
    <h2>Le partite di oggi</h2>

    <ul>
        <?php for($i = 0; $i < count($todayBasketMatches); $i++) {?>
            <?php $thisMatch = $todayBasketMatches[$i]; ?>
            
            <li>
                <h3><?php echo $thisMatch[homeTeam]; ?> - <?php echo $thisMatch[guestTeam]; ?> | <?php echo $thisMatch[homeTeamScore]; ?>-<?php echo $thisMatch[guestTeamScore]; ?> </h3>
                
            </li>
            
            <?php } ?>

    </ul>
</body>
</html>