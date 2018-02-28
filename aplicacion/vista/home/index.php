

<div class="grind-container fliud">
	<?php if (isset($_SESSION['falloConexion'])): ?>
	<div class="grid-x">
		<div class="cell callout alert">
		<h4 class="text-center ">No se pudo Establecer conexion porfavor intente mas tarde </h4>
		<p class="text-center">Perdone el inconveniente</p>	
		</div>
	</div>	
	<?php unset($_SESSION['falloConexion']); ?>
	<?php endif ?>
	
	<div class="grid-x grid-margin-x" id="inicio">

		<div class="cell" id="bg-sombra">
			<div class="grid-x">
				<div class="cell">
					<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
					  	<div class="orbit-wrapper">
					    <!-- 	<div class="orbit-controls">
					      		<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					      		<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
					    	</div> -->
						    <ul class="orbit-container" id="diapos">
							      <li class="is-active orbit-slide">
							     	<div>

							     		<h3 class="cabeceras-presentacion text-center"><i class="fa fa-terminal" aria-hidden="true"></i><?php echo $this->contenido_idioma['Slides']['Titulo1']; ?></h3>

											<h5 class="subtituloIndex text-center"><?php echo $this->contenido_idioma['Slides']['subtitulo']; ?><i class="fa fa-area-chart" aria-hidden="true"></i></h5>
											<div class="grid-x grid-margin-x">
												<div class="medium-6 cell">
													<a href="<?php echo URL.$this->idioma; ?>/project/soft" class="button warning expanded"> <i class="fa fa-user-plus" aria-hidden="true"></i>  <?php echo $this->contenido_idioma['Slides']['botonMasinfo']; ?></a> 
												</div>
												<div class="medium-6 cell">
													<button class="button success expanded">  <i class="fa fa-info" aria-hidden="true"></i>  <?php echo $this->contenido_idioma['Slides']['botonTarifa']; ?>  </button>
												</div>
											</div>
							     	</div>
							    </li> 
						    	<li class="orbit-slide">
						    		<div class="">
							    		<h3 class="cabeceras-presentacion text-center"> <i class="fa fa-microchip" aria-hidden="true"></i><?php echo $this->contenido_idioma['Slides']['Titulo2']; ?></h3>
									    <p class=" subtituloIndex text-center"><?php echo $this->contenido_idioma['Slides']['subtitulo2']; ?><i class="fa fa-code-fork" aria-hidden="true"></i></p>
									    <div class="grid-x grid-margin-x">
											<div class="text-center cell">
												<button class="button mybutonTienda">  <i class="fa fa-cart-plus" aria-hidden="true"></i>  <?php echo $this->contenido_idioma['Slides']['botonTienda']; ?>  </button>
											</div>
										</div>
						    		</div>
								    
								</li>
							</ul>
						</div>				
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="grid-x grid-margin-x margin-top-2">
		<div class="cell">
			<h3 class="separator-center"><?php echo $this->contenido_idioma['SeccionWeb']['titulo']; ?></h3>
			<h6 class="text-center"><?php echo $this->contenido_idioma['SeccionWeb']['subtitulo']; ?></h6>
		</div>
		<div class="cell">
			<div class="grid-x grid-margin-x">

				<div class="medium-4 cell padding-1 callout">
					
				<p><span class="iconServ"><i class="fa fa-cart-plus" aria-hidden="true"></i></span> <span class="tituloServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['titulo1']; ?></span> </p>

					<p class="cuerpoServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['cuerpo1']; ?></p>

				</div>
				<div class="medium-4 cell padding-1 callout">

				<p><span class="iconServ"><i class="fa fa-line-chart" aria-hidden="true"></i> </span> <span class="tituloServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['titulo2']; ?></span></p>

					<p class="cuerpoServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['cuerpo2']; ?></p>

				</div>
				<div class="medium-4 cell padding-1 callout">
					
				<p><span class="iconServ"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="tituloServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['titulo3']; ?></span></p>

					<p class="cuerpoServ"><?php echo $this->contenido_idioma['SeccionWeb']['cartas']['cuerpo3']; ?></p>

				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="grid-x " style="background: #544e4e;">
		<div class="cell margin-top-2">
			<h3 class="separator-center " style="color:white;"> <i class="fa fa-microchip" aria-hidden="true"></i> Mechatronic Components</h3>
		</div>
		<div class="cell">
			<div class="grid-x grid-margin-x" >
			
					<div class="cell" id="componentes-bg">
						<div class="grid-x grid-margin-x padding-1" id="componente-bg-transparent">
				<?php
					$dir          = 'img/componentes/index';
					$ImagesA = Get_ImagesToFolder($dir);
					$i = 0 ;
					foreach ($ImagesA as $key) {
					$nombreImagen = trim($key,'.png');
					$arr = str_split($nombreImagen);
					
					echo '  <div class="medium-3 cell">
								<div class="callout padding-1">
									<div class="media-object">
									  	<div class="media-object-section">
									    	<div class="thumbnail">
									       	<img src="'.URL.'img/componentes/index/'.$key.'" alt="">
									    	</div>
									  	</div>
									  	<div class="media-object-section">';
   									  	echo '<h5>';
    									echo $this->contenido_idioma['SeccionComponentes']['componentes'][$i];
    									$i++;
									  	echo '</h5>
									  </div>
									</div>
								
								</div>
							</div>';
					}

					function Get_ImagesToFolder($dir){
					    $ImagesArray = [];
					    $file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];

					    if (file_exists($dir) == false) {
					        return ["Directory \'', $dir, '\' not found!"];
					    } 
					    else {
					        $dir_contents = scandir($dir);
					        foreach ($dir_contents as $file) {
					            $file_type = pathinfo($file, PATHINFO_EXTENSION);
					            if (in_array($file_type, $file_display) == true) {
					                $ImagesArray[] = $file;
					            }
					        }
					        return $ImagesArray;
					    }
					}
				?>
			</div>
		</div>
	</div>
</div>

