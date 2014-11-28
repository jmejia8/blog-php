<?
if (!isset($_GET['q']) || $_GET['q']=="") {
	echo '<div class="clear"></div>';
	echo "<center><h3>Debe especificar la busqueda<h3></center>";
}else{

	$q=quitar($_GET['q']);
	$sql=mysql_query("SELECT * FROM post ORDER BY id DESC");
	$indices=array();
	$i=0;
	while ($row=mysql_fetch_array($sql)) { 
		if (strlen($row['contenido'])!=strlen(str_replace($q, "", $row['contenido']))) {
			array_push($indices, $row['id']);
			$i++;
		}
	}

	if ($i==0) {
		echo '<div class="clear"></div>';
		echo "<center><h3>Sin resultados<h3></center>";
	}else{
		$n = $i;
		$i=0;
		$post_found=$indices[$i];
		$sql=mysql_query("SELECT * FROM post  WHERE id=$post_found ORDER BY id ");
		while ($row=mysql_fetch_array($sql) and $i<$n ) {
		$i++;
		if($i!=$n){
			$post_found=$indices[$i];
		$sql=mysql_query("SELECT * FROM post  WHERE id=$post_found ORDER BY id DESC ");
		}

?>
        	<div class="feat_prod_box">
                            
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">
                        Escrito por <b><? echo $row['autor']; ?></b> el
                        <? echo $row['dia']." de ".$row['mes']." de ".$row['anio']; ?> las 
                        <? echo $row['hora']; ?>
                    </div>
                    <hr>
                    <a href=""><h2><? echo $row['titulo']; ?></h2></a>
                    <p class="details"><? echo substr($row['contenido'], 0,500)."..."; ?></p>
                    <a href="post.php?n=<? echo $row['id']; ?>" class="more">- Seguir leyendo -</a>
                    <div class="clear"></div>
                    <hr>
                    Etiquetas:
                    <?
                    $etiq = $row['etiquetas'];
                    $sql_et = mysql_query("SELECT id, nombre FROM etiquetas WHERE id='$etiq'");
                    $e = mysql_fetch_array($sql_et);
                    echo $e['nombre'];

                    ?>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>        
<?
}
?>
            <div class="clear"></div>

<?
}
}
?>

