<?php
class Mpreg{
//Atributos
	private $preg_id;
    private $preg_text;
    private $preg_ayu;
    private $preg_resp;
	private $preg_dist;
    private $preg_level;
	private $preg_act;

// Métodos Get devuelven datos
	function getpreg_id(){
		return $this-> preg_id;
	}
    function getpreg_text(){
		return $this->preg_text;
	}
    function getpreg_ayu(){
		return $this->preg_ayu;
	}
    function getpreg_resp(){
		return $this->preg_resp;
	}
	function getpreg_dist(){
		return $this->preg_dist;
	}
    function getpreg_level(){
		return $this->preg_level;
	}
	function getpreg_act(){
		return $this->preg_act;
	}


//Métodos Set guardan datos
	function setpreg_id($preg_id){
		$this-> preg_id = $preg_id;
	}
    function setpreg_text($preg_text){
		$this-> preg_text = $preg_text;
	}
    function setpreg_ayu($preg_ayu){
		$this-> preg_ayu = $preg_ayu;
	}
    function setpreg_resp($preg_resp){
		$this-> preg_resp = $preg_resp;
	}
	function setpreg_dist($preg_dist){
		$this-> preg_dist = $preg_dist;
	}
    function setpreg_level($preg_level){
		$this-> preg_level = $preg_level;
	}
	function setpreg_act($preg_act){
		$this-> preg_act = $preg_act;
	}
	
	function getAll(){
		$sql = "SELECT preg_id, preg_text, preg_ayu, preg_resp, preg_dist, preg_level, preg_act  FROM preguntas WHERE 1" ;
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}
    function getOne(){
		$sql = "SELECT preg_id, preg_text, preg_ayu, preg_resp, preg_dist, preg_level, preg_act  FROM preguntas WHERE preg_id=:preg_id";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$preg_id= $this->getpreg_id ();
		$result->bindParam(':preg_id',$preg_id);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}

    function save(){
		$sql = "INSERT INTO preguntas( preg_text, preg_ayu, preg_resp, preg_dist, preg_level, preg_act) VALUES (:preg_text, :preg_ayu, :preg_resp, :preg_dist, :preg_level, :preg_act)";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$preg_text=$this->getpreg_text();
		$result->bindParam(':preg_text',$preg_text);
        $preg_ayu=$this->getpreg_ayu();
		$result->bindParam(':preg_ayu',$preg_ayu);
        $preg_resp=$this->getpreg_resp();
		$result->bindParam(':preg_resp',$preg_resp);
        $preg_dist=$this->getpreg_dist();
		$result->bindParam(':preg_dist',$preg_dist);
		$preg_level=$this->getpreg_level();
		$result->bindParam(':preg_level',$preg_level);
		$preg_act=$this->getpreg_act();
		$result->bindParam(':preg_act',$preg_act);
        $result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
    }
	function edit(){
		$sql = "UPDATE preguntas SET preg_text=:preg_text, preg_ayu=:preg_ayu, preg_resp=:preg_resp, preg_dist=:preg_dist, preg_level=:preg_level, preg_act=:preg_act WHERE preg_id=:preg_id";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
        $preg_id = $this->getpreg_id();
		$result->bindParam(':preg_id',$preg_id);
		$preg_text = $this->getpreg_text();
		$result->bindParam(':preg_text',$preg_text);
        $preg_ayu = $this->getpreg_ayu();
		$result->bindParam(':preg_ayu',$preg_ayu);
        $preg_resp=$this->getpreg_resp();
		$result->bindParam(':preg_resp',$preg_resp);
		$preg_dist=$this->getpreg_dist();
		$result->bindParam(':preg_dist',$preg_dist);
		$preg_level=$this->getpreg_level();
		$result->bindParam(':preg_level',$preg_level);
		$preg_act=$this->getpreg_act();
		$result->bindParam(':preg_act',$preg_act);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}
	function ediAct(){
		$sql = "UPDATE preguntas SET preg_act=:preg_act WHERE preg_id=:preg_id;";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$preg_id = $this->getpreg_id();
		$result->bindParam(':preg_id',$preg_id);
		$preg_act=$this->getpreg_act();
		$result->bindParam(':preg_act',$preg_act);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}
}