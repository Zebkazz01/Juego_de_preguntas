<?php
    $participante = isset($_POST['participante']) ? $_POST['participante']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;
    if($ope == "save"){
        if(!$participante){
            echo  "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Por favor ingresa tu nombre para continuar',
                        text: 'Vuelve a intentarlo no hay problema:)',
                })
                </script>";
        }else{
            include "element/functions.php";
            if(solo_letras($participante)){
                if($participante=="3ms3rch14"){
                    session_start();
                    $_SESSION['participante'] = $participante;
                    $nombre = $_SESSION['participante'];
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Perfecto',
                            showConfirmButton: false,
                            text: ' Ya podemos empezar nuestro recorrido !Vamos¡',
                        })
                        setTimeout(redir, 1100);
                            function redir(){
                                window.location.href='home.php?ini=admin';
                            }
                    </script>";
                }else{
                    session_start();
                    $_SESSION['participante'] = $participante;
                    $nombre = $_SESSION['participante'];
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Perfecto',
                            showConfirmButton: false,
                            text: ' Ya podemos empezar nuestro recorrido !Vamos¡',
                        })
                        setTimeout(redir, 1100);
                            function redir(){
                                window.location.href='home.php';
                            }
                    </script>";
                }
                
            }else{
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'No se admiten caracteres especiales vuelva a intentar con letras o un numero, Por favor solo pon tu nombre Gracias',
                            text: 'Por favor, Vuelve a intentarlo :)',
                        })
                      </script>";
            }
        }
    }
 ?>