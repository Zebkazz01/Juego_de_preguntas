<section class="bodyb2 bodyb"></section>
    <header>
    <div class="menuc">
        <div class="logoh">
            <a href="../index.php">
                <img src="../img/logo_kids.png" alt="Logo juego de preguntas">   
            </a> 
        </div>
            <h3>Bienvenido:<br><?php echo $nombre ?></h3>
                <?php if($nombre=="3ms3rch14"){?>
                        <a href="home.php?ini=admin" title="<-- Volver">
                            <div class="homeb">
                                <i class="fa-duotone fa-lock"></i>
                            </div>
                        </a>
                    <?php }?>
                <div class="menuh">
                    <a href="element/vsal.php?intsalju=2" title="<-- Volver">
                        <div class="homeb">
                            <i class="fa-duotone fa-circle-xmark"></i>
                        </div>
                    </a>
                </div>
                </div>
        <div class="bar">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
        <section class="contenidopju">
            <h1 style="padding-top: 10px">Ten en cuenta</h1>
                <nav class="menu" style="color:#2e2e3e; font-size:1.3rem; font-weight:600;">
                    <ul>
                        <li>
                            El juego cuenta con un temporizador 25 segundos para cada pregunta si aciertas a 
                            la respuesta correcta avanzas a la siguiente, entre mas rapido respondas mas puntos obtendras.
                        </li>
                        <li>
                            Las preguntas que encontraras seran relacionadas con la historia de empresa por este motivo te daremos
                            información necesarias para que conozcas más sobre nosotros y la encontraras en el boton<BR> 
                            <a href="home.php?ini=info1" class="titbott">&nbsp;"&nbsp;<i class="fa-duotone fa-circle-info"></i>&nbsp;Conocer mas" </a> 
                            aqui tendras el conocimiento que te ayudara a responder correctamente las preguntas, entre mas puntos tengas 
                            mas posibilidades tendras de aparecer en los primeros puestos del ranking de puntuaciones , si logras ganar 
                            encontraras mas niveles y el verdadero final del juego. !Vamos!
                        </li>
                    </ul>
                </nav>
                <div class="sesion">
                    <a href="home.php?ini=info1" class="dirbtt"  title="Informacion-->">
                        <button class="anima btnin titbot" ><i class="fa-duotone fa-circle-info"></i>&nbsp;Conocer mas</button>
                    </a>
                    <a href="home.php?ini=1"  id="juegokid" class="dirbtt" title="Iniciar Juego-->">
                        <button class="anima btnin playb" ><i class="fa-duotone fa-gamepad-modern"></i>&nbsp;Jugar</button>
                    </a>
                    <a href="home.php?ini=2"  id="juegokid" class="dirbtt" title="Puntajes-->">
                        <button class="anima btnin playn" ><i class="fa-duotone fa-square-parking"></i>&nbsp;Puntuaciónes</button>
                    </a>
                </div>
                <div class="otroju" id="otrojue">
                <h5 class="textmp">Mas niveles</h5>
                    
                    <a href="#" class="dirbtt"  id="level2" title="Siguiente ->">
                        <button class="anima btnin playbm" ><i class="fa-duotone fa-game-console-handheld"></i>&nbsp;Juego Medio</button>
                    </a>
                    <a href="#" class="dirbtt"  id="level3" title="Siguiente -->">
                        <button class="anima btnin playf"><i class="fa-duotone fa-joystick"></i>&nbsp;Juego Dificil</button>
                    </a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfh23etPO3CkxjB6QLXcfuV9Qd9UIton9g7f2EgPKktA2dDrw/viewform"  class="dirbtt" id="level1" title="Iniciar Juego">
                        <button class="anima btnin playbf" ><i class="fa-duotone fa-comment-plus"></i>&nbsp;Cometarios</button>
                    </a>
                </div>
        </section>
