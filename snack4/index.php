<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

$explodedParagraph = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esplosione del paragrafo</title>
</head>
<body>
    <h2>Lorem originale</h2>

    <?php echo $paragraph; ?>
    <h2>Lorem esploso</h2>

    <?php for($i = 0; $i < count($explodedParagraph); $i++) { ?>
            
            <?php $singleLine = $explodedParagraph[$i];?>
            <!-- aggiunto il punto al termine di ogni frase che la funzione explode rimuoveva -->
          <p><?php echo $singleLine . '.' ?></p>  
        
        <?php } ?>
</body>
</html>