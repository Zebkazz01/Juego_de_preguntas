
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/part1.css">
        <script src="../js/iconos/all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/preg.js"></script>
        <script defer src="../js/index.js"></script>
        <title>juego de preguntas</title>
    </head>
    <body id="moverbody" class="bodymn">
 <section class="bodyb1 bodyb"></section>
    <header>
    <div class="menuc">
        <div class="logoh">
            <a href="../index.php">
                <img src="../img/logo_kids.png" alt="Logo juego de preguntas">   
            </a> 
        </div>
    <div class="menuh">
        <a href="../index.php" title="<-- Volver" >
            <div class="homeb">
                <i class="fa-duotone fa-circle-caret-left"></i>
            </div>
        </a>
        &nbsp;Volver
    </div>
    </div>
    <div class="bar">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    </header>
    <?php                         
        include "sesion.php";
    ?>
    <section class="contenido">
        <h1>Te presentamos juego de preguntas</h1>
            <ul>
                <li>
                    ¡Hola, amiguitos y amiguitas! Bienvenidos al emocionante mundo de juego de preguntas aqui podras interactuar con
                    nuestro juego de preguntas donde pondremos a prueba tus conocimientos y habilidades.
                </li>
                <li>
                    En este juego, cada pregunta tiene cuatro opciones, pero solo UNA de ellas es la respuesta correcta. 
                    Es como buscar un tesoro escondido entre las opciones.
                </li>
                <li>
                    Con cada pregunta que resuelvan correctamente, estarán un paso más cerca de convertirse en los campeones del juego.
                    Así que pónganse sus sombreros de pensar, abróchense los cinturones de seguridad y prepárense para embarcarse en una 
                    emocionante aventura llena de conocimientos y diversión. ¡Buena suerte, pequeños genios!
                </li>
            </ul>
            <audio id="audiof" class="oculaud" controls>
                <source type="audio/mp3" src="../sounds/music_home.mp3">
            </audio>
            <div class="sesion">
                <form action="" method="POST" enctype="multipart/form-data">
                   <b class="nolabel">Ingresa tu nombre para empezar</b> <br>
                        <input placeholder="Ingresa tu nombre" type="text" class="input_btn" id="participante" name="participante" maxlength="21" minlength="3" >
                    <button style="margin-top:8px;" type="submit" class="anima" name="ope" value="save">Comenzar
                    </button>
                </form>
            </div>
    </section>  
    <footer class="footerm">
    <div class="sectionf">
        <div class="tierra"></div>
        <div class="tierra1"></div>
        <div class="tierra2"></div>
        <div class="tierra3"></div>
        <div class="tierra4"></div>
        <div class="tierra5"></div>
        <div class="tierra6"></div>
        <p style="text-align:end;" class="empf" >
            <small><b><a target="_blank" href="https://co.linkedin.com/in/sebastian-castillop">Diseñado por @zebkazz.</a></b></small><br>
                
        </p>  
    </div>
    <div class="logof">

    </div>
    <div class="logof2">
        
    </div>
    <img class="fondo" src="../img/undraw_fun_moments_2vha.svg" alt="">
    <img class="fondo1" src="../img/fondo2.svg" alt="">
        <img class="fondo2p1 fondo2" src="../img/sol.png" alt="">
        <img class="fondo2 resp" src="../img/sol.png" alt="">
        <img class="fondo3" src="../img/montain1.png" alt="">
        <div class="footerenc">
                <img class="logofem" src="../img/logoF.png" alt="">
                <img class="logofem1" src="../img/alcaldia.png" alt="">
                    
            </div>
            <section class="fondog"></section>
            
        </footer >

    </body>
        </div>
           <script>
        var audio = document.getElementById("audiof");
        if(audio){
            setInterval(musica, 2500);
            function musica(){
                audio.play();
                audio.volume = 0.2;
            }
        }

        </script>

</html>
            