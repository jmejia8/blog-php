

        <div class="left_content">
            
<?
$id=intval(quitar($_GET['n']));


$sql=mysql_query("SELECT * FROM post WHERE id=$id");
$numero = mysql_num_rows($sql);
if ($numero==0) {
    echo "<center>No se ha encontrado el post.</center>";
}else{

$row=mysql_fetch_array($sql);

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
                    <p class="details"><? echo $row['contenido']; ?></p>
                    <hr>
                    Etiquetas:
                    <?
                    $etiq = $row['etiquetas'];
                    $sql_et = mysql_query("SELECT id, nombre FROM etiquetas WHERE id='$etiq'");
                    $e = mysql_fetch_array($sql_et);
                    echo $e['nombre'];

                    ?>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>      
            <div class="clear"></div>
            <!-- comentario -->
            <div class="title">
                <span class="title_icon"><img src="images/bullet1.gif" alt="" title="" />
                </span>Comentarios
            </div>
            <div class="clear"></div>

            <?
            $sql = mysql_query("SELECT * FROM comentarios WHERE post=$id");
            if (mysql_num_rows($sql)==0) {
                echo "<center>No hay comentario</center>";
            }
            while ($row=mysql_fetch_array($sql)) {
            ?>
                <div class="feat_prod_box-coment">
                    <div class="coment-de">
                        <b><? echo $row['de'] ?></b> el <a href="#"><? echo $row['fecha'] ?></a>
                    </div>
                    <div class="comentario"><? echo $row['comentario'] ?></div>
                </div>
            <?
            }
            ?>
<?
}
?>
          <div class="clear"></div>
    <?
    if ($numero!=0) {
    ?>
          <div class="feat_prod_box-coment" id="box-comentario">
            <input type="text" id="usuario" placeholder="Nombre">
            <input type="email" id="email" placeholder="Email">
            <input type="hidden" id="post" value="<? echo $id; ?>">
            <textarea id="comentario" placeholder="Comentario"></textarea>
            <label><?  echo $_SESSION['a']." + ".numero($_SESSION['b']); ?> = <input type="text" style="width:20px;" id="capt"></label><br>
            <button id="comentar" onclick="javascript:enviar_comentario();">Comentar</button>
            <span id="respuesta" style="color:#FF4545;"></span>
          </div>
          <div class="clear"></div>
    <?
    }
    ?>
        </div><!--end of left content-->