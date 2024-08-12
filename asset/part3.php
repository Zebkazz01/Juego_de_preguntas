<?php
        require_once('../model/conexion.php');
        // include "cpunt.php";
            ?>
<section class="bodyb3 bodyb" id="bodyb"></section>
    <header>
    <div class="menuc">
        <div class="logoh">
            <a href="../index.php">
                <img src="../img/logo_kids.png" alt="Logo juego de preguntas">   
            </a>    
        </div>
                <div class="timer_js">
                    <div id="some_div">
                    </div>
                        <p id="text_sec" >Segundos<br>restantes</p>
                </div>
                <div class="menuh" id="oculfin">
                    <a title="Volver :(" onclick="salirp()">
                        <div class="homeb">
                            <i class="fa-duotone fa-circle-xmark"></i>
                        </div>
                    </a>
                     <audio id="audio" class="oculaud" controls>
                            <source type="audio/mp3" src="../sounds/mala_respuesta.mp3">
                        </audio>
                        <audio id="correctasound" class="oculaud" controls>
                            <source type="audio/mp3" src="../sounds/correcta.mp3">
                        </audio>
                        <audio id="incorrectasound" class="oculaud" controls>
                            <source type="audio/mp3" src="../sounds/incorrecta.mp3">
                        </audio>
                        <audio id="audio2" class="oculaud" autoplay controls>
                            <source type="audio/mp3" src="../sounds/Fondo preguntas.mp3">
                        </audio>
                </div>
            </div>
            </div>
            <div class="bar">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </header>
        <section class="contenido">
              <div id="form_ini" class="conte_pregunp">
                <div id="terpre"></div>
                <div class="pregunt_cabe">
                    <div class="info_partip">
                        <h2 id="solopre">PREGUNTA <strong id="numerop">1</strong></h2>
                        <div class="ayudasbtn">
                            <button id="ayuda" class="option bt">Ayuda</button>
                            <button id="cambiar" class="option bt">cambiar</button>
                            <button id="camb50" class="option bt">50/50</button>
                        </div>
                        <h3>Participante: <?php echo $nombre ?></h3>
                    </div>
                    <p id="text_pregun"></p>
                </div>
                    <div class="pregunt_conte">
                        <div class="option_cont">
                            <div class="option" id="options1" onclick="seleccionarOpción(0);" >
                                <h4 class="textpresel">A</h4> 
                                <p id="resoptiona"></p>
                            </div>
                        </div>
                        <div class="option_cont">
                            <div class="option" id="options2" onclick="seleccionarOpción(1);">
                          <h4 class="textpresel">B</h4> 
                                <p id="resoptionb" ></p>
                            </div>
                        </div>
                        <div class="option_cont">
                            <div class="option" id="options3" onclick="seleccionarOpción(2);">
                                <h4 class="textpresel">C</h4> 
                                <p id="resoptionc"></p>
                            </div>
                        </div>
                        <div class="option_cont">
                            <div class="option" id="options4" onclick="seleccionarOpción(3);">
                                <h4 class="textpresel">D</h4> 
                                <p id="resoptiond"></p>
                            </div>
                        </div>
                    </div>
              </div>
              <form action="#" id="formulu" method="POST" Style="display:none;">
                    <input type="hidden" id="punt_id" name="punt_id">
                    <input type="hidden" id="ope" name="ope">
                    <input type="hidden" id="punt_nom" name="punt_nom" value="<?php echo $nombre ?>">              
                    <input type="hidden" id="punt_tot" name="punt_tot" >
                    <input type="hidden" id="punt_lev" name="punt_lev" >
                    <input type="hidden" id="punt_ayu" name="punt_ayu" >
                </form>
              <div class="finalcon" id="finalcj">
                
                    <img class="trofe" src="../img/finalt.png" alt="">
                    <div class="infofi">
                        <h1>!Felicidades <?php echo $nombre ?> has completado el nivel <span id="textlevel"></span>¡</h1>
                        <h3>Tu puntaje fue de: <b id="textfinp"></b><br>
                            Repondiste correctamente: <b id="textfinpr"></b> preguntas <br>
                            Ayudas totales usadas: <b id="textfinpy"></b><br>
                            Preguntas incorrectas: <b id="textfinpin"></b>
                        </h3>
                        <a href="home.php" class="dirbtt"  title="Siguiente -->">
                            <button class="anima btnin playb"><i class="fa-duotone fa-trophy"></i>&nbsp;Continuar</button>
                        </a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfh23etPO3CkxjB6QLXcfuV9Qd9UIton9g7f2EgPKktA2dDrw/viewform"  class="dirbtt" id="level1" title="Iniciar Juego">
                            <button class="anima btnin playbf" ><i class="fa-duotone fa-comment-plus"></i>&nbsp;Cometarios</button>
                        </a>
                        
                    </div>
             </div>
        <style>
            .finalcon{
                display:flex;
            }
            .infofi{
                display:flex;
                justify-contents: center;
                flex-direction:column;
                align-items:center;
                color:#383838;
            }
            .fondoaniamdo{
                display:none;
            }
            #fondoaniamdoc{
                display:none;
            }

        </style>

</section>