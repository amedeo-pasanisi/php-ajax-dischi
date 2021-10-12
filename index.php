<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <?php
    include __DIR__ . '/database.php';
    ?>
    <main>
        <div class='container'>
            <?php
                foreach ($db as $disco) {
                    echo '<div class="disco">';
                        echo '<img src=' . $disco['poster'] . '>';
                        echo '<h3>' . $disco['title'] . '</h3>';
                        echo '<div>' . $disco['author'] . '</div>';
                        echo '<div>' . $disco['year'] . '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
<?php

?>