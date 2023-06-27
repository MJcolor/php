<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php
    $var1 = 15;
    $var2 = 5;
    $var3 = 8;
    $res1 = $var1 + $var2 + $var3;
    $res2 = $var1 * ($var2 - $var3);
    $res3 = ($var3 + $var2) / $var1;
    ?>

    <p><?= "$var1 + $var2 + $var3 = $res1" ?></p>
    <p><?= "$var1 * ($var2 - $var3) = $res2" ?></p>
    <p><?= "($var3 + $var2) / $var1 = $res3" ?></p>

    <?php
        if ($res1 >= 20 || $res2 >= 20 || $res3 >= 20){
            echo 'Une des opérations renvoie moins de 20';
        }
    ?>
</body>
</html>