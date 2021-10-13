<?php
    include __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/vue'></script>
    <link rel='stylesheet' href='style.css'>
    <title>Dischi</title>
</head>
<body>
    <main id="root">
        <div class='container'>
            <div v-for='disco in dischi' class='disco'>
                <img :src= 'disco.poster'>
                <h3>{{disco.title}}</h3>
                <div>{{disco.author}}</div>
                <div>{{disco.year}}</div>
            </div>
        </div>
    </main>

    <script src='main.js'></script>
</body>
</html>
<?php

?>