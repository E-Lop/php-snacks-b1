<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        'name' => 'Alessandro',
        'lastname' => 'Rossi',
        'grades' => [6,7,4,8]
    ],
    [
        'name' => 'Diego',
        'lastname' => 'Bianchi',
        'grades' => [6,6,6,7]
    ],
    [
        'name' => 'Alvaro',
        'lastname' => 'Amaranti',
        'grades' => [8,6,7,9]
    ],
    [
        'name' => 'Alfonso',
        'lastname' => 'Lille',
        'grades' => [7,5,7,6]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Situazione studenti</h2>

    <ul>
        <?php for($i = 0; $i < count($students); $i++) { ?>
        <?php $singleStudent = $students[$i]; ?>
        <?php $averageGrade = array_sum($singleStudent[grades])/count($singleStudent[grades]) ?>
            <li>
                Studente: <?php echo $singleStudent['name']; ?> <?php echo $singleStudent['lastname']; ?><br>
                Media: <?php echo $averageGrade; ?>
            </li>
        <?php } ?>
    </ul>   
</body>
</html>