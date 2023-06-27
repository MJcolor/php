<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php
    $age = 10;

    if ($age >= 18 ){
        echo 'Vous pouvez entrer';
    }else if($age == 16 || $age == 17){
        echo 'Vous êtes presque majeur';
    }else if($age == 14 || $age == 15){
        echo 'Vous êtes jeune';
    }else if($age <= 14){
        echo 'Vous êtes trop jeune';
    }else{
        echo 'Interdit';
    }

    ?>
</body>
</html>