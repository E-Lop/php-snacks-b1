<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->

<?php

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
    <title>Teachers vs PM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left_col">
            <h2>Elenco insegnanti</h2>
            <ul>
                <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
                    <?php $thisTeacher = $db['teachers'][$i]; ?>
                    <li><?php echo $thisTeacher[name]; ?> <?php echo $thisTeacher[lastname]; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="right_col">
        <h2>Elenco PM</h2>
            <ul>
                <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
                    <?php $thisPM = $db['pm'][$i]; ?>
                    <li><?php echo $thisPM[name]; ?> <?php echo $thisPM[lastname]; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>