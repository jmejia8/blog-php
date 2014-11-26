

       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Todos lo post</div>
<?
$sql=mysql_query("SELECT * FROM post ORDER BY id DESC");
$n = mysql_num_rows($sql);
if (isset($_GET['pag'])) {
    $pag = intval(quitar($_GET['pag']))-1;
}else{
    $pag = 0;
}
$num_post =2;
$show = $pag*$num_post;
$sql=mysql_query("SELECT * FROM post ORDER BY id DESC LIMIT $show, $num_post ");
while ($row=mysql_fetch_array($sql)) {

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
            <div class="pagination">
                <ul>
                    <?
                    if ($pag!=0) {
                        $x=$pag;
                       echo " <li><a href=\"index.php?pag=$x\">Anterior</a></li>";
                    }else{
                       echo " <li>Anterior</li>";
                    }
                    for ($i=1; $i < ($n/$num_post)+1; $i++) { 
                        if ($pag==$i-1) {
                            echo " <li class=\"pagination-activo\">$i</li>";
                        }else{
                            echo " <li><a href=\"index.php?pag=$i\">$i</a></li>";
                        }
                    }
                    if ($pag!=$i-2) {
                        $x=$pag+2;
                        echo " <li><a href=\"index.php?pag=$x\">Siguiente</a></li>";
                    }else{    
                        echo " <li>Siguiente</li>";
                    }
                    ?>
                </ul>
            </div>
          <div class="clear"></div>
        </div><!--end of left content-->