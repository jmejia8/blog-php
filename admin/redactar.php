<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <? require 'comunes/head.php'; ?>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <? include 'comunes/header.php';?>
        </div> <!-- End #header -->
        
		<div class="container_12">
                 
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Redactar nuevo post</span></h2>
                        
                     <div class="module-body">
                        <form action="">
                        
                            <div>
                                <span class="notification n-success">Success notification.</span>
                            </div>
                            
                            
                            <p>
                                <label>Título</label>
                                <input type="text" class="input-medium" placeholder="Otro Post genial" />
                                <span class="notification-input ni-error">Sorry, try again.</span>
                            </p>
                            
                            <p>
                                <label>Etiquetas</label>
                                <select class="input-short">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                            </p>                            
                            
                            <fieldset>
                                <label>Sé creativo</label>
                                <textarea id="wysiwyg" rows="11" cols="90" name="desc">    </textarea> 
                            </fieldset>
                            
                            <fieldset>
                                <input class="submit-gray" type="submit" value="Cancelar" />
                                <input class="submit-green" type="submit" value="Crear Post" /> 
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
                <div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
                
            <!-- Categories list -->
            <div class="grid_6">
                
                <div class="module">
                     <h2><span>Etiquetas</span></h2>
                        
                     <div class="module-body">
                         <a href="src/">images </a>[<a href="#" class="removable">Eliminar</a>]<br />
                         <a href="src/" class="removable">video</a><br />
                         <a href="src/" class="removable">audio</a><br />
                         <a href="src/" class="removable">documents</a><br />
                         <a href="src/" class="removable">apps</a><br />
                         <a href="src/" class="removable">others</a>
                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add category" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
			</div> <!-- End .grid_6 -->
            
            <!-- To-do list -->
            <div class="grid_6">
            
                <div class="module">
                     <h2><span>To-do list</span></h2>
                        
                     <div class="module-body">
                         <a href="src/" class="checkable">check articles for spelling</a><br />
                         <a href="src/" class="checkable">remove old articles</a><br />
                         <a href="src/" class="checkable">switch to a bigger plan</a><br />
                         <a href="src/" class="removable completed">write an article</a><br />
                         <a href="src/" class="removable completed">do maintanance stuff</a><br />

                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add item" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
            
            </div> <!-- End .grid_6 -->
            <div style="clear:both;"></div>
            

                

            
            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
		
           
        <!-- Footer -->
        <?
        include 'comunes/footer.php';
        ?>
        <!-- End #footer -->
	</body>
</html>