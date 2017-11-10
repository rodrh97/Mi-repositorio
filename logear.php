<?php
	final class Login extends Conexion{
		function logear($usuario,$contra){
			$sql="SELECT * FROM login WHERE usuario=? AND contra=md5(?)";
			$sentencia_select=$this->obj_con->prepare($sql);
			$sentencia_select->bindParam(1,$usuario);
			$sentencia_select->bindParam(2,$contra);
			$sentencia_select->execute();
			$conteo=$sentencia_select->rowCount();
			if($conteo>0){
				return true;
			}else{
				return false;
			}
		}
	}
?>