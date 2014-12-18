       <div class="header">
       		<div class="logo"></div>            
          <div id="menu">
            <ul>                                                                       
            <li class="selected"><a href="index.php">Inicio</a></li>
            <li><a href="post.php">Post</a></li>
            <li>
              <form method="get" action="buscar.php">
                <input type="text" class="input-buscar" value="<? if(isset($_GET['q'])) echo quitar($_GET['q'])?>" placeholder="Buscar en blog" name="q" >
                <button class="boton-buscar">Buscar</button>
              </form>
            </li>
            <!-- <li><a href="specials.html">specials books</a></li>
            <li><a href="myaccount.html">my accout</a></li>
            <li><a href="register.html">register</a></li>
            <li><a href="details.html">prices</a></li>
            <li><a href="contact.html">contact</a></li> -->
            </ul>
        </div>    
            
            
       </div> 