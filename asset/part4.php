        <link rel="stylesheet" href="../css/tabla.css">
        <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/puntaje.js"></script>
        
<section class="bodyb2 bodyb"></section>
    <header>
    <div class="menuc">
        <div class="logoh">
            <a href="../index.php">
                <img src="../img/logo_kids.png" alt="Logo juego de preguntas">   
            </a> 
        </div>
            <h3>Bienvenido:<br><?php echo $nombre ?></h3>
                <div class="menuh">
                    <a href="home.php" title="<-- Volver">
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

        <?php
                require_once('../model/conexion.php');
                include "cpunt.php";
            ?>
            <div id="example">
                <div>
                <form action="#" method="POST" enctype="multipart/form-data" class="formpu">
                        <a href="#" class="dirbtt"  id="level3" title="Presiona para ver la Puntuacion nivel facil">
                            <button type="submit" class="btnp bti" id="constab" name="constab" value="0" ><i class="fa-duotone fa-flag"></i>&nbsp;Puntaje Niños</button>
                        </a>
                        <a href="#" class="dirbtt"  id="level3" title="Presiona para ver la Puntuacion nivel medio">
                            <button type="submit" class="btnp" id="constab" name="constab" value="2" ><i class="fa-duotone fa-chess-king"></i>&nbsp;Puntaje medio</button>
                        </a>
                        <a href="#" class="dirbtt"  id="level3" title="Presiona para ver la Puntuacion nivel dificil">
                            <button type="submit" class="btnp btf" id="constab" name="constab" value="3" ><i class="fa-duotone fa-crown"></i>&nbsp;Puntaje dificil</button>
                        </a>
                    </form>
                </div>
                <div class="buscarDatos">
                        <i class="fa-duotone fa-magnifying-glass"></i>
                </div>
                <table id="tabladatos" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th id="primera_esq">N°</th>
                            <th >Participante</th>
                            <th>Puntaje</th>
                            <th id="segunda_esq">Nivel</th>
                        </tr>
                    </thead>
                        <tbody class="fonta">
                        <?php
                        if($datAll){
                            $num=1;
                            foreach($datAll AS $dtp){
                                if($dtp['punt_nom']!="3ms3rch14"){
                        ?>
                        <tr>
                            <td>
                                <?=$num++;?>
                            </td>
                            <td>
                                Nombre: <?=$dtp['punt_nom'];?><br>
                                Total ayudas usadas: <?=$dtp['punt_ayu'];?>
                            </td>
                            <td style="text-align: center;">
                                <?=$dtp['punt_tot'];?>
                            </td>
                            <td style="text-align: center;">
                                <?php if($dtp['punt_lev']==0){
                                    echo "Niños";
                                }else if($dtp['punt_lev']==1){
                                    echo "Facil";
                                }else if($dtp['punt_lev']==2){
                                    echo "Medio";
                                }else if($dtp['punt_lev']==3){
                                    echo "Dificil";
                                }
                                ?>
                                
                            </td>
                        <?php
                            }}
                        }
                        ?>
                        </tr>
                        </tbody>
                </table>
                <br>
        </section>
