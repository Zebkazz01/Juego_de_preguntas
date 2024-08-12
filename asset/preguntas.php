<?php
    require_once('../model/conexion.php');
    include "cpreg.php";
?>

<link rel="stylesheet" href="../css/tabla.css">
        <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/puntaje1.js"></script>
        
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
            <button class="mosedit" id="mosedit" onclick="moste(1);">Agregar</button>
            <button class="mosedit" id="mosedit2" onclick="moste(2);">Ocultar</button>
            <script>
                    function moste(num){
                        if(num==1){
                            document.getElementById("editpreg").style.top="0px"; 
                            document.getElementById("mosedit2").style.display="flex"; 
                            document.getElementById("mosedit").style.display="none"; 
                            document.getElementById("editpreg").style.transition="All 500ms"; 
                        }else if(num==2){
                            document.getElementById("editpreg").style.top="-700px"; 
                            document.getElementById("mosedit2").style.display="none"; 
                            document.getElementById("mosedit").style.display="flex"; 
                            document.getElementById("editpreg").style.transition="All 500ms"; 
                        }
                    }
                
            </script>
            <div class="editpreg" id="editpreg">
            <a href="" type="submit"><button class="cancelfor mosedit">Cancelar</button></a>
                <form action="" method="POST">
                    <h1>Administar Preguntas</h1>
                    <div class="editpregpa">
                        
                        <input type="hidden" id="preg_id" name="preg_id" value="<?= isset($vali) ? $vali[0]['preg_id'] : '';?>">
                        <?php 
                            if($ope=="edit"){
                                echo '<script>setTimeout(mostmenu, 300);
                                    function mostmenu(){
                                        moste(1); 
                                    }
                                    </script>';}
                        ?>
                        <div class="ediinput">
                            <label for="preg_text">Pregunta</label><br>
                            <textarea name="preg_text" id="preg_text" cols="30" rows="2" type="text" tgex id="preg_text" name="preg_text" required><?= isset($vali) ? $vali[0]['preg_text'] : '';?></textarea>
                        </div>    
                        <div class="ediinput">
                            <label for="preg_ayu">Ayuda</label><br>
                            <textarea name="preg_ayu" id="preg_ayu" cols="30" rows="2" type="text" tgex id="preg_ayu" name="preg_ayu" required><?= isset($vali) ? $vali[0]['preg_ayu'] : '';?></textarea>
                        </div>
                        <div class="ediinput">
                            <label for="preg_resp">Repuesta</label><br>
                            <textarea cols="30" rows="2" type="text" name="preg_resp" id="preg_resp"><?= isset($vali) ? $vali[0]['preg_resp'] : '';?></textarea> 
                        </div>
                        <div class="ediinput">
                            <label for="preg_dist">Distractores</label><br>
                            <textarea cols="30" rows="2" type="text" name="preg_dist" id="preg_dist"><?= isset($vali) ? $vali[0]['preg_dist'] : '';?></textarea> 
                        </div>
                        <div class="ediinput">
                            <label for="preg_level">Nivel</label><br>
                            <input type="text" name="preg_level" id="preg_level" value="<?= isset($vali) ? $vali[0]['preg_level'] : '';?>">
                        </div>
                        <div class="ediinput">
                            <label for="preg_act">Activo</label><br>
                            <select name="preg_act" id="preg_act">
                                <option value="1" <?php if ($vali && $vali[0]['preg_act'] == 1)  echo 'selected'?>>Activo</option>
                                <option value="2" <?php if ($vali && $vali[0]['preg_act'] == 2)  echo 'selected'?>>Desactivo</option>
                            </select>
                        </div>
                        <div class="ediinput">
                            <input type="hidden" value="save" name="ope" />
                            <?php 
                            if(isset($vali)){
                                ?>
                                <button  class="guardarfor mosedit" type="submit">Actualizar</button>
                            <?php }else{ ?>
                                <button  class="guardarfor mosedit" type="submit">&nbsp;Guardar&nbsp;&nbsp;</button>
                            <?php } ?>
                        </div>
                    </div>
                </form> 
            </div>

            <div id="example">
                <div>
                </div>
                <div class="buscarDatos">
                        <i class="fa-duotone fa-magnifying-glass"></i>
                </div>
                <table id="tabladatos" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th id="primera_esq">N°</th>
                            <th >Pregunta</th>
                            <th>Opciones</th>
                            <th id="segunda_esq">Nivel</th>
                        </tr>
                    </thead>
                        <tbody class="fonta">
                        <?php
                        if($datAll){
                            foreach($datAll AS $dtp){
                        ?>
                        <tr>
                            <td>
                                <?=$dtp['preg_id'];?>
                            </td>
                            <td>
                                Pregunta: <small><?=$dtp['preg_text'];?></small><br>
                                Ayuda: <small><?=$dtp['preg_ayu'];?></small>
                            </td>
                            <td>
                                Respuesta: <small><?=$dtp['preg_resp'];?></small><br>
                                Distractores: <small><?=$dtp['preg_dist'];?></small>
                            </td>
                            <td>
                                Nivel: <small><?=$dtp['preg_level'];?></small>
                                <form action="" method="post" id="editpreguntasj">
                                    <input type="hidden" name="preg_id" id="preg_id" value="<?= $dtp['preg_id'];?>"/>
                                    <input type="hidden" value="edit" name="ope" id="ope" />
                                        <button type="submit" class="editpregf"><i class="fa-duotone fa-pen-to-square opctabla" id="actuli" title="Editar"></i></button>
                                </form>
                                <form action="" method="post" id="editpreguntasj">
                                    <input type="hidden" name="preg_id" id="preg_id" value="<?= $dtp['preg_id'];?>"/>
                                    <?php if ($dtp['preg_act'] == 1) { ?>
                                        <input type="hidden" name="preg_act" id="preg_act" value="2"/>
                                        <button type="submit" class="editpregf"><i class="fa-duotone fa-square-check opctabla" id="activ"></i></button>
                                    <?php } else { ?>
                                        <input type="hidden" name="preg_act" id="preg_act" value="1"/>
                                        <button type="submit" class="editpregf"><i class="fa-duotone fa-square-xmark opctabla" style="color:#f00;"></i></button>
                                    <?php } ?>
                                </form>
                            </td>
                        <?php
                            }
                        }
                        ?>
                        </tr>
                        </tbody>
                </table>
                <br>
        </section>