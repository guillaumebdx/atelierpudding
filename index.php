<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Le pudding à l'arsenic</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h1>Le pudding à l'arsenik</h1>

    <?php

    function generateCard(int $number,array $foods,array $poisons) : String
    {
        $result = '';
        for ($i=0; $i < $number; $i++) {
            $result .= '<div class="card">';
            $result .= $foods[rand(0, count($foods) -1)] . ' ';
            $result .= $poisons[rand(0, count($poisons) -1)];
            $result .= '</div>';
        }
        return $result;
    }
    $foods = [
        'fraise',
        'pain',
        'brocoli',
        'gratin',
        'tartiflette',
        'crevettes',
        'poulet',

    ];
    $poisons = [
        'à l\'arsenik',
        'au cyanure',
        'au piment',
        'à l\'anthrax',
        'à l\'amanite',
    ];

    ?>
    <div class="nav flex">
        <a href="?number=1&test=hello" class="button">
            Afficher 1
        </a>
        <a href="?number=5" class="button">
            Afficher 5
        </a>
        <a href="?number=8" class="button">
            Afficher 8
        </a>
    </div>
    <div class="flex container">
        <?php
            $number = 10;
            if (isset($_GET['number'])) {
                $number = $_GET['number'];
            }
            echo generateCard($number, $foods, $poisons);

        ?>
    </div>
</body>
</html>