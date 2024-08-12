<?php 
    session_start();
    $nombre = $_SESSION['participante'];
    if (!isset($_SESSION['participante'])) {
        header('location: element/vsal.php?intsalju=2');
    }
?>
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
        <script defer src="../js/index.js"></script>
        <title>juego de preguntas</title>
    </head>
    <body>
<?php
    $linkmost=isset($_GET["ini"] )? $_GET["ini"]:NULL;
        if($linkmost==1){
            include "part3.php";
        }else if($linkmost==2){
            include "part4.php";
        }else if($linkmost=="info1"){
            include "part21.php";
        }else if($linkmost=="info2"){
            include "part22.php";
        }else if($linkmost=="info3"){
            include "part23.php";
        }else if($linkmost=="fin"){
            include "final.php";
        }else if($linkmost=="admin" && $nombre=="3ms3rch14"){
            include "preguntas.php";
        }else if(!$linkmost){
            include "part2.php";
            echo '<script>                
                localStorage.setItem("tex1", "0");
                localStorage.setItem("tex2", "0");
                localStorage.setItem("tex3", "0");
                localStorage.setItem("tex4", "0");
            </script>';
        }else{
            header('location: element/vsal.php?intsalju=2');
        }
?>
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
            <img class="fondo2p3 fondo2" id="most_es1" src="../img/sol.png" alt="">
            <img class="fondo2 resp" id="sinoche" src="../img/sol.png" alt="">
            <img class="fondo2p3 fondo2" id="most_es2" src="../img/moon2.svg" alt="">
            <img class="fondo2 resp" id="most_es22" src="../img/moon2.svg" alt="">
            <img class="fondo3" src="../img/montain1.png" alt="">
            <div class="footerenc">
                <img class="logofem" src="../img/logoF.png" alt="">
                <img class="logofem1" src="../img/alcaldia.png" alt="">
                    
            </div>
            <section class="fondog"></section>
        </footer >
        <img class="navees" src="../img/nave.png" alt="">
    </body>
</html>
<?php
        require_once('../model/conexion.php');
        include "cpunt.php";
            ?>
<section class="fondoaniamdo" id="fondoaniamdoc">
            <div>
                <div>
                    <nav>
                        <li>
                            <ul>
                                <span>
                                <div>
                                        <div>
                                            <div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <b></b>
                                </span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <span>
                                <div>
                                        <div>
                                            <div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <b></b>
                                </span>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <div>
                                    <div>
                                        <div>
                                            <span>
                                                <script >
                                                    function preguntaspon(){
                                                        baseDePreguntas =[          
                                                                    <?php
                                                                        $linkpreg=isset($_GET["lev"] )? $_GET["lev"]:NULL;
                                                                        if($linkpreg==222){
                                                                            $nepreg=2;
                                                                        }else if($linkpreg==333){
                                                                            $nepreg=3;
                                                                        }else{
                                                                            $nepreg=0;
                                                                        }
                                                                        if($datAllpre){
                                                                            foreach($datAllpre AS $dtp){
                                                                                if($dtp['preg_level']==$nepreg && $dtp['preg_act']==1){
                                                                        ?>    
                                                                         {pregunta:"<?php echo $dtp['preg_text'];?>",ayuda:"<?php echo $dtp['preg_ayu'];?>",va:"<?php echo $dtp['preg_resp'];?>",va1:["<?php echo $dtp['preg_dist'];?>"],},
                                                                        <?php
                                                                        }
                                                                            }
                                                                        }
                                                                    ?>
                                                                    
                                                        ];}
                                                </script>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <span>
                                    <b></b>
                                </span>
                            </ul>
                        </li>
                    </nav>
                </div>
            </div>
            </section>