<?php
class clase_mysqli{
	#Variables de conexión
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	#identificación de error y texto de error
	var $Errno=0;
	var $Error="";
	#Identificación de conexión y consulta
	var $Conexion_ID=0;
	#Constructor de la clase
	function clase_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;	
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	#Conexión al servidor de db
	function conectar($host, $user, $pass, $db){
		if($db !="")$this->BaseDatos=$db;
		if($host!="")$this->Servidor=$host;
		if($user !="")$this->Usuario=$user;
		if($pass !="")$this->Clave=$pass;
		#Conectar al servidor
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="No se pudo realizar la conexión";
			return 0;
		}
		return$this->Conexion_ID;
	}
}

?>