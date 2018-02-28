  <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="responsive-menu">
  <div class="top-bar-left">
    <div class="grid-container fliud">
      <div class="grid-x grid-margin-x">
        <div class="medium-3 large-3 cell">
          <a href="<?php echo URL.$this->idioma; ?>/inicio"><img id="clogo" src="<?php echo URL; ?>/img/clogo.png" alt="CubitShell Logo"></a>
        </div>
        <div class="medium-9 large-9 cell">
          <ul class="dropdown menu  align-center  menu-margen" data-dropdown-menu>
            <li>
              <a href="<?php echo URL.$this->idioma; ?>/project"><?php echo $this->contenido_idioma['menu']['links1']['link1']; ?></a>
                <ul class="menu vertical submenu-cubit" id="submenu-cubit">
                  <li><a href="<?php echo URL.$this->idioma; ?>/project/soft"><?php echo $this->contenido_idioma['menu']['links1']['sublink1']; ?></a></li>
                  <li><a href="<?php echo URL.$this->idioma; ?>/project/desing"><?php echo $this->contenido_idioma['menu']['links1']['sublink2']; ?></a></li>
                </ul>
            </li>
            <li><a href="<?php echo URL.$this->idioma; ?>/about"><?php echo $this->contenido_idioma['menu']['link2']; ?></a></li>
            <li><a href=""><?php echo $this->contenido_idioma['menu']['link3']; ?></a></li>
            <li><a href="<?php echo URL.$this->idioma; ?>/tienda"><?php echo $this->contenido_idioma['menu']['link4']; ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="top-bar-right">
    <div class="grid-x grid-margin-x">
      <ul class="menu small-4 cell">
        <li> 
          <form method="POST" action="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'idioma'; ?>" id="formularioIdioma" >
            <label style="color:white"><?php echo $this->contenido_idioma['menu']['labelIdioma']; ?>
            <select name="idioma" id="idiomaSelect">
              <option value="<?php echo $this->idioma; ?>"><?php echo $this->idioma; ?></option>

              <?php
                unset( $this->contenido_idioma['menu']['botonIdioma'][$this->idioma]);
                foreach ($this->contenido_idioma['menu']['botonIdioma'] as $key) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                } 
              ?>
            </select>
            
            <input type="hidden" value="<?php if(isset($_GET['url'])){echo $_GET['url'];}else{ echo 'EN/index';} ?>" name="seccion">
            </label>
          </form>
        </li>
      </ul>
      <?php if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])): ?>
          <div class=" small-4 cell padding-top-1">
           <a href="" class="button"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart </a>
        </div>
        <div class=" small-4 cell padding-top-1">
          <ul class="dropdown menu" data-dropdown-menu>
            <li>
              <a class="button warning usuarioBoton">  <i class="fa fa-user-circle-o" aria-hidden="true"></i>Usuario</a>
              <ul class="menu menuUsuario">
                <li><a href="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'Usuario'; ?>">Mi Cuenta</a></li>
                <li><a href="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'login/cerrarSession'; ?>">Cerrar Sesion</a></li>
                <?php if (isset($_SESSION['usuario']['tipoUsuario'])): ?>
                <li><a href="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'login/registro'; ?>"> Registrar Usuario  </a></li>
                <li><a href="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'producto/control'; ?>"> Control Producto  </a></li>
                <?php endif ?>     
              </ul>
            </li>
          </ul>
        </div>


      <?php else: ?> 
        <div class=" small-4 cell padding-top-1">
            <a href="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR.'login/registro'; ?>" class="button warning"> <?php echo $this->contenido_idioma['menu']['registrate']; ?> </a>
        </div>
        <div class=" small-4 cell padding-top-1">
            <button type = "button" class = "button" data-toggle = "offCanvas" >  <?php echo $this->contenido_idioma['menu']['botonAcceder']; ?>  </button>
        </div>
      <?php endif ?>
      
    </div>
  </div>
</div>

 <?php 
  if(isset($_SESSION['recienRegistrado']) && $_SESSION['recienRegistrado'] )
  {
   
     if(isset($_SESSION['usuario']['tipoUsuario'])){
         echo '<div class="callout success">
              <h4 class="text-center"> Super Usario Registro Un USUARIO! </h4>
            </div>';
    }else{
       echo '<div class="callout success">
            <h4 class="text-center"> Su registro fue un Exito! </h4>
            <p>Difrute de promociones y grandes Beneficios de nuestras Tiendas Y Sucursales en todo el Mundo</p>
          </div>';
    }
   
  }
  unset($_SESSION['recienRegistrado']);

?>
