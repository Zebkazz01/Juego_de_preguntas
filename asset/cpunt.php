<?php
include("../model/mpun.php");
 $mpun = new Mpun();

$punt_id = isset($_REQUEST['punt_id']) ? $_REQUEST['punt_id']:NULL;
$punt_nom = isset($_POST['punt_nom']) ? $_POST['punt_nom']:NULL;
$punt_tot = isset($_POST['punt_tot']) ? $_POST['punt_tot']:NULL;
$punt_lev = isset($_POST['punt_lev']) ? $_POST['punt_lev']:NULL;
$punt_ayu = isset($_POST['punt_ayu']) ? $_POST['punt_ayu']:NULL;

$constab = isset($_POST['constab']) ? $_POST['constab']:0;
$ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;


$mpun->setpunt_nom($_SESSION['participante']);
$mpun->setpunt_lev($punt_lev);
$dats = $mpun->getAllt();
$confirm=null;

$di = $mpun->getOne();
$d = $di->fetch();
$nom = isset($d['punt_nom']) ? $d['punt_nom']:NULL;
$lev = isset($d['punt_lev']) ? $d['punt_lev']:NULL;

     if($ope=="save"){
               if($nom!==$punt_nom ){
                    $confirm=1;
                    // echo "<script>alert('entra al registrar')</script>";
               }else if($lev==$punt_lev && $d['punt_tot']<$punt_tot ){
                    $confirm=2;
                    // echo "<script>alert('entra al actualizar save')</script>";
               }
     }
     $GLOBALS['termip']=1;
if($ope=="edit"){
     if($GLOBALS['termip']==1 && $lev==$punt_lev && $d['punt_tot']<$punt_tot ){
          $confirm=2;
          $GLOBALS['termip']=2;
          // echo "<script>alert('entra al actualizarp1')</script>";
     }else if($GLOBALS['termip']==2){
          $confirm=2;
          // echo "<script>alert('entra al actualizarp3')</script>";
          $GLOBALS['termip']=1;
     }else if($lev!==$punt_lev && $nom!==$punt_nom){
          $confirm=1;
     }
     // else{
     //      $confirm=1;
     //      echo "<script>alert('entra al actualizarp2')</script>";
     //      $GLOBALS['termip']=1;
     // }

}

if($confirm==1){
     $mpun->setpunt_nom($punt_nom);
     $mpun->setpunt_tot($punt_tot);
     $mpun->setpunt_lev($punt_lev);
     $mpun->setpunt_ayu($punt_ayu);
     $mpun->save();
}
if($confirm==2){
     $mpun->setpunt_tot($punt_tot);
     $mpun->setpunt_lev($punt_lev);
     $mpun->setpunt_ayu($punt_ayu);
     $punt_nom = $_SESSION['participante'];
     $mpun->edit();
}

$datAll =  $mpun->getAll($constab);

include("../model/mpreg.php");
$mpreg = new mpreg();
$datAllpre = $mpreg->getAll();


 
