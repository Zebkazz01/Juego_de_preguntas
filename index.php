<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/iconos/all.min.js"></script>
        <title>Juego de preguntas</title>
    </head>

    <body>
        <section class="bodyb"></section>
        <header>
            <div class="menuc">
                <div class="logoh">
                    <a href="index.php">
                        <img src="img/logo_kids.png" alt="Logo juego de preguntas">   
                    </a> 
                </div>
                <div class="menuh">
                    <div class="homeb" title=" Volver ;(">
                        <a href="https://github.com/Zebkazz">
                            <i class="fa-duotone fa-house"></i>
                        </a>
                    </div>

                    <div class="homeb homebs" title="-->> Continuemos -->>">
                        <a href="#" id="mosvideo">
                            <i class="fa-duotone fa-circle-caret-right"></i>
                        </a>
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
            <h1>¡Bienvenido!  Nos alegra que nos visites</h1>
            <p >Que gusto que quieras aprender con nosotros vamos por este recorrdio acerca de este gran juego</p>
                <div class="imgesc">
                    <div class="centinfo">
                        <img class="ocultarico opc" onclick="sel('opc')" src="img/gota.png" title="Presiona para saber mas" alt="">
                        <h3 class="tit_info" >Acueducto</h3>
                    </div>
                
                    <div class="centinfo">
                        <img class="ocultarico opc2" onclick="sel('opc2')" src="img/pipe.png" title="Presiona para saber mas" alt="">
                        <h3 class="tit_info2" >Alcantarillado</h3>
                    </div>
                    <div class="centinfo">
                        <img class="ocultarico opc3" onclick="sel('opc3')" src="img/aseo.png" title="Presiona para saber mas" alt="">
                        <h3 class="tit_info3" >Aseo</h3>
                    </div class="centinfo">
                    <div>
                        <img class="ocultarico opc4" onclick="sel('opc4')" src="img/garbage-truck.png" title="Presiona para saber mas" alt="">
                        <h3 class="tit_info4" >Recolección</h3>
                    </div class="centinfo">
                    <div>
                        <img class="ocultarico opc1" onclick="sel('opc1')" src="img/ambiente.png" title="Presiona para saber mas" alt="">
                        <h3 class="tit_info1" >Ambiente y<br> otros</h3>
                    </div>
                       
                    <p id="info" class="info" >En empresa sabemos lo importante que es el agua por eso nos encargamos de 
                        que este recurso llegue a tu casita.
                    </p>
                    <p id="info1" class="info1" >El cuidado del ambiente es nuestra principal virtud por eso nos 
                        encargamos de los residuos para mantener todo muy limpio y de hacer otros sevicios especiales.
                    </p>
                    <p id="info2" class="info2" >Nos encargamos en manejo de aguas y el funcionamiento de 
                        la redes de acueducto para facilitar la limpieza y el servicio de agua.
                    </p>
                    <p id="info3" class="info3" >Nada mejor que todo este en orden por esto nos encargamos de la limpieza
                        de nuestra ciudad para que este mas bella.
                    </p>
                    <p id="info4" class="info4" >El tratamiento de residuos es importante para mantener la salud de nuestra
                        comunidad por eso recogemos la basura.
                    </p>
                </div>
            </p>
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
            <div class="logof"></div>
            <div class="logof2"></div>
            <img class="fondo" src="img/undraw_fun_moments_2vha.svg" alt="">
            <img class="fondo1" src="img/fondo2.svg" alt="">
            <img class="fondo2 resp" id="sol_des" src="img/sol.png" alt="">
            <img class="fondo32" src="img/montain1.png" alt="">
        <div class="footerenc">
                <img class="logofem" src="img/logoF.png" alt="">
                <img class="logofem1" src="img/alcaldia.png" alt="">
            </div>
            <section class="fondog">
            </section>
        </footer >
        <div class="continic">
            <div class="inic">
                <a href="https://github.com/Zebkazz" title="Volver">
                    <div class="homep homeb" id="homep">
                        <i class="fa-duotone fa-circle-caret-left"></i>
                    </div>
                </a>
                <img class="fondofamily" src="img/fondofamily.svg" alt="">
                <img class="fondoninos" src="img/fondoninos.svg" alt="">
                <img class="fondotruck" src="img/truck.png" alt="">
                <div class="prin">
                    <div class="logoprin">
                        <img src="img/logo_kids.png" alt="">
                    </div>
                    <h1>
                        !Ven vamos a aprender juntos con este juego!
                    </h1>
                        <h3>Te damos la bienvenida a este juego aqui
                        podras aprender mas de nosotros.
                        </h3>
                    <button class="anima" id="anima" title="Empezar">!Vamos!</button>
                    
                </div>
            </div>
        </div>
        <div class="encabezadof" id="encabezadof" >
            <p><br>2023</p>
            <p style="text-align:end;">
                <br><b> <a target="_blank" href="https://co.linkedin.com/in/sebastian-castillop"> &copy; Diseñado por @zebkazz.</a></b>
            </p>
        </div>
    </body>
    <script src="js/script1.js"></script>
    <script>
        var audio = document.getElementById("audiof");
        if(audio){
            setInterval(musica, 2500);
            function musica(){
                audio.play();
                audio.volume = 0.2;
            }
        }
        document.getElementById("mosvideo").addEventListener("click", mostcont); 
                function mostcont(){
                    Swal.fire({
                        title:'!Ven, Conoce juego de preguntas!',
                        html:
                            '<video src="videos/v999.mp4" id="videomues" controls autoplay ></video>',
                        focusClose: false,
                        showCloseButton: false,
                        showCancelButton: false,
                        showConfirmButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Continuemos al juego'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href='asset/part1.php';
                            }else{

                            }
                        })
                }
        </script>
         <style>
        
        video{
            height:61vh;
            width:52vw;
            border: 20px solid #7066e0;
            border-radius: 30px;
        }
        .swal2-popup{
            justify-content: center!important;
            overflow:none;
            min-width: 68vw!important;
            background-color: palegreen;
        }
        .swal2-styled.swal2-confirm {
            display:flex!important;
            align-items:center;
            justify-content: center!important;
            width: 300px;
            height: 60px;
            border-radius: 20px;
            font-weight: 800;
            font-size: 1.2rem;
            background-color: #062b7a;
            border: 3px solid #ffffff00;
            color: #fff;
            transition: all 400ms cubic-bezier(0.075, 0.82, 0.165, 1);
        }
        .swal2-styled.swal2-confirm:hover{
            font-size: 1.4rem;
            background-color: #ffffff;
            border: 3px solid #0639e2;
            color: #0639e2;
            transition: all 400ms cubic-bezier(0.075, 0.82, 0.165, 1);
        }
        @media (min-width: 200px) and (max-width: 768px) {
            video{
                width:100%;
                height:auto;
                border: 0px solid #7066e0!important;
                border-radius: 10px;
            }
                .swal2-popup{
                width: 100vw!important;
                background-color: palegreen;
                margin:0px;
            }
        }
        @media (min-width: 1367px) {
            video{
                width:80%;
                height:auto;
                border: 30px solid #7066e0!important;
                background-color: palegreen;
                border-radius: 30px;
            }
                .swal2-popup{
                width: 90vw!important;
                margin:0px;
            }
        }
    </style>
   
</html>