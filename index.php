<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
                        // echo '<img :src= "disco.poster" alt="">';
                        echo '<h3>' . $disco["title"] . '</h3>';
                        echo '<div>' . $disco["author"] . '</div>';
                        echo '<div>' . $disco["year"] . '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
<?php

?>