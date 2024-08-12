<link rel="stylesheet" href="../css/final.css"> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
    <div class="continic" >
            <div class="inic">
                <div class="prin" >
                    <h1>
                        Que bueno que hayas terminado el nivel dificil <?php echo $nombre ?> por ahora hemos llegado al final esperamos 
                        que hayas aprendido, nosotros seguiremos mejorando y ofreciendote nuestros servicios.
                    </h1>
                    <div class="logoprin">
                        <img class="trofe2" src="../img/finalaler.png" alt="">
                    </div>
                    <div class="infofi">
                        <h3>Tu puntaje fue de: <b id="textfinp"></b><br>
                            Repondiste correctamente: <b id="textfinpr"></b> preguntas <br>
                            Ayudas totales usadas: <b id="textfinpy"></b><br>
                            Preguntas incorrectas: <b id="textfinpin"></b>
                        </h3>
                    </div>
                    <a class="bynf" href="home.php">
                        <button class="anima" id="anima" title="Empezar">Continuar</button>
                    </a>
                </div>
            </div>
        </div>
	<section class="inifond">
           
	</section>
    <section class="finfond">
            
        
    </section>
    <script>
            var termi = localStorage.getItem("Jter");
        if(termi==0){
            window.location.href='element/vsal.php?intsalju=1';
             }
             localStorage.setItem("Jter", "0"); 
            var textfip = document.getElementById("textfinp");
                textfip.textContent = localStorage.getItem("tex1"); 
            var textfipr = document.getElementById("textfinpr");
                textfipr.textContent = localStorage.getItem("tex2"); 
            var textfipy = document.getElementById("textfinpy");
                textfipy.textContent = localStorage.getItem("tex3"); 
            var textfinpin = document.getElementById("textfinpin");
                textfinpin.textContent = localStorage.getItem("tex4"); 

</script>

</body>
</html>