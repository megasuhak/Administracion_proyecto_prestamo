<?php

class Conexion{

public static $objeto = null;
public $conn;
 
	public function getConexion(){
		if (self::$objeto == null) {
			self::$objeto = new Conexion();
		}

		return self::$objeto->conn;
	}

	public function __construct(){
		$this->conn =  mysqli_connect("localhost","root","","financiera") or die("No hay conexion");
	}

	public function ejecutar($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function verificar_email($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		$count = mysqli_num_rows($query);
		if ($count >= 1) {
			return true;
		}else{
			return false;
		}
	}

	public function consultar($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
		return $resultado;
	}

	public function una_consulta($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$filas = mysqli_fetch_array($ResultSet);
		return $filas;
	}

	public function login($user, $pass){
		$cx = self::getConexion();
		$pass = md5($pass);
		$sql = "SELECT * FROM usuarios WHERE email = '{$user}' AND clave = '{$pass}'";
		$query = mysqli_query($cx, $sql);
		$count = mysqli_num_rows($query);
		if ($count == 1) {

			$datos = mysqli_fetch_array($query);
			session_start();
			$_SESSION['id_user'] = $datos['id_user'];
			$_SESSION['nombre'] = $datos['nombre']." ".$datos['apellido'];
			$_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
			$_SESSION['email'] = $datos['email'];
			$_SESSION['telefono'] = $datos['telefono'];
			$_SESSION['cedula'] = $datos['cedula'];
			$_SESSION['direccion'] = $datos['direccion'];
			$_SESSION['role'] = $datos['role'];

			// header("Location: dentro.php");
			echo "ok";
			return true;
		}else{
			return false;
		}
	}

	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>

