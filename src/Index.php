<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Les arbres remarquables</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>
    <body>
        <form>
            <input type="checkbox" class="checkbox" value="tous" id="val1" checked/> 
            <label for="val1"> Tous </label>
            <input type="checkbox" class="checkbox" value="X Hispanica" id="val2" checked/> 
            <label for="val2">X Hispanica </label>
            <input type="checkbox" class="checkbox" value="Sylvatica" id="val3" checked/> 
            <label for="val2">Sylvatica </label>
            <input type="checkbox" class="checkbox" value="azedarach" id="val4" checked/> 
            <label for="val2">azedarach </label>
        </form>
        <div class="logo">
            <img src="img/logo.png">
        </div>
    <div class="container">
        <div class="arbres">
            <div class="arbre" id="arbre1">
                <img src="img/arbre.png">
                <div class="text" id="prems">
                    <ul class="desc">
                        <li class="name">Hêtre</li>
                        <li class="especes">Sylvatica</li>
                        <li class="lieu">XVIeme</li>
                        <li class="taille">320 cm</li>
                    </ul>
                </div>
            </div>
            <div class="arbre" id="arbre2">
                <img src="img/arbre.png">
                <div class="text" id="prems">
                    <p class="name">Chêne</p>
                    <p class="especes">X Hispanica</p>
                    <p class="lieu">16ème arrondissement</p>
                    <p class="taille">443 cm</p>
                </div>
            </div>
            <div class="arbre" id="arbre3">
                <img src="img/arbre.png">
                <div class="text" id="prems">
                    <ul class="desc">
                        <li class="name">Hêtre</li>
                        <li class="especes">Sylvatica</li>
                        <li class="lieu">7ème arrondissement</li>
                        <li class="taille">205 cm</li>
                    </ul>
                </div>
            </div>
            <div class="arbre" id="arbre4">
                <img src="img/arbre.png">
                <div class="text" id="prems">
                    <ul class="desc">
                        <li class="name">Lilas de Perse</li>
                        <li class="especes">azedarach</li>
                        <li class="lieu">8ème arrondissement</li>
                        <li class="taille">168 cm</li>
                    </ul>
                </div>
            </div>
    </div>
        <script src='js/main.js'></script>
    </body>
</html>