<?php
include("../model/mpreg.php");
 $mpreg = new mpreg();


$preg_id = isset($_REQUEST['preg_id']) ? $_REQUEST['preg_id']:NULL;
$preg_text = isset($_POST['preg_text']) ? $_POST['preg_text']:NULL;
$preg_ayu = isset($_POST['preg_ayu']) ? $_POST['preg_ayu']:NULL;
$preg_resp = isset($_POST['preg_resp']) ? $_POST['preg_resp']:NULL;
$preg_dist = isset($_POST['preg_dist']) ? $_POST['preg_dist']:NULL;
$preg_level = isset($_POST['preg_level']) ? $_POST['preg_level']:NULL;
$preg_act = isset($_REQUEST['preg_act']) ? $_REQUEST['preg_act']:NULL;

$ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

// echo "<br>" .$preg_id."-".$ope;

$mpreg->setpreg_id($preg_id);
if($ope=="save"){
    $mpreg->setpreg_text($preg_text);
    $mpreg->setpreg_ayu($preg_ayu);
    $mpreg->setpreg_resp($preg_resp);
    $mpreg->setpreg_dist($preg_dist);
    $mpreg->setpreg_level($preg_level);
    $mpreg->setpreg_act(isset($preg_act) ? $preg_act:$vali[0]["preg_act"]);
    if(!$preg_id){
        $mpreg->save();
    }else{
        $mpreg->edit();
        // echo "<script>alert('Llego')</script>";
    }
}
$vali = NULL;

if($ope=="edit" and $preg_id){
    $vali = $mpreg->getOne();
}  
if($preg_act && $preg_id){
	$mpreg->setpreg_act($preg_act);
	$mpreg->ediAct();
}

$datAll = $mpreg->getAll();


