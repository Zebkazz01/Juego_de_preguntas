//------------------------------------------------Codigo Javascript del archivo "index.js"----------------------------------------------


//------------------------------------Evitar el doble envio de datos----------------------------------------------
    if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
        

// ------------------------------------Variables inicializadoras----------------------------------------------
    var Basepreguntacargada;                                            // Sortear las preguntas cada vez al inicar
    var puntajepreg=0;                                                  // Variable del sumador de puntaje
    var puntajei;                                                       // Variable del sumador de puntaje para mostrar
    var cambico = document.getElementById("bodyb");                     // Id del body para cambiar el color del fondo
    var segurop = localStorage.getItem("seguro");                // Tomar el valor seguro para guardar en el pregunta 15
    var moonm=0;                                                        // Mostrar luna despues de pasar seguro 
    var pregunta=1;                                                     // Variable Numero de pregunta 
    var puntpp;                                                         // Valor de puntaje por pregunta
    var valp = 1;                                                       // Validar si esat correcta o no
    var pista;                                                          // Numero de ayudas
    var cam5050;                                                        // Numero de 50 50
    var contpista=0;                                                    // Contador de ayudas usadas
    var containco=0;                                                    // Numero de preguntas incorrectas
    var cambiar = 1;                                                    // Cambiar pregunta
    var segundint = 1;                                                  // Segundo intento 
    var sellevel = 0;                                                   // Selecion de nivel 
    var baseDePreguntas;                                                // Variable donde se guarda el arreglo
    var basenivelp=0;                                                   // Nivel de dificultad
    var timetp;                                                         // Seguarda el valor del temporizador
    var npreguntasf;                                                    // numero de preguntas para finalizar el nivel                                            
    var arrnum;                                                         // Numero de preguntas por nivel
    var cambiopregse;

//----Cambiarcolordelfondopreguntas----------------------------------                                                             
    var colf = document.getElementById('form_ini');

// --------------------Guardar si el seguro se activa----------------------------------------------
     if(segurop==1){
        var moonm=1;
            pregunta = 3; 
                if(cambico){
                    cambico.classList.add("bodyb10");   
                    document.getElementById("most_es2").style.display="flex";
                    document.getElementById("most_es22").style.display="flex";
                    document.getElementById("most_es1").style.display="none";
                    document.getElementById("sinoche").style.display="none";
                }   
             localStorage.setItem("seguro", 0);                  
    }else{
        pregunta = 1; 
    }   

//--------Cargar nivel kids por defecto-------------------                                                             
    var juegokid = document.getElementById("juegokid");
        if(juegokid){                                                                        
            localStorage.setItem("Nlevel", "0");  
        }

//----------Cargar bloque antiseleccion--------------------------                                                         
    var evitmu = document.getElementById("terpre");
        if(evitmu){
            document.getElementById("terpre").style.display="none"; 
        }

//-------------------------------------Mostrar y ocultar elementos index----------------------------------------------
    var moslun = document.getElementById("most_es2");                   // Id del bdoy para mostrar luna
    var mosfin = document.getElementById("finalcj");                    // Id del bdoy para mostrar final
        if(moslun && moonm==0){
            document.getElementById("most_es2").style.display="none";   // Ocultar Luna de la vista principal
            document.getElementById("most_es22").style.display="none";   // Ocultar Luna de la vista principal
        }
        if(mosfin){
            document.getElementById("finalcj").style.display="none";    // Ocultar Finald el juego
        }

//------------------------------------------Opciones demas niveles---------------------------------------------------
    var userm = localStorage.getItem("Nmenu");                          // variable para mostrar el segundo menu de juego
    userm=1;
    var sellevel = localStorage.getItem("Nlevel");                      // variable seleccionar nivel
    var valmp = document.getElementById("otrojue");                     // Id del div para mostrar menu de otros niveles
        if(userm==1 && valmp){
            document.getElementById("otrojue").style.display="flex";     // Mostrar menu de juego
            // document.getElementById("level1").addEventListener("click", level1p);  
            document.getElementById("level2").addEventListener("click", level2p);  
            document.getElementById("level3").addEventListener("click", level3p);
        }
        
//--------------------------------------------function aleatorio---------------------------------------------------------
    function numale(arrnum){
        var indice=Math.floor(Math.random()*arrnum.length);
        var numer =arrnum[indice];
            arrnum.splice(indice,1);
                if(pregunta>=15){
                    localStorage.setItem("Aleatorio", JSON.stringify(arrnum));  
                }else{
                    localStorage.removeItem("Aleatorio");
                }
            return numer;
    }

//-----------------------------------------Nivel facil info---------------------------------------------------------
    // function level1p(){
    //     Swal.fire({
    //         title: 'Nivel facil',
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         cancelButtonText: 'Cancelar',
    //         confirmButtonText: 'Iniciar partida'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             window.location.href='home.php?ini=1';
    //         }else{
    //             window.location.href='home.php';
    //         }
    //         localStorage.setItem("Nlevel", "1");
    //         localStorage.setItem("Jter", "0");                                  
    //     })    
    // }
    
//-------------------------------------------Nivel intermedio info-------------------------------------------------
    function level2p(){
        Swal.fire({
            title: 'Nivel Intermedio',
            text: "En este nivel encontraras 20 preguntas cuentas con menos ayudas y los temas relacionados con la naturaleza y los entes encargados de supervisar y cuidar el medio ambiente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Iniciar partida'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href='home.php?ini=1&lev=222';
            }else{
                window.location.href='home.php';
            }
        })
        localStorage.setItem("Nlevel", "2");
        localStorage.setItem("Jter", "0");  
    }

//---------------------------------------------Nivel dificil info--------------------------------------------------
    function level3p(){
        Swal.fire({
            title: 'Nivel Dificil',
            text: "En este nivel las preguntas tienen mayor grado de dificultad por eso solo contaras con 2 ayudas ademas de responder 25 preguntas te crees capas de logarlo, posdata si lo logras tu recompensa sera encontrar el final del juego?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Iniciar partida'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href='home.php?ini=1&lev=333';
            }else{
                window.location.href='home.php';
            }
        })
        localStorage.setItem("Nlevel", "3");
        localStorage.setItem("Jter", "0");  
    }

//-----------------------------------------------Base de preguntas--------------------------------------------------
        function encrypt_data(string) {
            string = unescape(encodeURIComponent(string));
            var newString = '',
            char, nextChar, combinedCharCode;
            for (var i = 0; i < string.length; i += 2) {
            char = string.charCodeAt(i);
                if ((i + 1) < string.length) {
                        nextChar = string.charCodeAt(i + 1) - 31;
                        combinedCharCode = char + "" + nextChar.toLocaleString('en', {
                        minimumIntegerDigits: 2
                    });
                    newString += String.fromCharCode(parseInt(combinedCharCode, 10));
                } else {
                    newString += string.charAt(i);
                }
            }
            return newString.split("").reduce((hex,c)=>hex+=c.charCodeAt(0).toString(16).padStart(4,"0"),"");
        }

//-----------------------------------------------Base de preguntas--------------------------------------------------
preguntbase()
function preguntbase(){
    //----------------------------------------------------Cargar menu--------------------------------------------
    if(sellevel==0){
        pista = 3;   
        cam5050 = 1;       
        cambiar = 1;
        timetp=29;                                                    
        basenivelp = 0;
        npreguntasf=10; 
            // arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
            arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
        }
            //   else if(sellevel==1){
            //     pista = 3;  
            //     cam5050 = 1;        
            //     cambiar = 1;
            //     timetp=19;                                                    
            //     basenivelp=1;   
            //     npreguntasf=15; 
            //     arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
            //   }
        else if(sellevel==2){
        pista = 2;        
        cambiar = 0;
        cam5050 = 1;  
        timetp=24;                                                    
        basenivelp=2; 
        npreguntasf=20; 
        if(pregunta>=15){
            arrnum = localStorage.getItem("Aleatorio")
            arrnum = JSON.parse(arrnum);
        }else{  
            arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34];
        }
        }else if(sellevel==3){
        pista = 1;      
        cam5050 = 1;    
        cambiar = 0;
        timetp=24;                                                    
        basenivelp=3;  
        npreguntasf=25; 
        if(pregunta>=15){
            arrnum = localStorage.getItem("Aleatorio")
            arrnum = JSON.parse(arrnum);
        }else{  
            arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,
                26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,
                51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,
                76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100
            ];
        }
    }
    preguntaspon();
};

// -----------------------------------------------Input de nombre --------------------------------------------------
    var Datos_part = document.getElementById("participante");
        if(Datos_part){
            document.getElementById("participante").addEventListener("focus", accion);
            document.getElementById("participante").addEventListener("input", accion1);
            document.getElementById("participante").addEventListener("focusout", accion1);
                function accion(){
                    document.querySelector(".nolabel").style.transition ="all 500ms";
                }
                function accion1(){
                    document.querySelector(".nolabel").style.transition ="all 500ms";
                    document.querySelector(".input_btn").style.background ="#fff";
                }

//--------------------------------------Validar Limitar input javascript------------------------------------------
                document.getElementById("participante").addEventListener("input", onInput);
                    var titleValue = document.getElementById("participante").value;
                    var inputValue = '';
                        function onInput(e) {
                            if(e.currentTarget.value.length == 19) {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡Cuidado!',
                                    text: 'No escribas mas de 19 caracteres',
                                });
                            }
                            if(e.currentTarget.value.length > 20) {
                                e.currentTarget.value = titleValue;
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡Te lo adverti!',
                                    text: 'Por favor, Vuleve a escribir',
                                });
                            }
                            inputValue = e.currentTarget.value;
                            return;
                        }
        }

// -------------------------------------Ejecutar si se quiere salie del juego---------------------------------------
    function salirp(){
        Swal.fire({
            title: 'Estas seguro?:(',
            text: "Quieres salir a la pantalla principal ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Seguir jugando',
            confirmButtonText: 'Terminar partida'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href='home.php';
            }else{

            }
        })
    }

//---------------------------------------------Temporizador preguntas-----------------------------------------------
    var Temporizadorp = document.getElementById('some_div');
        if(Temporizadorp){
            cargarPregunta(numale(arrnum));
            var timer;
            const timerElement = document.getElementById("some_div");
                function startTimer() {
                    clearInterval(timer);
                    timer = setInterval(function() {
                        if(timeLeft >= 0){
                            timerElement.textContent = timeLeft;
                        }
                        timeLeft--;
//------------------------------------------Temporizador se acabo el tiempo---------------------------------------------
                        if (timeLeft == -1) {
                            valp=0;
                                colf.classList.remove("conte_pregunp5");
                                colf.classList.add("conte_pregunp6");
                            document.getElementById("terpre").style.display="flex"; 
                            clearInterval(timer);
                                var incorrectasound = document.getElementById("incorrectasound");
                                setTimeout(incorrectso, 2000);
                                if(incorrectasound){
                                    incorrectasound.play();
                                }
                                function incorrectso(){
                                    Swal.fire({
                                        title: 'Perdiste :(',
                                        text: `Se te agoto el tiempo y no seleccioanste ninguna repuesta puedes volver a jugar o quieres Salir ?Tu puntaje fue de: ${puntajepreg}`,
                                        icon: 'error',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        cancelButtonText: 'Pagina Principal',
                                        confirmButtonText: 'Volver a jugar'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href='home.php';
                                        }else{
                                            window.location.href='home.php';
                                        }
                                    });
                                    document.getElementById("terpre").style.display="none"; 
                                }
//----------------------------------------Cambiar color y tamaño del contador-------------------------------------------
                        }else if(timeLeft<=2){
                            puntpp = 15000;
                                colf.classList.remove("conte_pregunp4");
                                colf.classList.add("conte_pregunp5");
                            document.getElementById('some_div').style.fontSize = "3.5rem";
                        }else if(timeLeft<=4){
                            puntpp = 35000;
                                colf.classList.remove("conte_pregunp3");
                                colf.classList.add("conte_pregunp4");
                            document.getElementById('some_div').style.fontSize = "3.2rem";
                        }else if(timeLeft<=7){
                            puntpp = 50000;
                                colf.classList.remove("conte_pregunp2");
                                colf.classList.add("conte_pregunp3");
                            document.getElementById('some_div').style.color = "#FF0000";
                            document.getElementById('some_div').style.fontSize = "2.8rem";
                            document.getElementById('some_div').style.fontWeight = "900";
                        }else if(timeLeft<=10){
                            puntpp = 75000;
                                colf.classList.remove("conte_pregunp1");
                                colf.classList.add("conte_pregunp2");
                            document.getElementById('some_div').style.color = "#008000";
                            document.getElementById('some_div').style.fontSize = "2.3rem";
                            document.getElementById('some_div').style.fontWeight = "800";
                        }else if(timeLeft<=15){
                            puntpp = 85000;
                                colf.classList.remove("conte_pregunp");
                                colf.classList.add("conte_pregunp1");
                            document.getElementById('some_div').style.color = "#0acc2b";
                            document.getElementById('some_div').style.fontSize = "2rem";
                        }else if(timeLeft<=25){
                            puntpp = 100000;
                                colf.classList.remove("conte_pregunp1");
                                colf.classList.remove("conte_pregunp2");
                                colf.classList.remove("conte_pregunp3");
                                colf.classList.remove("conte_pregunp4");
                                colf.classList.remove("conte_pregunp5");
                            colf.classList.add("conte_pregunp");
                            document.getElementById('some_div').style.color = "#0acc2b";
                            document.getElementById('some_div').style.fontSize = "2rem";
                        }else if(timeLeft<=29){
                            puntpp = 100000;
                                colf.classList.remove("conte_pregunp1");
                                colf.classList.remove("conte_pregunp2");
                                colf.classList.remove("conte_pregunp3");
                                colf.classList.remove("conte_pregunp4");
                                colf.classList.remove("conte_pregunp5");
                            colf.classList.add("conte_pregunp");
                            document.getElementById('some_div').style.color = "#0acc2b";
                            document.getElementById('some_div').style.fontSize = "2rem";
                        }
                        
                    }, 
            1000);
        }

//----------------------------------------------Parar temporizador-----------------------------------------------------
    function resetTimer(timetpv) {
        if(!timetpv){
                timeLeft = timetp;
                clearInterval(timer);
            }else{
                timeLeft=timeLeft+5;
                clearInterval(timer);
            }
        }
    var timeLeft = timetp;  

//-----------------------------------------Iniciar temporizador---------------------------------------------------  
    startTimer();             
    }

// ----------------------------------------Validar cargar preguntas ------------------------------------------------
    function cargarPregunta(index) {
            document.getElementById("options3").style.display = "flex";
            document.getElementById("options4").style.display = "flex";
        objetoPregunta = baseDePreguntas[index];
        opciones = [...objetoPregunta.va1];
        opciones.push(objetoPregunta.va);
            for (let i = 0; i < 4; i++) {
                opciones.sort(() => Math.random() - 0.5);
            }
        document.getElementById("text_pregun").innerHTML = objetoPregunta.pregunta;
        document.getElementById("numerop").innerHTML = pregunta;

// ---------------------------------------Mostrar boton de ayudas -------------------------------------------------
        if(pista>0){
            document.getElementById("ayuda").style.display = "flex";
            }else{
            document.getElementById("ayuda").style.display = "none";
        }
        if(cambiar==1){
            document.getElementById("cambiar").style.display = "flex";
            }else{
            document.getElementById("cambiar").style.display = "none";
        }
        if(cam5050==1){
            document.getElementById("camb50").style.display = "flex";
            }else{
            document.getElementById("camb50").style.display = "none";
        }
        document.getElementById("resoptiona").innerHTML = opciones[0];
        document.getElementById("resoptionb").innerHTML = opciones[1];
        document.getElementById("resoptionc").innerHTML = opciones[2];
        document.getElementById("resoptiond").innerHTML = opciones[3];
    }

// ----------------------------------Validar ayudas restantes y funcion ----------------------------------------------
    if(document.getElementById("ayuda")){
    
        document.getElementById("ayuda").addEventListener("click", pistaayu);
        function pistaayu(){
            ayuda();
            document.getElementById("ayuda").style.display="none";
            pista--;
        }
    }
    if(document.getElementById("cambiar")){
        document.getElementById("cambiar").addEventListener("click", pistacam);
        function pistacam(){
            cambio();
            document.getElementById("cambiar").style.display="none";
            cambiar=0;
        }
    }
    if(document.getElementById("camb50")){
        document.getElementById("camb50").addEventListener("click", pistacam50);
        function pistacam50(){
            ayu5050();
            document.getElementById("camb50").style.display="none";
            cam5050=0;
        }
    }

// -------------------------------------------Validar respuestas-------------------------------------------------------
    async function seleccionarOpción(index) {
    var validezRespuesta = opciones[index] == objetoPregunta.va;
        if (validezRespuesta && valp==1) {// ---------Ejecutar si la pregunta es correcta------------------------
// ------------------------------------Animacion y color ddel boton correcto--------------------------------------------
            document.getElementById("terpre").style.display="flex"; 
                for (n = 1; n < 5; n++) {
                    document.getElementById("options"+[n]);
                }
                if(index==0){
                    options1.classList.add("option_correct");
                }else if(index==1){
                    options2.classList.add("option_correct");
                }else if(index==2){
                    options3.classList.add("option_correct");
                }else if(index==3){
                    options4.classList.add("option_correct");
                }
// ----------------------------------------------------------Sondio de respuesta correcta-----------------------------------------------
                if(correctasound){
                    correctasound.play();
                }
                resetTimer();
                    setTimeout(correct_but3,2200);
// ---------------------------------------------------------Funcion siguiente pregunta--------------------------------------------------
                    async function correct_but3(){
                            options1.classList.remove("option_correct");
                            options2.classList.remove("option_correct");
                            options3.classList.remove("option_correct");
                            options4.classList.remove("option_correct");
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Perfecto',
                                    showConfirmButton: true,
                                    text: 'Muy bien respuesta correcta, vamos con la siguiente',
                                    confirmButtonText: 'Siguiente pregunta',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        startTimer();
                                    }else{
                                        startTimer();
                                    }
                                });
                                Basepreguntacargada =numale(arrnum);
                                puntajepreg=puntajepreg+puntpp/100;
                                pregunta++;
                                valp=1;
                            document.getElementById("terpre").style.display="none"; 
                        cargarPregunta(Basepreguntacargada,1);
                    }

// ---------------------------------------Funcion pregunta incorrecta----------------------------------------------------
        } else if(!validezRespuesta && segundint!=1) {
            document.getElementById("terpre").style.display="flex"; 
                for (n = 1; n < 5; n++) {
                    document.getElementById("options"+[n]);
                }
                if(index==0){
                    options1.classList.remove("option_suspen");
                    options1.classList.add("option_incorrect");
                }else if(index==1){
                    options2.classList.remove("option_suspen");
                    options2.classList.add("option_incorrect");
                }else if(index==2){
                    options3.classList.remove("option_suspen");
                    options3.classList.add("option_incorrect");
                }else if(index==3){
                    options4.classList.remove("option_suspen");
                    options4.classList.add("option_incorrect");
                }
                if(incorrectasound){
                    incorrectasound.play();
                }
                resetTimer();
                puntajei=puntajepreg;
                setTimeout(correct_but,2500);
                    function correct_but(){
                        Swal.fire({
                            title: '!Ups¡',
                            imageUrl:'../img/trofe_per.png',
                            imageWidth: '15vw',
                            imageHeight: '15vw',
                            text: `Parece que esa no es la repuesta correcta, no importa puedes volver a intentarlo :) Tu puntaje fue de: ${puntajei}`,
                            confirmButtonText: 'Menu principal',
                            cancelButtonText: 'Salir',
                            showCancelButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href='home.php';
                            }else{
                                window.location.href='element/vsal.php?intsalju=1';
                            }
                        });
                        document.getElementById("terpre").style.display="none"; 
                    }
                    puntajepreg=0;
                    valp=0;

// ---------------------------------------------Segundo intento----------------------------------------------------------
        }else if(segundint==1) {
            document.getElementById("terpre").style.display="flex"; 
            for (n = 1; n < 5; n++) {
                document.getElementById("options"+[n]);
            }
            if(index==0){
                options1.classList.remove("option_suspen");
                options1.classList.add("option_incorrect");
            }else if(index==1){
                options2.classList.remove("option_suspen");
                options2.classList.add("option_incorrect");
            }else if(index==2){
                options3.classList.remove("option_suspen");
                options3.classList.add("option_incorrect");
            }else if(index==3){
                options4.classList.remove("option_suspen");
                options4.classList.add("option_incorrect");
            }
            if(incorrectasound){
                incorrectasound.play();
            }
                resetTimer();
                puntajei=puntajepreg;
                setTimeout(correct_but,2500);
                function correct_but(){
                    options1.classList.remove("option_incorrect");
                    options2.classList.remove("option_incorrect");
                    options3.classList.remove("option_incorrect");
                    options4.classList.remove("option_incorrect");
                    resetTimer();
                    Swal.fire({
                        title: '!Vulve a intentarlo, este es tu segundo intento¡',
                        imageUrl:'../img/trofe_per.png',
                        imageWidth: '15vw',
                        imageHeight: '15vw',
                        text: `Parece que esa no es la repuesta correcta, pero no importa tienes este segundo intento `,
                        confirmButtonText: 'Continuar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            startTimer();
                        }else{
                            startTimer();
                        }
                    });
                    Basepreguntacargada = numale(arrnum);
                    arrnum.splice(Basepreguntacargada,1);
                    pregunta++;
                    valp=1;
                document.getElementById("terpre").style.display="none"; 
            cargarPregunta(Basepreguntacargada);
            }
            valp=1;
            segundint=0;
            containco=1;
            contpista++;
    }

//----------------------------------Ejecutar si para cambiar el color de fondo------------------------------------------
    if(pregunta==1){
        cambico.classList.remove("bodyb1");
        cambico.classList.add("bodyb2");
    }else if(pregunta==2){
        cambico.classList.remove("bodyb2");
        cambico.classList.add("bodyb3");
    }else if(pregunta==3){
        cambico.classList.remove("bodyb3");
        cambico.classList.add("bodyb4");
    }else if(pregunta==4){
        cambico.classList.remove("bodyb4");
        cambico.classList.add("bodyb5");
    }else if(pregunta==5){
        cambico.classList.remove("bodyb5");
        cambico.classList.add("bodyb6");
    }else if(pregunta==6){
        cambico.classList.remove("bodyb6");
        cambico.classList.add("bodyb7");
    }else if(pregunta==7){
        cambico.classList.remove("bodyb7");
        cambico.classList.add("bodyb8");
        document.getElementById("most_es2").style.display="none";
        document.getElementById("most_es22").style.display="flex";
        document.getElementById("most_es1").style.display="none";
        document.getElementById("sinoche").style.display="none";
    }else if(pregunta==8){
        cambico.classList.remove("bodyb8");
        cambico.classList.add("bodyb9");
        document.getElementById("most_es2").style.display="flex";
        document.getElementById("most_es22").style.display="flex";
    }else if(pregunta==9){
        cambico.classList.remove("bodyb9");
        cambico.classList.add("bodyb10");
        document.getElementById("most_es1").style.display="none";
    }else{
        cambico.classList.remove("bodyb1");
        cambico.classList.remove("bodyb2");
        cambico.classList.remove("bodyb3");
        cambico.classList.remove("bodyb4");
        cambico.classList.remove("bodyb5");
        cambico.classList.remove("bodyb6");
        cambico.classList.remove("bodyb7");
        cambico.classList.remove("bodyb8");
        cambico.classList.remove("bodyb9");
        cambico.classList.add("bodyb10");
    }

// --------------------------------------Ejecutar si el juego termino-----------------------------------------------
    var numnel = localStorage.getItem("Nlevel");
    if (pregunta>=npreguntasf && valp==1) {
        startTimer();
        resetTimer();
        cambico.classList.add("bodyb10");
        document.getElementById("most_es2").style.display="flex";
        document.getElementById("most_es22").style.display="flex";
        document.getElementById("most_es1").style.display="none";
        document.getElementById("sinoche").style.display="none";
        document.getElementById("terpre").style.display="flex"; 
        setTimeout(final_pa2,3000);
            function final_pa2(){   
                Swal.fire({
                    title: "Juego términado",
                    imageUrl:'../img/finalaler.png',
                    imageWidth: '15vw',
                    imageHeight: '15vw',
                    text: `Tu puntaje fue de: ${puntajepreg+parseInt(localStorage.getItem("tex1"))} Preguntas totales:${npreguntasf-containco}`,
                    showConfirmButton: false
                });  
                puntajepreg = puntajepreg+parseInt(localStorage.getItem("tex1"));
                contpista = contpista+parseInt(localStorage.getItem("tex3"));
                localStorage.setItem("Nmenu", "1");
                localStorage.setItem("Jter", "1"); 
                localStorage.setItem("tex1", puntajepreg);
                localStorage.setItem("tex2", pregunta-1-containco);
                localStorage.setItem("tex3", contpista);
                localStorage.setItem("tex4", containco);
                localStorage.setItem("operacion", "save");
                document.getElementById("punt_tot").value = puntajepreg 
                document.getElementById("punt_lev").value = sellevel;
                document.getElementById("punt_ayu").value = contpista;
                document.getElementById("ope").value =  "save"; 
                document.getElementById('formulu').submit();
                puntajepreg = 0;
                pregunta = 1;
                document.getElementById("terpre").style.display="none"; 
            }
        }

    if (pregunta===15 && (numnel==2 || numnel==3) ) {
            startTimer();
            resetTimer();
            cambico.classList.add("bodyb10");
            document.getElementById("most_es2").style.display="flex";
            document.getElementById("most_es22").style.display="flex";
            document.getElementById("most_es1").style.display="none";
            document.getElementById("sinoche").style.display="none";
            document.getElementById("terpre").style.display="flex"; 
                localStorage.setItem("operacion", "edit");
            setTimeout(final_pa23,3000);
                function final_pa23(){   
                    Swal.fire({
                        icon: 'success',
                        title: "Bien hecho has llegado al seguro",
                        text:'Aqui decides si deseas continuar o terminar, el puntaje sera guardado',
                        imageWidth: '15vw',
                        imageHeight: '15vw',
                        text: `Aqui se guarda tu puntaje si continuas y pierdes solo se te cargara el siguiente puntaje: ${puntajepreg} Preguntas totales correctas:${pregunta-containco-1}`,
                        confirmButtonText: 'Continuar',
                        showConfirmButton: true,
                        showCancelButton: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                                localStorage.setItem("tex1", puntajepreg);
                                localStorage.setItem("tex2", pregunta-1-containco);
                                localStorage.setItem("tex3", contpista);
                                localStorage.setItem("tex4", containco);
                                document.getElementById("punt_tot").value = puntajepreg 
                                document.getElementById("punt_lev").value = sellevel;
                                document.getElementById("punt_ayu").value = contpista;
                                document.getElementById("terpre").style.display="none"; 
                                localStorage.setItem("seguro", 1);
                                document.getElementById("ope").value =  "edit"; 
                                document.getElementById('formulu').submit();
                        }else{
                                localStorage.setItem("tex1", puntajepreg);
                                localStorage.setItem("tex2", pregunta-1-containco);
                                localStorage.setItem("tex3", contpista);
                                localStorage.setItem("tex4", containco);
                                document.getElementById("punt_tot").value = puntajepreg 
                                document.getElementById("punt_lev").value = sellevel;
                                document.getElementById("punt_ayu").value = contpista;
                                document.getElementById("terpre").style.display="none"; 
                                localStorage.setItem("seguro", 1);
                                document.getElementById("ope").value =  "edit"; 
                                document.getElementById('formulu').submit();
                        }
                    }); 

            }
        }
    }

    var termi = localStorage.getItem("Jter");
    var leved = localStorage.getItem("Nlevel");
    if(leved ==3 && termi ==1){
        document.querySelector(".anima").style.display="none";
        window.location.href='home.php?ini=fin';
        document.querySelector(".contenido").style.display="none"
        cambico.classList.add("bodyb10");
        document.getElementById("most_es2").style.display="flex";
        document.getElementById("most_es22").style.display="flex";
            document.getElementById("most_es1").style.display="none";
            document.getElementById("sinoche").style.display="none";
        
    }else if(termi==1){
        cambico.classList.add("bodyb10");
        document.getElementById("most_es2").style.display="flex";
        document.getElementById("most_es22").style.display="flex";
        document.getElementById("most_es1").style.display="none";
        document.getElementById("sinoche").style.display="none";
            resetTimer();
            document.getElementById("form_ini").style.display="none";
            document.getElementById("some_div").style.display="none";
            document.getElementById("oculfin").style.display="none";
            document.getElementById("text_sec").style.display="none";
            document.getElementById("finalcj").style.display="flex";       // Ocultar Final del juego

            var textfip = document.getElementById("textfinp");
                textfip.textContent = localStorage.getItem("tex1"); 
            var textfipr = document.getElementById("textfinpr");
                textfipr.textContent = localStorage.getItem("tex2"); 
            var textfipy = document.getElementById("textfinpy");
                textfipy.textContent = localStorage.getItem("tex3"); 
            var textfinpin = document.getElementById("textfinpin");
                textfinpin.textContent = localStorage.getItem("tex4"); 
                    if(localStorage.getItem("Nlevel")==0){
                        document.getElementById("textlevel").textContent = "de Niños"; 
                    }
                    // else if(localStorage.getItem("Nlevel")==1){
                    //     document.getElementById("textlevel").textContent = "Facil"; 
                    // }
                    else if(localStorage.getItem("Nlevel")==2){
                        document.getElementById("textlevel").textContent = "Intermedio"; 
                    }

                localStorage.setItem("Jter", "0"); 
                localStorage.setItem("tex1", "0");
                localStorage.setItem("tex2", "0");
                localStorage.setItem("tex3", "0");
                localStorage.setItem("tex4", "0");
                
    }

//---------------------------------------------------50/50---------------------------------------------------------------
    function ayu5050() {
        if(cam5050>0){ 
            opciones = [objetoPregunta.va1[0]];
            opciones.push(objetoPregunta.va);
                    opciones.sort(() => Math.random() - 0.5);
            document.getElementById("resoptiona").innerHTML = opciones[0];
            document.getElementById("resoptionb").innerHTML = opciones[1];
            document.getElementById("options3").style.display = "none";
            document.getElementById("options4").style.display = "none";
            contpista++;   
        } 
    }
    
//---------------------------------------------------------Pistas---------------------------------------------------------
    function ayuda() {
        if(pista>0){
            Swal.fire({
                title: `Aqui va una pista \n\r  Restantes: ${pista-1}`,
                text: `"${objetoPregunta.ayuda}".`,
            });
            document.getElementById("ayuda").style.display="flex";
            contpista++;    
            resetTimer(1);
            startTimer();                                              
        }   
    }
//-------------------------------------------------Cambiarpregunta--------------------------------------------------------
    function cambio() {
        if(cambiar==1){
            Basepreguntacargada =numale(arrnum);
            arrnum.splice(Basepreguntacargada,1);
            contpista++;   
        cargarPregunta(Basepreguntacargada);
        }   
    }