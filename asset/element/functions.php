<?php
function solo_letras($cadena){
    $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMÑNOPQRSTUVWXYZ 123456789";
    for ($i=0; $i<strlen($cadena); $i++){
    if (strpos($permitidos, substr($cadena,$i,1))===false){
    //no es válido;
    return false;
    }
    } 
    //si estoy aqui es que todos los caracteres son validos
    return true;

} ;





//------------------------------------------------Codigo Javascript del archivo "index.js"----------------------------------------------


// //------------------------------------Evitar el doble envio de datos----------------------------------------------
//     if(window.history.replaceState){
//             window.history.replaceState(null, null, window.location.href);
//         }
        

// // ------------------------------------Variables inicializadoras----------------------------------------------
//     var Basepreguntacargada;                                            // Sortear las preguntas cada vez al inicar
//     var puntajepreg=0;                                                  // Variable del sumador de puntaje
//     var puntajei;                                                       // Variable del sumador de puntaje para mostrar
//     var cambico = document.getElementById("bodyb");                     // Id del body para cambiar el color del fondo
//     var segurop = localStorage.getItem("seguro");                // Tomar el valor seguro para guardar en el pregunta 15
//     var moonm=0;                                                        // Mostrar luna despues de pasar seguro 
//     var pregunta=1;                                                     // Variable Numero de pregunta 
//     var puntpp;                                                         // Valor de puntaje por pregunta
//     var valp = 1;                                                       // Validar si esat correcta o no
//     var pista;                                                          // Numero de ayudas
//     var cam5050;                                                        // Numero de 50 50
//     var contpista=0;                                                    // Contador de ayudas usadas
//     var containco=0;                                                    // Numero de preguntas incorrectas
//     var cambiar = 1;                                                    // Cambiar pregunta
//     var segundint = 1;                                                  // Segundo intento 
//     var sellevel = 0;                                                   // Selecion de nivel 
//     var baseDePreguntas;                                                // Variable donde se guarda el arreglo
//     var basenivelp=0;                                                   // Nivel de dificultad
//     var timetp;                                                         // Seguarda el valor del temporizador
//     var npreguntasf;                                                    // numero de preguntas para finalizar el nivel                                            
//     var arrnum;                                                         // Numero de preguntas por nivel
//     var cambiopregse;

// //----Cambiarcolordelfondopreguntas----------------------------------                                                             
//     var colf = document.getElementById('form_ini');

// // --------------------Guardar si el seguro se activa----------------------------------------------
//      if(segurop==1){
//         var moonm=1;
//             pregunta = 3; 
//                 if(cambico){
//                     cambico.classList.add("bodyb10");   
//                     document.getElementById("most_es2").style.display="flex";
//                     document.getElementById("most_es22").style.display="flex";
//                     document.getElementById("most_es1").style.display="none";
//                     document.getElementById("sinoche").style.display="none";
//                 }   
//              localStorage.setItem("seguro", 0);                  
//     }else{
//         pregunta = 1; 
//     }   

// //--------Cargar nivel kids por defecto-------------------                                                             
//     var juegokid = document.getElementById("juegokid");
//         if(juegokid){                                                                        
//             localStorage.setItem("Nlevel", "0");  
//         }

// //----------Cargar bloque antiseleccion--------------------------                                                         
//     var evitmu = document.getElementById("terpre");
//         if(evitmu){
//             document.getElementById("terpre").style.display="none"; 
//         }

// //-------------------------------------Mostrar y ocultar elementos index----------------------------------------------
//     var moslun = document.getElementById("most_es2");                   // Id del bdoy para mostrar luna
//     var mosfin = document.getElementById("finalcj");                    // Id del bdoy para mostrar final
//         if(moslun && moonm==0){
//             document.getElementById("most_es2").style.display="none";   // Ocultar Luna de la vista principal
//             document.getElementById("most_es22").style.display="none";   // Ocultar Luna de la vista principal
//         }
//         if(mosfin){
//             document.getElementById("finalcj").style.display="none";    // Ocultar Finald el juego
//         }

// //------------------------------------------Opciones demas niveles---------------------------------------------------
//     var userm = localStorage.getItem("Nmenu");                          // variable para mostrar el segundo menu de juego
//     var sellevel = localStorage.getItem("Nlevel");                      // variable seleccionar nivel
//     var valmp = document.getElementById("otrojue");                     // Id del div para mostrar menu de otros niveles
//         if(userm==1 && valmp){
//             document.getElementById("otrojue").style.display="flex";     // Mostrar menu de juego
//             // document.getElementById("level1").addEventListener("click", level1p);  
//             document.getElementById("level2").addEventListener("click", level2p);  
//             document.getElementById("level3").addEventListener("click", level3p);
//         }
        
// //--------------------------------------------function aleatorio---------------------------------------------------------
//     function numale(arrnum){
//         var indice=Math.floor(Math.random()*arrnum.length);
//         var numer =arrnum[indice];
//             arrnum.splice(indice,1);
//                 if(pregunta>=15){
//                     localStorage.setItem("Aleatorio", JSON.stringify(arrnum));  
//                 }else{
//                     localStorage.removeItem("Aleatorio");
//                 }
//             return numer;
//     }

// //-----------------------------------------Nivel facil info---------------------------------------------------------
//     // function level1p(){
//     //     Swal.fire({
//     //         title: 'Nivel facil',
//     //         text: "En este nivel encontraras preguntas de referentes de emserchia y de cultura general estas preguntas son en medida faciles ya que contaras con cuatro ayudas a diferencia de las 5 que tiene el juego de niños ademas de tener solo 20 segundos, asi que te le mides al reto?",
//     //         icon: 'warning',
//     //         showCancelButton: true,
//     //         confirmButtonColor: '#3085d6',
//     //         cancelButtonColor: '#d33',
//     //         cancelButtonText: 'Cancelar',
//     //         confirmButtonText: 'Iniciar partida'
//     //     }).then((result) => {
//     //         if (result.isConfirmed) {
//     //             window.location.href='home.php?ini=1';
//     //         }else{
//     //             window.location.href='home.php';
//     //         }
//     //         localStorage.setItem("Nlevel", "1");
//     //         localStorage.setItem("Jter", "0");                                  
//     //     })    
//     // }
    
// //-------------------------------------------Nivel intermedio info-------------------------------------------------
//     function level2p(){
//         Swal.fire({
//             title: 'Nivel Intermedio',
//             text: "En este nivel encontraras 20 preguntas cuentas con menos ayudas y los temas relacionados con la naturaleza y los entes encargados de supervisar y cuidar el medio ambiente",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             cancelButtonText: 'Cancelar',
//             confirmButtonText: 'Iniciar partida'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href='home.php?ini=1&lev=222';
//             }else{
//                 window.location.href='home.php';
//             }
//         })
//         localStorage.setItem("Nlevel", "2");
//         localStorage.setItem("Jter", "0");  
//     }

// //---------------------------------------------Nivel dificil info--------------------------------------------------
//     function level3p(){
//         Swal.fire({
//             title: 'Nivel Dificil',
//             text: "En este nivel las preguntas tienen mayor grado de dificultad por eso solo contaras con 2 ayudas ademas de responder 25 preguntas te crees capas de logarlo, posdata si lo logras tu recompensa sera encontrar el final del juego?",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             cancelButtonText: 'Cancelar',
//             confirmButtonText: 'Iniciar partida'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href='home.php?ini=1&lev=333';
//             }else{
//                 window.location.href='home.php';
//             }
//         })
//         localStorage.setItem("Nlevel", "3");
//         localStorage.setItem("Jter", "0");  
//     }

// //-----------------------------------------------Base de preguntas--------------------------------------------------
//         function encrypt_data(string) {
//             string = unescape(encodeURIComponent(string));
//             var newString = '',
//             char, nextChar, combinedCharCode;
//             for (var i = 0; i < string.length; i += 2) {
//             char = string.charCodeAt(i);
//                 if ((i + 1) < string.length) {
//                         nextChar = string.charCodeAt(i + 1) - 31;
//                         combinedCharCode = char + "" + nextChar.toLocaleString('en', {
//                         minimumIntegerDigits: 2
//                     });
//                     newString += String.fromCharCode(parseInt(combinedCharCode, 10));
//                 } else {
//                     newString += string.charAt(i);
//                 }
//             }
//             return newString.split("").reduce((hex,c)=>hex+=c.charCodeAt(0).toString(16).padStart(4,"0"),"");
//         }

// //-----------------------------------------------Base de preguntas--------------------------------------------------
// preguntbase()
// function preguntbase(){
//     //----------------------------------------------------Cargar menu--------------------------------------------
//     if(sellevel==0){
//         pista = 3;   
//         cam5050 = 1;       
//         cambiar = 1;
//         timetp=29;                                                    
//         basenivelp = 0;
//         npreguntasf=10; 
//             // arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
//             arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
//         }
//             //   else if(sellevel==1){
//             //     pista = 3;  
//             //     cam5050 = 1;        
//             //     cambiar = 1;
//             //     timetp=19;                                                    
//             //     basenivelp=1;   
//             //     npreguntasf=15; 
//             //     arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
//             //   }
//         else if(sellevel==2){
//         pista = 2;        
//         cambiar = 0;
//         cam5050 = 1;  
//         timetp=24;                                                    
//         basenivelp=2; 
//         npreguntasf=20; 
//         if(pregunta>=15){
//             arrnum = localStorage.getItem("Aleatorio")
//             arrnum = JSON.parse(arrnum);
//         }else{  
//             arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34];
//         }
//         }else if(sellevel==3){
//         pista = 1;      
//         cam5050 = 1;    
//         cambiar = 0;
//         timetp=24;                                                    
//         basenivelp=3;  
//         npreguntasf=25; 
//         if(pregunta>=15){
//             arrnum = localStorage.getItem("Aleatorio")
//             arrnum = JSON.parse(arrnum);
//         }else{  
//             arrnum = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,
//                 26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,
//                 51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,
//                 76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100
//             ];
//         }
//     }
//     preguntaspon();
// };

// // -----------------------------------------------Input de nombre --------------------------------------------------
//     var Datos_part = document.getElementById("participante");
//         if(Datos_part){
//             document.getElementById("participante").addEventListener("focus", accion);
//             document.getElementById("participante").addEventListener("input", accion1);
//             document.getElementById("participante").addEventListener("focusout", accion1);
//                 function accion(){
//                     document.querySelector(".nolabel").style.transition ="all 500ms";
//                 }
//                 function accion1(){
//                     document.querySelector(".nolabel").style.transition ="all 500ms";
//                     document.querySelector(".input_btn").style.background ="#fff";
//                 }

// //--------------------------------------Validar Limitar input javascript------------------------------------------
//                 document.getElementById("participante").addEventListener("input", onInput);
//                     var titleValue = document.getElementById("participante").value;
//                     var inputValue = '';
//                         function onInput(e) {
//                             if(e.currentTarget.value.length == 19) {
//                                 Swal.fire({
//                                     icon: 'error',
//                                     title: '¡Cuidado!',
//                                     text: 'No escribas mas de 19 caracteres',
//                                 });
//                             }
//                             if(e.currentTarget.value.length > 20) {
//                                 e.currentTarget.value = titleValue;
//                                 Swal.fire({
//                                     icon: 'error',
//                                     title: '¡Te lo adverti!',
//                                     text: 'Por favor, Vuleve a escribir',
//                                 });
//                             }
//                             inputValue = e.currentTarget.value;
//                             return;
//                         }
//         }

// // -------------------------------------Ejecutar si se quiere salie del juego---------------------------------------
//     function salirp(){
//         Swal.fire({
//             title: 'Estas seguro?:(',
//             text: "Quieres salir a la pantalla principal ?",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             cancelButtonText: 'Seguir jugando',
//             confirmButtonText: 'Terminar partida'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href='home.php';
//             }else{

//             }
//         })
//     }

// //---------------------------------------------Temporizador preguntas-----------------------------------------------
//     var Temporizadorp = document.getElementById('some_div');
//         if(Temporizadorp){
//             cargarPregunta(numale(arrnum));
//             var timer;
//             const timerElement = document.getElementById("some_div");
//                 function startTimer() {
//                     clearInterval(timer);
//                     timer = setInterval(function() {
//                         if(timeLeft >= 0){
//                             timerElement.textContent = timeLeft;
//                         }
//                         timeLeft--;
// //------------------------------------------Temporizador se acabo el tiempo---------------------------------------------
//                         if (timeLeft == -1) {
//                             valp=0;
//                                 colf.classList.remove("conte_pregunp5");
//                                 colf.classList.add("conte_pregunp6");
//                             document.getElementById("terpre").style.display="flex"; 
//                             clearInterval(timer);
//                                 var incorrectasound = document.getElementById("incorrectasound");
//                                 setTimeout(incorrectso, 2000);
//                                 if(incorrectasound){
//                                     incorrectasound.play();
//                                 }
//                                 function incorrectso(){
//                                     Swal.fire({
//                                         title: 'Perdiste :(',
//                                         text: `Se te agoto el tiempo y no seleccioanste ninguna repuesta puedes volver a jugar o quieres Salir ?Tu puntaje fue de: ${puntajepreg}`,
//                                         icon: 'error',
//                                         showCancelButton: true,
//                                         confirmButtonColor: '#3085d6',
//                                         cancelButtonColor: '#d33',
//                                         cancelButtonText: 'Pagina Principal',
//                                         confirmButtonText: 'Volver a jugar'
//                                     }).then((result) => {
//                                         if (result.isConfirmed) {
//                                             window.location.href='home.php';
//                                         }else{
//                                             window.location.href='home.php';
//                                         }
//                                     });
//                                     document.getElementById("terpre").style.display="none"; 
//                                 }
// //----------------------------------------Cambiar color y tamaño del contador-------------------------------------------
//                         }else if(timeLeft<=2){
//                             puntpp = 15000;
//                                 colf.classList.remove("conte_pregunp4");
//                                 colf.classList.add("conte_pregunp5");
//                             document.getElementById('some_div').style.fontSize = "3.5rem";
//                         }else if(timeLeft<=4){
//                             puntpp = 35000;
//                                 colf.classList.remove("conte_pregunp3");
//                                 colf.classList.add("conte_pregunp4");
//                             document.getElementById('some_div').style.fontSize = "3.2rem";
//                         }else if(timeLeft<=7){
//                             puntpp = 50000;
//                                 colf.classList.remove("conte_pregunp2");
//                                 colf.classList.add("conte_pregunp3");
//                             document.getElementById('some_div').style.color = "#FF0000";
//                             document.getElementById('some_div').style.fontSize = "2.8rem";
//                             document.getElementById('some_div').style.fontWeight = "900";
//                         }else if(timeLeft<=10){
//                             puntpp = 75000;
//                                 colf.classList.remove("conte_pregunp1");
//                                 colf.classList.add("conte_pregunp2");
//                             document.getElementById('some_div').style.color = "#008000";
//                             document.getElementById('some_div').style.fontSize = "2.3rem";
//                             document.getElementById('some_div').style.fontWeight = "800";
//                         }else if(timeLeft<=15){
//                             puntpp = 85000;
//                                 colf.classList.remove("conte_pregunp");
//                                 colf.classList.add("conte_pregunp1");
//                             document.getElementById('some_div').style.color = "#0acc2b";
//                             document.getElementById('some_div').style.fontSize = "2rem";
//                         }else if(timeLeft<=25){
//                             puntpp = 100000;
//                                 colf.classList.remove("conte_pregunp1");
//                                 colf.classList.remove("conte_pregunp2");
//                                 colf.classList.remove("conte_pregunp3");
//                                 colf.classList.remove("conte_pregunp4");
//                                 colf.classList.remove("conte_pregunp5");
//                             colf.classList.add("conte_pregunp");
//                             document.getElementById('some_div').style.color = "#0acc2b";
//                             document.getElementById('some_div').style.fontSize = "2rem";
//                         }else if(timeLeft<=29){
//                             puntpp = 100000;
//                                 colf.classList.remove("conte_pregunp1");
//                                 colf.classList.remove("conte_pregunp2");
//                                 colf.classList.remove("conte_pregunp3");
//                                 colf.classList.remove("conte_pregunp4");
//                                 colf.classList.remove("conte_pregunp5");
//                             colf.classList.add("conte_pregunp");
//                             document.getElementById('some_div').style.color = "#0acc2b";
//                             document.getElementById('some_div').style.fontSize = "2rem";
//                         }
                        
//                     }, 
//             1000);
//         }

// //----------------------------------------------Parar temporizador-----------------------------------------------------
//     function resetTimer(timetpv) {
//         if(!timetpv){
//                 timeLeft = timetp;
//                 clearInterval(timer);
//             }else{
//                 timeLeft=timeLeft+5;
//                 clearInterval(timer);
//             }
//         }
//     var timeLeft = timetp;  

// //-----------------------------------------Iniciar temporizador---------------------------------------------------  
//     startTimer();             
//     }

// // ----------------------------------------Validar cargar preguntas ------------------------------------------------
//     function cargarPregunta(index) {
//             document.getElementById("options3").style.display = "flex";
//             document.getElementById("options4").style.display = "flex";
//         objetoPregunta = baseDePreguntas[index];
//         opciones = [...objetoPregunta.va1];
//         opciones.push(objetoPregunta.va);
//             for (let i = 0; i < 4; i++) {
//                 opciones.sort(() => Math.random() - 0.5);
//             }
//         document.getElementById("text_pregun").innerHTML = objetoPregunta.pregunta;
//         document.getElementById("numerop").innerHTML = pregunta;

// // ---------------------------------------Mostrar boton de ayudas -------------------------------------------------
//         if(pista>0){
//             document.getElementById("ayuda").style.display = "flex";
//             }else{
//             document.getElementById("ayuda").style.display = "none";
//         }
//         if(cambiar==1){
//             document.getElementById("cambiar").style.display = "flex";
//             }else{
//             document.getElementById("cambiar").style.display = "none";
//         }
//         if(cam5050==1){
//             document.getElementById("camb50").style.display = "flex";
//             }else{
//             document.getElementById("camb50").style.display = "none";
//         }
//         document.getElementById("resoptiona").innerHTML = opciones[0];
//         document.getElementById("resoptionb").innerHTML = opciones[1];
//         document.getElementById("resoptionc").innerHTML = opciones[2];
//         document.getElementById("resoptiond").innerHTML = opciones[3];
//     }

// // ----------------------------------Validar ayudas restantes y funcion ----------------------------------------------
//     if(document.getElementById("ayuda")){
    
//         document.getElementById("ayuda").addEventListener("click", pistaayu);
//         function pistaayu(){
//             ayuda();
//             document.getElementById("ayuda").style.display="none";
//             pista--;
//         }
//     }
//     if(document.getElementById("cambiar")){
//         document.getElementById("cambiar").addEventListener("click", pistacam);
//         function pistacam(){
//             cambio();
//             document.getElementById("cambiar").style.display="none";
//             cambiar=0;
//         }
//     }
//     if(document.getElementById("camb50")){
//         document.getElementById("camb50").addEventListener("click", pistacam50);
//         function pistacam50(){
//             ayu5050();
//             document.getElementById("camb50").style.display="none";
//             cam5050=0;
//         }
//     }

// // -------------------------------------------Validar respuestas-------------------------------------------------------
//     async function seleccionarOpción(index) {
//     var validezRespuesta = opciones[index] == objetoPregunta.va;
//         if (validezRespuesta && valp==1) {// ---------Ejecutar si la pregunta es correcta------------------------
// // ------------------------------------Animacion y color ddel boton correcto--------------------------------------------
//             document.getElementById("terpre").style.display="flex"; 
//                 for (n = 1; n < 5; n++) {
//                     document.getElementById("options"+[n]);
//                 }
//                 if(index==0){
//                     options1.classList.add("option_correct");
//                 }else if(index==1){
//                     options2.classList.add("option_correct");
//                 }else if(index==2){
//                     options3.classList.add("option_correct");
//                 }else if(index==3){
//                     options4.classList.add("option_correct");
//                 }
// // ----------------------------------------------------------Sondio de respuesta correcta-----------------------------------------------
//                 if(correctasound){
//                     correctasound.play();
//                 }
//                 resetTimer();
//                     setTimeout(correct_but3,2200);
// // ---------------------------------------------------------Funcion siguiente pregunta--------------------------------------------------
//                     async function correct_but3(){
//                             options1.classList.remove("option_correct");
//                             options2.classList.remove("option_correct");
//                             options3.classList.remove("option_correct");
//                             options4.classList.remove("option_correct");
//                                 Swal.fire({
//                                     icon: 'success',
//                                     title: 'Perfecto',
//                                     showConfirmButton: true,
//                                     text: 'Muy bien respuesta correcta, vamos con la siguiente',
//                                     confirmButtonText: 'Siguiente pregunta',
//                                 }).then((result) => {
//                                     if (result.isConfirmed) {
//                                         startTimer();
//                                     }else{
//                                         startTimer();
//                                     }
//                                 });
//                                 Basepreguntacargada =numale(arrnum);
//                                 puntajepreg=puntajepreg+puntpp/100;
//                                 pregunta++;
//                                 valp=1;
//                             document.getElementById("terpre").style.display="none"; 
//                         cargarPregunta(Basepreguntacargada,1);
//                     }

// // ---------------------------------------Funcion pregunta incorrecta----------------------------------------------------
//         } else if(!validezRespuesta && segundint!=1) {
//             document.getElementById("terpre").style.display="flex"; 
//                 for (n = 1; n < 5; n++) {
//                     document.getElementById("options"+[n]);
//                 }
//                 if(index==0){
//                     options1.classList.remove("option_suspen");
//                     options1.classList.add("option_incorrect");
//                 }else if(index==1){
//                     options2.classList.remove("option_suspen");
//                     options2.classList.add("option_incorrect");
//                 }else if(index==2){
//                     options3.classList.remove("option_suspen");
//                     options3.classList.add("option_incorrect");
//                 }else if(index==3){
//                     options4.classList.remove("option_suspen");
//                     options4.classList.add("option_incorrect");
//                 }
//                 if(incorrectasound){
//                     incorrectasound.play();
//                 }
//                 resetTimer();
//                 puntajei=puntajepreg;
//                 setTimeout(correct_but,2500);
//                     function correct_but(){
//                         Swal.fire({
//                             title: '!Ups¡',
//                             imageUrl:'../img/trofe_per.png',
//                             imageWidth: '15vw',
//                             imageHeight: '15vw',
//                             text: `Parece que esa no es la repuesta correcta, no importa puedes volver a intentarlo :) Tu puntaje fue de: ${puntajei}`,
//                             confirmButtonText: 'Menu principal',
//                             cancelButtonText: 'Salir',
//                             showCancelButton: true,
//                         }).then((result) => {
//                             if (result.isConfirmed) {
//                                 window.location.href='home.php';
//                             }else{
//                                 window.location.href='element/vsal.php?intsalju=1';
//                             }
//                         });
//                         document.getElementById("terpre").style.display="none"; 
//                     }
//                     puntajepreg=0;
//                     valp=0;

// // ---------------------------------------------Segundo intento----------------------------------------------------------
//         }else if(segundint==1) {
//             document.getElementById("terpre").style.display="flex"; 
//             for (n = 1; n < 5; n++) {
//                 document.getElementById("options"+[n]);
//             }
//             if(index==0){
//                 options1.classList.remove("option_suspen");
//                 options1.classList.add("option_incorrect");
//             }else if(index==1){
//                 options2.classList.remove("option_suspen");
//                 options2.classList.add("option_incorrect");
//             }else if(index==2){
//                 options3.classList.remove("option_suspen");
//                 options3.classList.add("option_incorrect");
//             }else if(index==3){
//                 options4.classList.remove("option_suspen");
//                 options4.classList.add("option_incorrect");
//             }
//             if(incorrectasound){
//                 incorrectasound.play();
//             }
//                 resetTimer();
//                 puntajei=puntajepreg;
//                 setTimeout(correct_but,2500);
//                 function correct_but(){
//                     options1.classList.remove("option_incorrect");
//                     options2.classList.remove("option_incorrect");
//                     options3.classList.remove("option_incorrect");
//                     options4.classList.remove("option_incorrect");
//                     resetTimer();
//                     Swal.fire({
//                         title: '!Vulve a intentarlo, este es tu segundo intento¡',
//                         imageUrl:'../img/trofe_per.png',
//                         imageWidth: '15vw',
//                         imageHeight: '15vw',
//                         text: `Parece que esa no es la repuesta correcta, pero no importa tienes este segundo intento `,
//                         confirmButtonText: 'Continuar',
//                     }).then((result) => {
//                         if (result.isConfirmed) {
//                             startTimer();
//                         }else{
//                             startTimer();
//                         }
//                     });
//                     Basepreguntacargada = numale(arrnum);
//                     arrnum.splice(Basepreguntacargada,1);
//                     pregunta++;
//                     valp=1;
//                 document.getElementById("terpre").style.display="none"; 
//             cargarPregunta(Basepreguntacargada);
//             }
//             valp=1;
//             segundint=0;
//             containco=1;
//             contpista++;
//     }

// //----------------------------------Ejecutar si para cambiar el color de fondo------------------------------------------
//     if(pregunta==1){
//         cambico.classList.remove("bodyb1");
//         cambico.classList.add("bodyb2");
//     }else if(pregunta==2){
//         cambico.classList.remove("bodyb2");
//         cambico.classList.add("bodyb3");
//     }else if(pregunta==3){
//         cambico.classList.remove("bodyb3");
//         cambico.classList.add("bodyb4");
//     }else if(pregunta==4){
//         cambico.classList.remove("bodyb4");
//         cambico.classList.add("bodyb5");
//     }else if(pregunta==5){
//         cambico.classList.remove("bodyb5");
//         cambico.classList.add("bodyb6");
//     }else if(pregunta==6){
//         cambico.classList.remove("bodyb6");
//         cambico.classList.add("bodyb7");
//     }else if(pregunta==7){
//         cambico.classList.remove("bodyb7");
//         cambico.classList.add("bodyb8");
//         document.getElementById("most_es2").style.display="none";
//         document.getElementById("most_es22").style.display="flex";
//         document.getElementById("most_es1").style.display="none";
//         document.getElementById("sinoche").style.display="none";
//     }else if(pregunta==8){
//         cambico.classList.remove("bodyb8");
//         cambico.classList.add("bodyb9");
//         document.getElementById("most_es2").style.display="flex";
//         document.getElementById("most_es22").style.display="flex";
//     }else if(pregunta==9){
//         cambico.classList.remove("bodyb9");
//         cambico.classList.add("bodyb10");
//         document.getElementById("most_es1").style.display="none";
//     }else{
//         cambico.classList.remove("bodyb1");
//         cambico.classList.remove("bodyb2");
//         cambico.classList.remove("bodyb3");
//         cambico.classList.remove("bodyb4");
//         cambico.classList.remove("bodyb5");
//         cambico.classList.remove("bodyb6");
//         cambico.classList.remove("bodyb7");
//         cambico.classList.remove("bodyb8");
//         cambico.classList.remove("bodyb9");
//         cambico.classList.add("bodyb10");
//     }

// // --------------------------------------Ejecutar si el juego termino-----------------------------------------------
//     var numnel = localStorage.getItem("Nlevel");
//     if (pregunta>=npreguntasf && valp==1) {
//         startTimer();
//         resetTimer();
//         cambico.classList.add("bodyb10");
//         document.getElementById("most_es2").style.display="flex";
//         document.getElementById("most_es22").style.display="flex";
//         document.getElementById("most_es1").style.display="none";
//         document.getElementById("sinoche").style.display="none";
//         document.getElementById("terpre").style.display="flex"; 
//         setTimeout(final_pa2,3000);
//             function final_pa2(){   
//                 Swal.fire({
//                     title: "Juego términado",
//                     imageUrl:'../img/finalaler.png',
//                     imageWidth: '15vw',
//                     imageHeight: '15vw',
//                     text: `Tu puntaje fue de: ${puntajepreg+parseInt(localStorage.getItem("tex1"))} Preguntas totales:${npreguntasf-containco}`,
//                     showConfirmButton: false
//                 });  
//                 puntajepreg = puntajepreg+parseInt(localStorage.getItem("tex1"));
//                 contpista = contpista+parseInt(localStorage.getItem("tex3"));
//                 localStorage.setItem("Nmenu", "1");
//                 localStorage.setItem("Jter", "1"); 
//                 localStorage.setItem("tex1", puntajepreg);
//                 localStorage.setItem("tex2", pregunta-1-containco);
//                 localStorage.setItem("tex3", contpista);
//                 localStorage.setItem("tex4", containco);
//                 localStorage.setItem("operacion", "save");
//                 document.getElementById("punt_tot").value = puntajepreg 
//                 document.getElementById("punt_lev").value = sellevel;
//                 document.getElementById("punt_ayu").value = contpista;
//                 document.getElementById("ope").value =  "save"; 
//                 document.getElementById('formulu').submit();
//                 puntajepreg = 0;
//                 pregunta = 1;
//                 document.getElementById("terpre").style.display="none"; 
//             }
//         }

//     if (pregunta===2 && (numnel==2 || numnel==3) ) {
//             startTimer();
//             resetTimer();
//             cambico.classList.add("bodyb10");
//             document.getElementById("most_es2").style.display="flex";
//             document.getElementById("most_es22").style.display="flex";
//             document.getElementById("most_es1").style.display="none";
//             document.getElementById("sinoche").style.display="none";
//             document.getElementById("terpre").style.display="flex"; 
//                 localStorage.setItem("operacion", "edit");
//             setTimeout(final_pa23,3000);
//                 function final_pa23(){   
//                     Swal.fire({
//                         icon: 'success',
//                         title: "Bien hecho has llegado al seguro",
//                         text:'Aqui decides si deseas continuar o terminar, el puntaje sera guardado',
//                         imageWidth: '15vw',
//                         imageHeight: '15vw',
//                         text: `Aqui se guarda tu puntaje si continuas y pierdes solo se te cargara el siguiente puntaje: ${puntajepreg} Preguntas totales correctas:${pregunta-containco-1}`,
//                         confirmButtonText: 'Continuar',
//                         showConfirmButton: true,
//                         showCancelButton: false
//                     }).then((result) => {
//                         if (result.isConfirmed) {
//                                 localStorage.setItem("tex1", puntajepreg);
//                                 localStorage.setItem("tex2", pregunta-1-containco);
//                                 localStorage.setItem("tex3", contpista);
//                                 localStorage.setItem("tex4", containco);
//                                 document.getElementById("punt_tot").value = puntajepreg 
//                                 document.getElementById("punt_lev").value = sellevel;
//                                 document.getElementById("punt_ayu").value = contpista;
//                                 document.getElementById("terpre").style.display="none"; 
//                                 localStorage.setItem("seguro", 1);
//                                 document.getElementById("ope").value =  "edit"; 
//                                 document.getElementById('formulu').submit();
//                         }else{
//                                 localStorage.setItem("tex1", puntajepreg);
//                                 localStorage.setItem("tex2", pregunta-1-containco);
//                                 localStorage.setItem("tex3", contpista);
//                                 localStorage.setItem("tex4", containco);
//                                 document.getElementById("punt_tot").value = puntajepreg 
//                                 document.getElementById("punt_lev").value = sellevel;
//                                 document.getElementById("punt_ayu").value = contpista;
//                                 document.getElementById("terpre").style.display="none"; 
//                                 localStorage.setItem("seguro", 1);
//                                 document.getElementById("ope").value =  "edit"; 
//                                 document.getElementById('formulu').submit();
//                         }
//                     }); 

//             }
//         }
//     }

//     var termi = localStorage.getItem("Jter");
//     var leved = localStorage.getItem("Nlevel");
//     if(leved ==3 && termi ==1){
//         document.querySelector(".anima").style.display="none";
//         window.location.href='home.php?ini=fin';
//         document.querySelector(".contenido").style.display="none"
//         cambico.classList.add("bodyb10");
//         document.getElementById("most_es2").style.display="flex";
//         document.getElementById("most_es22").style.display="flex";
//             document.getElementById("most_es1").style.display="none";
//             document.getElementById("sinoche").style.display="none";
        
//     }else if(termi==1){
//         cambico.classList.add("bodyb10");
//         document.getElementById("most_es2").style.display="flex";
//         document.getElementById("most_es22").style.display="flex";
//         document.getElementById("most_es1").style.display="none";
//         document.getElementById("sinoche").style.display="none";
//             resetTimer();
//             document.getElementById("form_ini").style.display="none";
//             document.getElementById("some_div").style.display="none";
//             document.getElementById("oculfin").style.display="none";
//             document.getElementById("text_sec").style.display="none";
//             document.getElementById("finalcj").style.display="flex";       // Ocultar Final del juego

//             var textfip = document.getElementById("textfinp");
//                 textfip.textContent = localStorage.getItem("tex1"); 
//             var textfipr = document.getElementById("textfinpr");
//                 textfipr.textContent = localStorage.getItem("tex2"); 
//             var textfipy = document.getElementById("textfinpy");
//                 textfipy.textContent = localStorage.getItem("tex3"); 
//             var textfinpin = document.getElementById("textfinpin");
//                 textfinpin.textContent = localStorage.getItem("tex4"); 
//                     if(localStorage.getItem("Nlevel")==0){
//                         document.getElementById("textlevel").textContent = "de Niños"; 
//                     }
//                     // else if(localStorage.getItem("Nlevel")==1){
//                     //     document.getElementById("textlevel").textContent = "Facil"; 
//                     // }
//                     else if(localStorage.getItem("Nlevel")==2){
//                         document.getElementById("textlevel").textContent = "Intermedio"; 
//                     }

//                 localStorage.setItem("Jter", "0"); 
//                 localStorage.setItem("tex1", "0");
//                 localStorage.setItem("tex2", "0");
//                 localStorage.setItem("tex3", "0");
//                 localStorage.setItem("tex4", "0");
                
//     }

// //---------------------------------------------------50/50---------------------------------------------------------------
//     function ayu5050() {
//         if(cam5050>0){ 
//             opciones = [objetoPregunta.va1[0]];
//             opciones.push(objetoPregunta.va);
//                     opciones.sort(() => Math.random() - 0.5);
//             document.getElementById("resoptiona").innerHTML = opciones[0];
//             document.getElementById("resoptionb").innerHTML = opciones[1];
//             document.getElementById("options3").style.display = "none";
//             document.getElementById("options4").style.display = "none";
//             contpista++;   
//         } 
//     }
    
// //---------------------------------------------------------Pistas---------------------------------------------------------
//     function ayuda() {
//         if(pista>0){
//             Swal.fire({
//                 title: `Aqui va una pista \n\r  Restantes: ${pista-1}`,
//                 text: `"${objetoPregunta.ayuda}".`,
//             });
//             document.getElementById("ayuda").style.display="flex";
//             contpista++;    
//             resetTimer(1);
//             startTimer();                                              
//         }   
//     }
// //-------------------------------------------------Cambiarpregunta--------------------------------------------------------
//     function cambio() {
//         if(cambiar==1){
//             Basepreguntacargada =numale(arrnum);
//             arrnum.splice(Basepreguntacargada,1);
//             contpista++;   
//         cargarPregunta(Basepreguntacargada);
//         }   
//     }
   
//   if(basenivelp==0){
//     baseDePreguntas = [
//       {
//         pregunta: "¿Emserchia provee agua gracias al contrato que con la ciudad de?",
//         ayuda: "Es un lugar reconocido de colombia",
//         respuesta: "Bogota",
//         distractores: ["Cundinamarca", "Cajica", "Chia"],
//       },
//       {
//         pregunta: "¿Cual fue el ultimo servicio incluido por Emserchia?",
//         ayuda: "Realiza mas cosas aparte de las principales",
//         respuesta: "Complementarios",
//         distractores: ["Recoleccion", "Ambiente", "Aseo"],
//       },
//       {
//         pregunta: "¿Que significa EmserKids?",
//         ayuda: "Es un es...... diseñado con amor para los niños",
//         respuesta: "Espacio de niños",
//         distractores: ["Niños Emserchia", "Vamos niños", "Todos somos niños"],
//       },
//       {
//         pregunta: "¿Cuantos valores tiene nuestro codigo de integridad?",
//         ayuda: "Hace parte de los numero impares",
//         respuesta: "7",
//         distractores: ["9", "6", "8"],
//       },
//       {
//         pregunta: "De los siguientes ¿cual es un objetivo principal de Emserchia?",
//         ayuda: "Se unen para crear cosas unicas y tener bases",
//         respuesta: "Conformar",
//         distractores: ["Prevencion", "Transformar", "Promover"],
//       },
//       {
//         pregunta: "De las siguientes frases, ¿Cual hace parte de la politica de calidad de Emserchia?",
//         ayuda: "Hace parte de un cambio constante",
//         respuesta: "Mejora continua",
//         distractores: ["Auto-Suficiente", "Control total", "Antencion usuario"],
//       },
//       {
//         pregunta: "¿Con cual de las siguientes palabras se identifica la frase 'Dar un segundo uso' ?",
//         ayuda: "Evita la creacion de mas cosas",
//         respuesta: "Reciclaje",
//         distractores: ["Oportunidad", "Almacenaje", "Conservar"],
//       },
//       {
//         pregunta: "¿Cuales son los colores corporativos de Emserchia?",
//         ayuda: "Es lo primero que se ve en la pagina, y en el pie de la pagina",
//         respuesta: "Naranja, Azul, Verde",
//         distractores: ["Verde, Cafe, Azul", "Amarillo, Verde, Azul", "Azul, verde, Rojo"],
//       },
//       {
//         pregunta: "¿Contamos con una gran red de?",
//         ayuda: "Esta hecho par varios tramos conectados entre si",
//         respuesta: "Tuberias",
//         distractores: ["Alcantarillados", "Acueductos", "Sedes"],
//       },
//       {
//         pregunta: "¿Cual es la actividad que realiza Emserchia para disminuir la contaminacion directa al ambiente?",
//         ayuda: "Es un recurso vital para todos",
//         respuesta: "Tratamiento de agua",
//         distractores: ["Potabilización", "Escombros", "Poda"],
//       },
//       {
//         pregunta: "¿Cual es la mascota de Emserchia?",
//         ayuda: "Se encuentra junto a nuestro logo en los camiones recolectores",
//         respuesta: "El hipopotamo",
//         distractores: ["La Jirafa", "El Leon", "El Zorro"],
//       },
//       {
//         pregunta: "¿Hasta que año tiene vigencia la vision de Emserchia?",
//         ayuda: "Se encuentra en la vision de la empresa, pero en años esta bien arriba",
//         respuesta: "2030",
//         distractores: ["2024", "2026", "2028"],
//       },
//       {
//         pregunta: "¿Con cuantas sedes de atencion al usuario tiene Emserchia?",
//         ayuda: "Se prodia decir que es la mitad de los dedos de la mano entre 2 y 3",
//         respuesta: "3",
//         distractores: ["2", "4", "6"],
//       },
//       {
//         pregunta: "¿Nombre del barrio donde queda la sede principal de Emserchia?",
//         ayuda: "Nos ubicamos cerca al parque por el centro urbano entre San Luis y Rio Frio",
//         respuesta: "San Luis",
//         distractores: ["Santa Rita", "Bojaca", "Rio Frio"],
//       },
//       {
//         pregunta: "¿Cuantos años tiene Emserchia?",
//         ayuda: "ya casi cumplimos medio siglo",
//         respuesta: "44 años",
//         distractores: ["32 años", "42 años", "54 años"],
//       },
// // ];
// //   }else if(basenivelp==1){
// //     baseDePreguntas = [
    
//       {
//         pregunta: "¿Dónde se encuentra el desierto del Sahara?",
//         ayuda: "Es uno e los lugares mas calidos del mundo Ubicado en A.......",
//         respuesta: "Africa",
//         distractores: ["America", "Asia", "Oceania"],
//       },
//       {
//         pregunta: "¿Cuál es la cuarta letra del abecedario?",
//         ayuda: "Es logico que es la 'D'",
//         respuesta: "D",
//         distractores: ["A", "B", "C"],
//       },
//       {
//         pregunta: "¿Cuántos meses tiene un año?",
//         ayuda: "Hace parte de los numero impares",
//         respuesta: "12 meses",
//         distractores: ["9 meses", "6 meses", "10 meses"],
//       },
//       {
//         pregunta: "¿Cuánto es una docena?",
//         ayuda: "Es contar 2 veces el numero 6",
//         respuesta: "12 numeros",
//         distractores: ["10 numeros", "24 numeros", "16 numeros"],
//       },
//       {
//           pregunta: "¿Cómo se llaman los animales que nacen de un huevo?",
//           ayuda: "Esto animales particularmente son aves y reptiles por ende son O.....",
//           respuesta: "Ovíparos.",
//           distractores: ["Vertebrados", "Invertebrados", "Viviparos"],
//       },
//       {
//           pregunta: "¿Cómo se llama un polígono de 5 lados? ",
//           ayuda: "poligono hace referencia a una figura geometrica el pentagono tiene 5 lados",
//           respuesta: "Pentagono",
//           distractores: ["Decanogo", "Tentanogo", "Hexagono"],
//       },
//       {
//           pregunta: "¿Cómo se llama el lugar donde se escriben las notas musicales?",
//           ayuda: "Esta compuesto por por 6 lineas y tiene una cartilla con el nombre te Penta",
//           respuesta: "Pentagrama",
//           distractores: ["Libro musical", "Telegrama", "Gramatica musical"],
//       }
        
//     ];
//     // alert(baseDePreguntas.length);
//   }else if(basenivelp==2){
//       baseDePreguntas = [
//         {
//           pregunta: "¿Cuál de los siguientes NO hace parte de los sabores primarios?",
//           ayuda: "Solo exiten 5 sabores de los cuales 'Amargo' si es valido",
//           respuesta: "Desabrido",
//           distractores: ["Umami", "Dulce", "Amargo"],
//         },
//         {
//           pregunta: "¿Cual es el numero de telefono principal de Emserchia?",
//           ayuda: "Se repite 3 veces el cuatro",
//           respuesta: "4926464",
//           distractores: ["4326494", "4926264", "6926452"],
//         },
//         {
//           pregunta: "¿Bajo que norma de calidad rige Emserchia?",
//           ayuda: "Esta norma se tomo en la version 2008 pero se actualizo recientemente al 2015",
//           respuesta: "ISO 9001 2015",
//           distractores: ["ISO 9001 2008", "ISO 27001 2012", "ISO 17000 2016"],
//         },
//         {
//           pregunta: "¿Cuáles es la montaña más alta del país?",
//           ayuda: "Se encuentra muy al norte del pais, cerca de las costas",
//           respuesta: "Sierra Santa marta",
//           distractores: ["Pico Simón", "Páramo de Pisba", "Nevado del Ruíz"],
//         },
//         {
//           pregunta: "¿Con cuántos países comparte Colombia fronteras terrestres?",
//           ayuda: "Es un numero impar",
//           respuesta: "Cinco",
//           distractores: ["Siete", "Cuatro", "Ocho"],
//         },
//         {
//           pregunta: "¿Cuál es la capital del Departamento del Amazonas donde abunda gran biodiversidad?",
//           ayuda: "Se encuentra entre la letra M despues de la letra K en el abacedareo",
//           respuesta: "Leticia",
//           distractores: ["Florencia", "Vaupez", "Quindio"],
//         },
//         {
//           pregunta: "¿En que año se fundó la capital de colombia, Bogotá?",
//           ayuda: "Es el resultado de la operacion 2356-818",
//           respuesta: "1538",
//           distractores: ["1558", "1525", "1595"],
//         },
//         {
//           pregunta: "¿Es uno de los artistas mas importantes de colombia?",
//           ayuda: "Se le conoce principalmente por su obras en medellin",
//           respuesta: "Fernando Botero",
//           distractores: ["Antonio Jesús", "Fernando Maldonado", "Vicent Vangoht"],
//         },
//         {
//           pregunta: "¿Qué día se celebra el día de la independencia de Colombia?",
//           ayuda: "Se celebra a mediados del año cerca del mes 07",
//           respuesta: "20 de julio",
//           distractores: ["19 de abril", "18 de septiembre", "20 de junio"],
//         },
//         {
//           pregunta: "¿Cual es el pais más pequeño del mundo?",
//           ayuda: "Se ubica en europa, cerca del mar Mediterraneo",
//           respuesta: "Vaticano",
//           distractores: ["Afganistan", "Camerun", "Madagascar"],
//         },
//         {
//           pregunta: "¿Cuántos decimales tiene el número pi π?",
//           ayuda: "Se pueden contar indefinidamente",
//           respuesta: "Infinitos",
//           distractores: ["Docientos", "Veinte", "Finitos"],
//         },
//         {
//           pregunta: "¿Cual es el oceano mas grande y profundo del mundo?",
//           ayuda: "Este oceano tiene mayor distancia entre fronteras terrestres",
//           respuesta: "Pacifico",
//           distractores: ["Indico", "Glacial", "Atlantico"],
//         },
//         {
//           pregunta: "¿En que año se termino la segunda guerra mundial?",
//           ayuda: "Este conflicto termino a mediados del siglo XX mas o menos en 1940",
//           respuesta: "1945",
//           distractores: ["1935", "1947", "1939"],
//         },
//         {
//           pregunta: "¿Colombia posee costa sobre dos océanos ¿cuáles son?",
//           ayuda: "No hay mas costas ni oceandos en colombia que esos dos",
//           respuesta: "Pacífico y Atlántico.",
//           distractores: ["Caribe y Antártico.", "Atlántico y Índico.", "Pacífico y Caribe."],
//         },
//         {
//           pregunta: "¿Cuántas regiones conforman la geografía colombiana?",
//           ayuda: "Se Pueden contar con los dedos y alguno mas",
//           respuesta: "6",
//           distractores: ["7", "4", "5"],
//         },
//         {
//           pregunta: "¿Cuál es el país más grande del mundo?",
//           ayuda: "Esta cerca de lugares frios donde casi NO hay nada",
//           respuesta: "Rusia",
//           distractores: ["Estados unidos", "Artartida", "Atlantida"],
//         },
//         {
//           pregunta: "¿Cuántos elementos hay en la tabla periódica?",
//           ayuda: "Estan sobre los 100 elementos",
//           respuesta: "118",
//           distractores: ["96", "158", "146"],
//         },
//         {
//           pregunta: "¿Cuántas costillas tiene un humano promedio?",
//           ayuda: "Uno de sus numeros es un multiplo de 8",
//           respuesta: "22-24",
//           distractores: ["20-18", "16-14", "12-10"],
//         },
//         {
//           pregunta: "¿Cuáles de los siguientes NO hace parte de los colores primarios?",
//           ayuda: "Este esta formado por azul y amarillo",
//           respuesta: "Verde",
//           distractores: ["Rojo", "Amarillo", "Azul"],
//         },
//         {
//           pregunta: "¿Cuántos departamentos tiene Colombia?",
//           ayuda: "Es mucho mas de dos docenas es decir 24",
//           respuesta: "32",
//           distractores: ["38", "23", "34"],
//         },
//         {
//           pregunta: "¿Cuándo se escribió la última Constitución de Colombia?",
//           ayuda: "Fue hace mas de 25 años",
//           respuesta: "1991",
//           distractores: ["1995", "1987", "1983"],
//         },
//         {
//           pregunta: "¿En que año se dio el ultimo golpe de estado en Colombia?",
//           ayuda: "Sucedio casi 8 años despues que terminara la segunda guerra mundial, es decir antes de 1970",
//           respuesta: "1953",
//           distractores: ["1963", "1971", "1983"],
//         },
//         {
//           pregunta: "¿Cuántos premios Nobel han sido otorgados a colombianos?",
//           ayuda: "Se pueden contar son .......paz Y ......liter",
//           respuesta: "2",
//           distractores: ["3", "5", "4"],
//         },
//         {
//           pregunta: "¿Cuál es el río más largo del mundo?",
//           ayuda: "En colombia se encuentra presente en un 10% en el Sur del pais",
//           respuesta: "Rio amazonas",
//           distractores: ["Rio Magdalena", "Rio Himalaya", "Rio Nilo"],
//         },
//         {
//           pregunta: "¿Qué tipo de animal es la ballena?",
//           ayuda: "A pesar de vivir en el mar puede que se considere como otra categoria",
//           respuesta: "Mamifero",
//           distractores: ["Pez", "Reptil", "Anfibio"],
//         },
//         {
//           pregunta: "¿Cual de las siguientes NO hace parte de las 7 maravillas del mundo moderno?",
//           ayuda: "Hace parte de las 7 maravillas antiguas y esta presente en la actualidad en un desierto",
//           respuesta: "Piramide de Giza",
//           distractores: ["Coliseo de Roma", "Taj Mahal", "Muralla China"],
//         },
//         {
//           pregunta: "¿Qué planeta del sistema solar tiene más lunas?",
//           ayuda: "Es el segundo mas grande despues de Jupiter",
//           respuesta: "Saturno",
//           distractores: ["Jupiter", "Urano", "Mercurio"],
//         },
//         {
//           pregunta: "¿Qué país tiene forma de bota?",
//           ayuda: "Esta ubicado en el continente Europeo",
//           respuesta: "Italia",
//           distractores: ["Alemania", "Monogolia", "Taiwan"],
//         },
//         {
//           pregunta: "¿Quién fue el auténtico padre de la electricidad?",
//           ayuda: "Le limitaron hacer sus ideas, a pesar de ser un gran genio",
//           respuesta: "Nikola Tesla",
//           distractores: ["Tomas Edison", "William Greener", "Henry Leland"],
//         },
//         {
//           pregunta: "¿Cuántos días tiene un año bisiesto?",
//           ayuda: "Pasa cada 4 años, agregando un dia más",
//           respuesta: "366",
//           distractores: ["367", "365", "364"],
//         },
//         {
//           pregunta: "¿Cuál es la especie de serpiente más larga del mundo?",
//           ayuda: "NO siempre es la respuesta que pensamos, 'Anaconda'",
//           respuesta: "Pitón reticulada",
//           distractores: ["Anaconda", "Topo Israelí", "Víbora Arbórea"],
//         },
//         {
//           pregunta: "¿Cuál es el animal terrestre más rápido del mundo?",
//           ayuda: "Se pueden parecer sus nombres pero son animales distintos el guepardo y leopardo",
//           respuesta: "El guepardo.",
//           distractores: ["El jaguar", "El leopardo", "La hiena"],
//         },
//         {
//           pregunta: "¿Cuál es el mineral más duro del planeta?",
//           ayuda: "A simple vista parece fragil y hermoso",
//           respuesta: "El Diamante.",
//           distractores: ["El Tugsteno", "El Titanio", "El Vibranium"],
//         }
//       ];
//       //  alert(baseDePreguntas.length);
//     }else if(basenivelp==3){
//       baseDePreguntas = [
//         {
//           pregunta: "¿Cual fue el volcan que genero la tragedia en Armero?",
//           ayuda: "Se encuentra en las zonas mas elevadas de la cordillera en el departamento de Tolima",
//           respuesta: "Nevado del Ruiz",
//           distractores: ["Nevado del Pisba", "Nevado de Sumapaz", "Nevado de huila"],
//         },
//         {
//           pregunta: "¿Cuántos países reconocidos existen en todo el mundo?",
//           ayuda: "Sobrepasan los 193, y es menos de 200 paises",
//           respuesta: "195",
//           distractores: ["193", "206", "198"],
//         },
//         {
//           pregunta: "¿Cuántos huesos tiene el ser humano cuando es adulto?",
//           ayuda: "Al ser adulto los huesos se conforman hasta el punto de NO crecer mas por eso se encuntran sobre los 200",
//           respuesta: "206",
//           distractores: ["196", "198", "204"],
//         },
//         {
//           pregunta: "¿Cual de las siguientes NO hace parte de las válvulas del corazón humano?",
//           ayuda: "Tiene un nombre inventado que se parece al nombre de un hUESO",
//           respuesta: "Triueso",
//           distractores: ["Mitral", "Tricúspide", "Pulmonar"],
//         },
//         {
//           pregunta: "¿Cuáles de los siguientes NO hace parte de los colores de los anillos olímpicos?",
//           ayuda: "Es un color compuesto y el negro es descartado ya que es la ausencia del color",
//           respuesta: "Naranja",
//           distractores: ["Amarillo", "Rojo", "Negro"],
//         },
//         {
//           pregunta: "¿Cuántos parques naturales nacionales existen en Colombia?",
//           ayuda: "La otra parte son parques turisticos cerca del 41%",
//           respuesta: "59",
//           distractores: ["45", "74", "41"],
//         },
//         {
//           pregunta: "¿Qué posición ocupa Colombia a nivel mundial en cuanto a su superficie?",
//           ayuda: "Entramos en top 28 pero tampoco llegamos entre los 12 primeros",
//           respuesta: "Puesto 25",
//           distractores: ["Puesto 15", "Puesto 12", "Puesto 28"],
//         },
//         {
//           pregunta: "¿En qué año se proclama oficialmente la independencia de Colombia?",
//           ayuda: "Esta se declaro 10 años despues del siglo XVIII",
//           respuesta: "En 1810",
//           distractores: ["En 1710", "En 1910", "En 1610"],
//         },
//         {
//           pregunta: "¿Quién fue el presidente electo que gobernó más tiempo en Colombia?",
//           ayuda: "Su nombre tiene algunas letras de las ultimas del abecedareo por eso Alvaro y Andres NO son",
//           respuesta: "Rafael Nuñez ",
//           distractores: ["Alvaro Uribe", "Juan Manuel", "Andres Pastrana"],
//         },
//         {
//           pregunta: "¿Cuántos golpes de estado se han dado por el poder en Colombia?",
//           ayuda: "Es un multiplo de 2 esta ente 10 y 8",
//           respuesta: "10",
//           distractores: ["9", "8", "5"],
//         },
//         {
//           pregunta: "En Colombia NO se puede hablar de un traje típico pero si existe una prenda además del sombrero que es referente en todas las regiones del país ¿Cuál es?",
//           ayuda: "Son sinonimos el uno del otro por la similitud de la prenda y uso que tiene a nivel del pais",
//           respuesta: "Poncho o Ruana",
//           distractores: ["Apargatas o Ruana", "Poncho o bufanda", "Zanadlias o Ruana"],
//         },
//         {
//           pregunta: "Colombia tiene la ciudad con más rutas para ciclistas en todo latinoamérica con un total de 300 KM ¿Sabes cuál es?",
//           ayuda: "No estan en linea recta, se encuentra al lado de malla vial mas grande de colombia",
//           respuesta: "Bogota",
//           distractores: ["Medellin", "Tunja", "Leticia"],
//         },
//         {
//           pregunta: "¿Cuántas medallas olímpicas tiene Colombia?",
//           ayuda: "Con gran orgullo sobrepasamos las 27 medallas y tampoco tenemos mas de 50",
//           respuesta: "34",
//           distractores: ["42", "26", "52"],
//         },
//         {
//           pregunta: "¿Cómo se llama la energía contenida en el núcleo de los átomos?",
//           ayuda: "Con ella se produce presion para girar turbinas y generar energia electrica",
//           respuesta: "Nuclear",
//           distractores: ["Atomica", "Radioactiva", "Gamma"],
//         },
//         {
//           pregunta: "¿Cual es la parte mas externa del ojo humano?",
//           ayuda: "Es la parte trasnparente que proteje el ojo en si",
//           respuesta: "La cornea",
//           distractores: ["La pupila", "El iris", "La retina"],
//         },
//         {
//           pregunta: "¿En promedio cuantos habitantes tiene colombia?",
//           ayuda: "Esta entre 40 millones y a 52 millones",
//           respuesta: "48-52 millones",
//           distractores: ["35-38 millones", "58-60 millones", "40-44 millones"],
//         },
//         {
//           pregunta: "¿Cual es la flor nacional de colombia?",
//           ayuda: "Es representativa en la mayoria de lugares y en festivales a nivel nacional",
//           respuesta: "Orquidea",
//           distractores: ["Girasol", "Tulipan", "Dalia"],
//         },
//         {
//           pregunta: "¿Cual de las siguientes atletas gano la primera medalla de oro en colombia?",
//           ayuda: "Que bello que todos estos nombres empiecen por M pero la correcta tiene en su apellido una de las ultimas letras del abecedareo",
//           respuesta: "Maria Urruita",
//           distractores: ["Maria Calle", "Mabel Mosquera", "Mariana Pajon"],
//         },
//         {
//           pregunta: "¿Que puesto ocupa colombia en cuanto a la produccion de cafe?",
//           ayuda: "Estamos entre los mejores, NO en la cuspide, pero si entramos entre los tres mejores",
//           respuesta: "Tercero",
//           distractores: ["Segundo", "Quinto", "Primero"],
//         },
//         {
//           pregunta: "Colombia esta entre los paises mas biodiversos de mundo, ¿sabes en que puesto esta?",
//           ayuda: "No siempre para ser el mejor hay que estar en la cima.",
//           respuesta: "Segundo",
//           distractores: ["Noveno", "Tercero", "Septimo"],
//         },
//         {
//           pregunta: "¿Cual es el arbol nacional de Colombia?",
//           ayuda: "No hay ningun arbol mas alto que este en todo colombia.",
//           respuesta: "Palma de cera",
//           distractores: ["Guayacan", "Encenillo", "Eucalipto"],
//         },
//         {
//           pregunta: "¿Que representa el color amarillo de la bandera de Colombia?",
//           ayuda: "Hace parte de la fortuna de nuestro pais la cual podemos pisar y recorrer",
//           respuesta: "La riqueza del suelo",
//           distractores: ["El amanecer y el sol", "La republica nacional", "El porvenir y la fe"],
//         },
//         {
//           pregunta: "¿Quién le dio los colores a Amarillo, Azul y Rojo a la bandera de Colombia?",
//           ayuda: "Estos colores se dieron en el año 1807 por el señor Francisco .........",
//           respuesta: "Francisco Miranda",
//           distractores: ["Antonio Nariño", "Francisco Diaz", "Domingo Caycedo"],
//         },
//         {
//           pregunta: "¿Cual es el lago mas grande de Colombia?",
//           ayuda: "Su nombre es el de menos caracteres que encontraras entre las respuestas",
//           respuesta: "Lago tota",
//           distractores: ["Lago del cisne", "Lago Calima", "Lago Tarapoto"],
//         },
//         {
//           pregunta: "¿Cual ave se encuentra representada en el escudo de Colombia?",
//           ayuda: "Es de la raza de aves mas grande que existe",
//           respuesta: "Condor andino",
//           distractores: ["Colibri", "Buho real", "Aguila arpia"],
//         },
//         {
//           pregunta: "¿Cual tipo de energia renovable es la mas utilizada en el pais?",
//           ayuda: "Con ella se genera gran presion, para girar generadores",
//           respuesta: "Hidraulica",
//           distractores: ["Termica", "Solar", "Geotermica"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes es el mineral con mayor produccion en Colombia?",
//           ayuda: "Hay telenovelas y lugares reconocidos referentes a este mineral",
//           respuesta: "Esmeralda",
//           distractores: ["Zafiro", "Rubi", "Oro"],
//         },
//         {
//           pregunta: "¿Como se llama la fobia a la sangre?",
//           ayuda: "Su nombre tiene relacion cuando sufrimos un golpe severo dejando traumas o ......",
//           respuesta: "Hematofobia",
//           distractores: ["Dentofobia", "Hemotofobia", "Sanifobia"],
//         },
//         {
//           pregunta: "¿En que año se adopto la actual bandera de colombia?",
//           ayuda: "Esto ocurrio en el siglo XIX antes de 1881",
//           respuesta: "1861",
//           distractores: ["1904", "1881", "1837"],
//         },
//         {
//           pregunta:"¿Cual es le departamento mas pequeño de colombia?",
//           ayuda: "Este se encuentra en ubicado en el mar",
//           respuesta: "San andres",
//           distractores: ["Quindio", "Risaralda", "Atlantico"],
//         },
//         {
//           pregunta:"¿Cual el el hueso mas largo del cuerpo humano?",
//           ayuda: "Se podria decir que hace parte del tren inferior del cuerpo humano",
//           respuesta: "El femur",
//           distractores: ["El perone", "La tibia", "El radio"],
//         },
//         {
//           pregunta:"¿Como se llama la parte del cuerpo que une dos o mas huesos?",
//           ayuda: "Sin ellas el cuerpo NO tendria tanto rango de movimiento",
//           respuesta: "Articulaciones",
//           distractores: ["Cartilagos", "Tendones", "Intercepciones"],
//         },
//         {
//           pregunta:"¿En cual hemisferio se encuentra la mayor parte del territorio colombiano?",
//           ayuda: "Solo existen dos hemisferios",
//           respuesta: "Norte",
//           distractores: ["Sur", "Este", "Oeste"],
//         },
//         {
//           pregunta:"¿Cual es el departamento mas poblado de colombia?",
//           ayuda: "Tambien gana en el tamaño de caracteres como se muestra escrita en las repúestas",
//           respuesta: "Cundinamarca",
//           distractores: ["Bogota", "Antioquia", "Casanare"],
//         },
//         {
//           pregunta:"¿Cual de las siguientes NO hace parte de las regiones de colombia?",
//           ayuda: "Hay un intruso, buscalo esta mal escrito porque deberia ser 'Caribe'",
//           respuesta: "Region Atlantica",
//           distractores: ["Region orinoquia", "Region insular", "Region Pacifica"],
//         },
//         {
//           pregunta:"¿Con cual rio comparte fronteras Colombia con Ecuador y Venezuela?",
//           ayuda: "Este recorre gran parte de la region ......ia",
//           respuesta: "Rio Orinoco",
//           distractores: ["Rio Cauca", "Rio Magdalena", "Rio Sinu"],
//         },
//         {
//           pregunta:"¿Cual es el lema nacional de Colombia?",
//           ayuda: "Se encuentra arriba del escudo de colombia",
//           respuesta: "Liberta y orden",
//           distractores: ["Orden y justicia", "Lealtad y compromiso", "Sociedad y orden"],
//         },
//         {
//           pregunta:"¿Cual es la ciudad mas antigua de Colombia?",
//           ayuda: "No esta al centro del pais, se ubica mas a los costados",
//           respuesta: "Santa marta",
//           distractores: ["Bogota", "Barranquilla", "Medellin"],
//         },
//         {
//           pregunta:"¿Quien escribio la letra del himno de Colombia?",
//           ayuda: "Fue muy importante, NO solo por escribir el himno nacional de colombia si no por dirigir el pais durante un tiempo",
//           respuesta: "Rafael Nuñez",
//           distractores: ["Eliseo Payan", "Carlos Mallarino", "Antonio Roldan"],
//         },
//         {
//           pregunta:"¿Cual de las siguientes islas se encuentran ubicadas en el pacifico?",
//           ayuda: "Estas islas son un misterio biodiverso ubicadas hacia el occidente",
//           respuesta: "Gorgona y Malpelo",
//           distractores: ["San andres y Malpelo", "Cabruna y Gogona", "Cerranilla y Ceysen"],
//         },
//         {
//           pregunta:"¿En que ciudad esta la biblioteca mas vistada de colombia y el mundo?",
//           ayuda: "No necesitabas esta ayuda, por lo grande que es sabemos que es la ciudad de Bogota",
//           respuesta: "Bogota",
//           distractores: ["Medellin", "Tunja", "Tolima"],
//         },
//         {
//           pregunta: "¿Cual de las siguientes NO hace parte de las 7 maravillas del mundo moderno?",
//           ayuda: "Hace parte de las 7 maravillas antiguas y esta presente en la actualidad en un desierto",
//           respuesta: "Piramide de Giza",
//           distractores: ["Coliseo de Roma", "Taj Mahal", "Muralla China"],
//         },
//         {
//           pregunta: "¿De que lengua antigua proviene el español?",
//           ayuda: "Se origino en uno de los mas grandes imperios de Europa en Grecia",
//           respuesta: "Latin",
//           distractores: ["Romanes", "Gallego", "Castilla"],
//         },
//         {
//           pregunta: "¿Quien fue el cientifico mas famoso en formular una teoria de la evolucion?",
//           ayuda: "Es el principal exponente de esta rama de la ciencia",
//           respuesta: "Charles Darwin",
//           distractores: ["Alfred Russel", "Baptiste Lamarck", "Richard Dawkins"],
//         },
//         {
//           pregunta: "¿Cual ha sido la obra literaria mas leida y traducida hasta hoy?",
//           ayuda: "Se encuentra la mayoria de casa",
//           respuesta: "La biblia",
//           distractores: ["Orejas de mariposa", "El pequeño Nicolas", "La principito"],
//         },
//         {
//           pregunta: "¿Quien fue el autor de la frase 'Solo se que no se nada'?",
//           ayuda: "Es uno de los padres de la filosofia",
//           respuesta: "Socrates",
//           distractores: ["Platon", "Euliseo", "Frida kahlo"],
//         },
//         {
//           pregunta: "¿Como se llama el miedo a las alturas?",
//           ayuda: "Su nombre tiene que ver con cosas increibles que hacen los deportistas como 'ACRObasias'",
//           respuesta: "Acrofobia",
//           distractores: ["Alturfobia", "Altruismo", "Confifobia"],
//         },
//         {
//           pregunta: "¿Que diciplina medica estudia la mente?",
//           ayuda: "Te ayudare quitando dos opciones, la correcta esta en las que inician por 'Psi' Psicoterapia y Psicologia NO es",
//           respuesta: "Psiquiatria",
//           distractores: ["Psicologia", "Pedagogia", "Psicoterapia"],
//         },
//         {
//           pregunta: "¿Como se llama el deporte en el que se monta a caballo?",
//           ayuda: "Su nombre suena muy parecido a la palabra equidad",
//           respuesta: "Equitación",
//           distractores: ["Esgrima", "Equinacion", "Equitalismo"],
//         },
//         {
//           pregunta: "¿Cual es el principal compuesto químico del planeta tierra?",
//           ayuda: "Es muy abundante a cualquier lugar que viajemos",
//           respuesta: "El agua",
//           distractores: ["El diamante", "El carbono", "El aire"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes NO hace parte de los reinos de los seres vivos?",
//           ayuda: "Esta mal escrito y suena como la palabra 'Funny'",
//           respuesta: "Funngi",
//           distractores: ["Vegetal", "Monera", "Protista"],
//         },
//         {
//           pregunta: "¿Cual de las siguientes NO hace parte de un motor?",
//           ayuda: "Es parte de su nombre original pero le falta las letras 'dor'",
//           respuesta: "Alterna",
//           distractores: ["Cigueñal", "Culata", "Valvulas"],
//         },
//         {
//           pregunta: "¿A cual de las siguientes respuestas aplica una persona delgada con poca grasa?",
//           ayuda: "Tiene que ver con tipos de cuerpos y NO con enfermedades y la respuesta puede empezar por la letra 'E'",
//           respuesta: "Ectomorfo",
//           distractores: ["Anorexia", "Mesomorfo", "Endomorfo"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes tipos de triángulos es el que tiene sus tres lados iguales?",
//           ayuda: "No pueden ser rectangulos ni obtusos porque sus lados NO son iguales",
//           respuesta: "Equilatero",
//           distractores: ["Obtuso", "Rectángulos", "Isósceles"],
//         },
//         {
//           pregunta: "¿Cual es el sinonimo de la palabra átomo? ",
//           ayuda: "Al ver tan tan lejos crea la ilucion de desaparecer",
//           respuesta: "Invisible",
//           distractores: ["inamovible", "Inapreciable", "Percivible"],
//         },
//         {
//           pregunta: "¿Con qué letras se representa el oro en la tabla periódica?",
//           ayuda: "Las respuestas que contienen la letra 'O' NO son correctas",
//           respuesta: "Au",
//           distractores: ["Or", "Ur", "Po"],
//         },
//         {
//           pregunta: "¿Qué compuesto es el más abundante en la corteza terrestre?",
//           ayuda: "El agua esta de segundo lugar y el hidrogeno NO es compuesto",
//           respuesta: "El oxigeno",
//           distractores: ["El agua", "El hidrogeno", "El carbono"],
//         },
//         {
//           pregunta: "¿Cuál es el elemento químico más pesado que se encuentra en la naturaleza?",
//           ayuda: "Puede ser demasiado perjudicial para la vida de los seres vivos",
//           respuesta: "El uranio",
//           distractores: ["El plomo", "El paladium", "El mercurio"],
//         },
//         {
//           pregunta: "¿Cuántos dientes en promedio tiene un humano adulto ? ",
//           ayuda: "Es uno de sus numeros es un multiplo de 16",
//           respuesta: "32 a 28",
//           distractores: ["26 a 24", "20 a 16", "24 a 20 "],
//         },
//         {
//           pregunta: "¿Qué animal es conocido por su capacidad de volar hacia atrás?",
//           ayuda: "Su tiempo de vida es muy corto para las veces que han movido sus alas",
//           respuesta: "El Colibri",
//           distractores: ["El alcon", "El Aguila", "Los cuervos"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes NO hace parte de los movimientos que realiza la tierra?",
//           ayuda: "Trasender hace parte mas a lo espiritual que a la tierra",
//           respuesta: "La trasención",
//           distractores: ["Rotación", "La traslación", "la nutación"],
//         },
//         {
//           pregunta: "¿En que año fue inventada la primera vacuna?",
//           ayuda: "Esta vacuna se creo en contra la viruela por alla a muy al final del siglo XVIII",
//           respuesta: "1796",
//           distractores: ["1752", "1812", "1778"],
//         },
//         {
//           pregunta: "¿Cuál es el río más ancho del mundo?",
//           ayuda: "La respuesta esta fuera de lo convencional a los rios mas conocidos",
//           respuesta: "Río de la Plata",
//           distractores: ["Río del Amazonas", "Río Nilo", "Río Magdalena"],
//         },
//         {
//           pregunta: "¿Cuál es el metal que mayor conductividad eléctrica tiene?",
//           ayuda: "Hace parte de unos de los minerales mas usados en la joyeria",
//           respuesta: "La plata",
//           distractores: ["El cobre", "El cobalto", "El oro"],
//         },
//         {
//           pregunta: "¿Cuál es el segundo idioma mas hablado del mundo?",
//           ayuda: "El ingles es el primero y el segundo es muy hablado en la parte del Oriente.",
//           respuesta: "El madarin",
//           distractores: ["El ingles", "El Ruso", "El Hindi"],
//         },
//         {
//           pregunta: "¿De las siguientes respuestas cual es el el organo mas grande del cuerpo humano?",
//           ayuda: "Es el organo mas externo que posee nuestro cuerpo",
//           respuesta: "La piel",
//           distractores: ["El cerebro", "El higado", "Los nervios"],
//         },
//         {
//           pregunta: "¿Quien fue Albert Eisntein?",
//           ayuda: "Es conocido por la teoria de la relatividad universal",
//           respuesta: "Fisico",
//           distractores: ["Compositor", "Escritor", "Escultor"],
//         },
//         {
//           pregunta: "¿Aproximadamente cuantas ciudades alberga colombia?",
//           ayuda: "La respuesta correcta esta arriba de las 1000 ciudades",
//           respuesta: "Mas o menos 1118",
//           distractores: ["Mas o menos 998", "Mas o menos 888", "Mas o menos 1200"],
//         },
//         {
//           pregunta: "¿Cual es el baile tipico de colombia?",
//           ayuda: "El nombre de este baile tambien hace parte de un genero musical muy bonito",
//           respuesta: "El vallenato",
//           distractores: ["La cumbia", "El porro", "El mapale"],
//         },
//         {
//           pregunta: "¿La obra literaria 'Cien años de soledad' fue escrita por?",
//           ayuda: "Es una de las personas que gano un premio nobel a literatura",
//           respuesta: "Gabriel Garcia",
//           distractores: ["Rafael Pombo", "Mario Mendoza", "Santiago Gamboa"],
//         },
//         {
//           pregunta: "¿Cuál es el único mamífero que puede volar?",
//           ayuda: "Su nombre tiene que ver con el nombre de una pelicula 'el caballero de la noche'",
//           respuesta: "El murciélago",
//           distractores: ["El pato", "La ardilla", "El ganzo"],
//         },
//         {
//           pregunta: "¿Cuántos años equivale un lustro?",
//           ayuda: "Es la mitad de una decada",
//           respuesta: "5 años",
//           distractores: ["50 años", "100 años", "25 años"],
//         },
//         {
//           pregunta: "¿Cuál es el deporte nacional colombiano?",
//           ayuda: "Fue inventado aqui en nuestra tierra",
//           respuesta: "El tejo",
//           distractores: ["El futbol", "El ciclismo", "El ajedrez"],
//         },
//         {
//           pregunta: "¿En que año se dio la guerra civil mas grande de colombia?",
//           ayuda: "La guerra Magna sucedio por alla en el año 185.....",
//           respuesta: "1860",
//           distractores: ["1896", "1902", "1865"],
//         },
//         {
//           pregunta: "¿En que ciudad se celebra la Feria de las Flores?",
//           ayuda: "Es muy representativo de esta ciudad que se encuentra en antioquia",
//           respuesta: "Medellin",
//           distractores: ["Manizales", "Magdalena", "Cartagena"],
//         },
//         {
//           pregunta: "¿Como se le conoce a la composición poética amorosa compuesta o cantada?",
//           ayuda: "En colombia se realizan concursos sobre este arte que convina varios elementos de las repuestas",
//           respuesta: "La trova",
//           distractores: ["La rima", "La poesia", "La opera"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes elementos NO hacen parte de los elementos que conforman una canción?",
//           ayuda: "La respuesta correcta se encurntra fuera de la melodia y el ritmo",
//           respuesta: "El fondo",
//           distractores: ["La melodia", "La armonia", "El ritmo"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes es el nombre un cantante de salsa?",
//           ayuda: "Es el compositor de la cancion 'Te va a doler'",
//           respuesta: "Maelo Ruíz",
//           distractores: ["Jorge Celedon", "Felipe Pelaez", "Jorge Oñate"],
//         },
//         {
//           pregunta: "¿Cual ritmo musical y baile tradicional de Colombia que expresa claramente el mestizaje?",
//           ayuda: "Es muy representativa a nivel nacional en especial en la costa caribe donde se origino y es La ......",
//           respuesta: "La cumbia",
//           distractores: ["El porro", "La puya", "El merengue"],
//         },
//         {
//           pregunta: "¿Colombia es el segundo exportador de flores en el mundo después de?",
//           ayuda: "Brasil es un pais diverso, pero NO exportan muchas flores y Kenia tampoco",
//           respuesta: "Holanda",
//           distractores: ["Japon", "Kenia", "Brasil"],
//         },
//         {
//           pregunta: "¿La ausencia de estaciones en Colombia se debe a?",
//           ayuda: "Estamos sobre la linea centra de nuestro planeta la linea ecuatorial",
//           respuesta: "Los tropicos",
//           distractores: ["Los vientos", "La cordillera", "La zona horaria"],
//         },
//         {
//           pregunta: "¿Cali, la 3ª ciudad más grande de Colombia, esconsiderada  la capital mundial de..?",
//           ayuda: "No hay otro lugar en colombia que NO se hable mas de La ..... que en Cali",
//           respuesta: "La salsa",
//           distractores: ["La cumbia", "Las corridas", "La caña de azucar"],
//         },
//         {
//           pregunta: "¿Cual de los siguientes metales fue el primero utilizado por el hombre?",
//           ayuda: "Este se encuentra presenta en las conexiones electricas de las casas",
//           respuesta: "El cobre",
//           distractores: ["La roca", "El hierro", "La plata"],
//         },
//         {
//           pregunta: "¿Cuál es el libro más vendido en el mundo después de la Biblia?",
//           ayuda: "Es una obra de Miguel de Cervantes",
//           respuesta: "Quijote de la mancha",
//           distractores: ["La Odisea", "El Principito", "Señor de los Anillos"],
//         },
//         {
//           pregunta: "¿Qué sustancia es absorbida por las plantas y expirada por los animales?",
//           ayuda: "Las plantas se encargan principalmente de procesarlo y convertirlo en oxigeno",
//           respuesta: "Dióxido de carbono",
//           distractores: ["Oxígeno", "Dióxido de hierro", "Monoxido"],
//         },
//         {
//           pregunta: "¿Cuál es la etnia indígena más numerosa de Colombia?",
//           ayuda: "Esta poblacion principalmente se encuentra alojada en el departamento de la Guajira, no es ni Zenu, ni la Embera",
//           respuesta: "Wayuu",
//           distractores: ["Emberá", "Sikuani", "Zenu"],
//         },
//         {
//           pregunta: "¿Qué órgano del cuerpo humano consume más energía?",
//           ayuda: "Es el organo que nos permite controlar y procesar todo lo que nos rodea",
//           respuesta: "El cerebro",
//           distractores: ["El Higado", "El corazon", "El estomago"],
//         },
//         {
//           pregunta: "¿Qué país tiene más islas en el mundo?",
//           ayuda: "Este pais tiene más de 220.000 islas y esta ubicado en la parte superior de Europa",
//           respuesta: "Suecia",
//           distractores: ["Suiza", "Taiwan", "China"],
//         },
//         {
//           pregunta: "¿Cuál es la temperatura más baja que se puede registrar en el universo?",
//           ayuda: "El limite es -273,14°C para ser exactos",
//           respuesta: "-273°C",
//           distractores: ["-100°C", "-243°C", "-300°C"],
//         },
//         {
//           pregunta: "¿Cuál es el continente más seco de la Tierra?",
//           ayuda: "Aparte es un lugar muy frio y arido que no precisamente es calido",
//           respuesta: "Antartida",
//           distractores: ["Africa", "Oceania", "America"],
//         },
//         {
//           pregunta: "¿Cuál de los siguientes es el ave mas rapido del mundo?",
//           ayuda: "Todos esto aves son demasiado rapidos entre los mas rapidos estan el Halcon y el Aguila",
//           respuesta: "Halcón peregrino",
//           distractores: ["Colibri de ana", "Condor Andino", "Águila vocinglera"],
//         },
//         {
//           pregunta: "¿Cuál es la videoconsola más vendida en la historia?",
//           ayuda: "Es la seguanda generacion de la consola hecha por Sony",
//           respuesta: "PlayStation 2",
//           distractores: ["Game Boy", "Xbox", "Game Cube"],
//         },
//         {
//           pregunta: "¿Cuál es la galaxia más cercana a la Vía Láctea?",
//           ayuda: "La via lactea tiene a la mas cercana teniendo esta como nombre And.....",
//           respuesta: "Andromeda",
//           distractores: ["Leo I", "Circinus", " Bootes"],
//         },
//         {
//           pregunta: "¿Cuál de las siguientes NO hace parte de las 7 maravillas del mundo antiguo?",
//           ayuda: "El Taj Mahal en india se Construyo en la epoca moderna",
//           respuesta: "Taj Mahal",
//           distractores: ["Pirámide de Giza", "El Coloso de Rodas", "Estatua de Zeus"],
//         },
//         {
//           pregunta: "¿Cuántos colores se pueden apreciar al ver un arcoíris?",
//           ayuda: "La respuesta correcta es un numero impar y el numero 11 no cuenta",
//           respuesta: "7",
//           distractores: ["9", "6", "11"],
//         },
//         {
//           pregunta: "¿Cuál es la bebida más consumida en el mundo después del agua?",
//           ayuda: "La cerveza cuenta como bebida alcholica por esto no es la correcta  y el agua ocupa el primer puesto",
//           respuesta: "El te",
//           distractores: ["La cerveza", "El cafe", "El agua"],
//         },
//         {
//           pregunta: "¿Cuál es el continente más grande del planeta?",
//           ayuda: "Este continete cuenta con 48 paises y esta ubicado hacia el oriente",
//           respuesta: "Asia",
//           distractores: ["Europa", "Oceania", "Antartida"],
//         },
//         {
//           pregunta: "¿En qué fecha se celebra el día Mundial del Medio Ambiente?",
//           ayuda: "Se celebra a nivel mundial exactamente a la mitad del año",
//           respuesta: "El 5 de junio",
//           distractores: ["El 9 de marzo", "El 7 de agosto", "12 de septiembre"],
//         },
//         {
//           pregunta: "¿En que pais se encuentra el edificio mas alto del mundo?",
//           ayuda: "Se ubica en el continente de Asia, formado por los 'Emiratos ...... unidos' ",
//           respuesta: "Emiratos Árabes ",
//           distractores: ["Dubai", "Arabia Sauidta", "Estados Unidos"],
//         },
//         {
//           pregunta: "¿A cuanto equivale un bienio?",
//           ayuda: "Es 5 parte de 10 años",
//           respuesta: "2 Años",
//           distractores: ["10 Años", "25 años", "50 años"],
//         }

//       ];
//       // alert(baseDePreguntas.length);
//     }
// }