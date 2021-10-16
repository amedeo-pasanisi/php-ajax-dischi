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
    <link rel='stylesheet' href='css/style.css'>
    <title>Dischi</title>
</head>
<body>
    <div id="root">
        <header>
            <select @change = 'filter' v-model= "value">
                <option value="tutti">Tutti</option>
                <option v-for="genre in genres" :value="genre">{{genre}}</option>
            </select>
        </header>
        <main class='container'>
            <div v-for='disco in dischiFiltered' class='disco'>
                <img :src= 'disco.poster'>
                <h3>{{disco.title}}</h3>
                <div>{{disco.author}}</div>
                <div>{{disco.year}}</div>
            </div>
        </main>
    </div>

    <script src='js/main.js'></script>
</body>
</html>