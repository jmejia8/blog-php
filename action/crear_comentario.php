<?
require '../comunes/config.php';
if (!isset($_GET['user']) or !isset($_GET['email']) or !isset($_GET['comentario']) or !isset($_GET['post']) or !isset($_GET['capt'])) {
	echo "Error inesperado";
}elseif (strlen($_GET['user'])<5 or strlen($_GET['user'])>200) {
	echo "Error: usuario no válido";
}elseif (strlen($_GET['comentario'])<5 or strlen($_GET['comentario'])>200) {
	echo "Error: comentario no válido";
}elseif (intval($_GET['capt'])!=$_SESSION['a']+$_SESSION['b']) {
	echo "Error en la suma";
}else{
	$user = quitar($_GET['user']);
	$email = quitar($_GET['email']);
	$post = quitar($_GET['post']);
	$comentario = quitar($_GET['comentario']);
	$fecha = date("d")." de ".mes(date("m"))." de ".date("Y")." a las  ".date("h:i");
	$ip = get_ip();
 	$sql = mysql_query("
		INSERT INTO `comentarios`( `de`, `comentario`, `fecha`, `email`, `activo`, `ip`, `post`) 
		VALUES ('$user','$comentario','$fecha','$email','1','$ip','$post')
		");
 	if ($sql) {
 		echo "1";
 		$_SESSION['a'] = rand(5,20);
 		$_SESSION['b'] = rand(1,9);
 	}else{
 		echo "Error con el servidor, intente más tarde.";
 	}
 	//echo mysql_error();

}

?>