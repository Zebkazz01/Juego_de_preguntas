<?php
class Mpun{
//Atributos
	private $punt_id;
    private $punt_nom;
    private $punt_tot;
    private $punt_lev;
	private $punt_ayu;

// Métodos Get devuelven datos
	function getpunt_id(){
		return $this-> punt_id;
	}
    function getpunt_nom(){
		return $this->punt_nom;
	}
    function getpunt_tot(){
		return $this->punt_tot;
	}
    function getpunt_lev(){
		return $this->punt_lev;
	}
	function getpunt_ayu(){
		return $this->punt_ayu;
	}


//Métodos Set guardan datos
	function setpunt_id($punt_id){
		$this-> punt_id = $punt_id;
	}
    function setpunt_nom($punt_nom){
		$this-> punt_nom = $punt_nom;
	}
    function setpunt_tot($punt_tot){
		$this-> punt_tot = $punt_tot;
	}
    function setpunt_lev($punt_lev){
		$this-> punt_lev = $punt_lev;
	}
	function setpunt_ayu($punt_ayu){
		$this-> punt_ayu = $punt_ayu;
	}
	
	function getAll($leve){
		$sql = "SELECT  punt_id , punt_nom , punt_tot , punt_lev, punt_ayu  FROM  puntaje where punt_lev=$leve order by punt_tot desc, punt_ayu asc" ;
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}
	function getAllt(){
		$sql = "SELECT  punt_id , punt_nom , punt_tot , punt_lev, punt_ayu  FROM  puntaje where 1" ;
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
		$sql = "SELECT  punt_nom , punt_tot , punt_lev, punt_ayu  FROM  puntaje  WHERE punt_nom=:punt_nom AND punt_lev=:punt_lev";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$punt_nom= $this->getpunt_nom ();
		$result->bindParam(':punt_nom',$punt_nom);
		$punt_lev= $this->getpunt_lev();
		$result->bindParam(':punt_lev',$punt_lev);
		$result->execute();
		return $result;
	}

    function save(){
		$sql = "INSERT INTO  puntaje(punt_nom , punt_tot , punt_lev, punt_ayu) VALUES (:punt_nom , :punt_tot , :punt_lev, :punt_ayu)";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$punt_nom=$this->getpunt_nom();
		$result->bindParam(':punt_nom',$punt_nom);
        $punt_tot=$this->getpunt_tot();
		$result->bindParam(':punt_tot',$punt_tot);
        $punt_lev=$this->getpunt_lev();
		$result->bindParam(':punt_lev',$punt_lev);
		$punt_ayu=$this->getpunt_ayu();
		$result->bindParam(':punt_ayu',$punt_ayu);
        $result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
    }
	function edit(){
		$sql = "UPDATE puntaje SET punt_tot=:punt_tot, punt_lev=:punt_lev, punt_ayu=:punt_ayu  WHERE punt_nom=:punt_nom AND punt_lev=:punt_lev";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$punt_nom = $this->getpunt_nom();
		$result->bindParam(':punt_nom',$punt_nom);
		$punt_tot=$this->getpunt_tot();
		$result->bindParam(':punt_tot',$punt_tot);
        $punt_lev=$this->getpunt_lev();
		$result->bindParam(':punt_lev',$punt_lev);
		$punt_ayu=$this->getpunt_ayu();
		$result->bindParam(':punt_ayu',$punt_ayu);
		$result->execute();
		$res = NULL;
		while($f=$result->fetch())
			$res[]=$f;
		return $res;
	}
}