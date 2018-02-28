<div class="grind-container fliud">
	<div class="grid-x grid-margin-x" id="inicio">

		<div class="cell" id="bg-sombra">
			<div class="grid-x">
				<div class="cell">
					<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
					  	<div class="orbit-wrapper">
					    	<div class="orbit-controls">
					      		<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					      		<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
					    	</div>
						    <ul class="orbit-container" id="diapos">
							      <li class="is-active orbit-slide">
							     	<div>

							     		<h3 class="cabeceras-presentacion text-center"><i class="fa fa-terminal" aria-hidden="true"></i>Custom Software Development Company</h3>

											<h5 class="subtituloIndex text-center">Turning Your Great Ideas Into Successful Web Solutions <i class="fa fa-area-chart" aria-hidden="true"></i></h5>
											<div class="grid-x grid-margin-x">
												<div class="medium-6 cell">
													<button class="button warning expanded"> <i class="fa fa-user-plus" aria-hidden="true"></i>  More Info</button> 
												</div>
												<div class="medium-6 cell">
													<button class="button success expanded">  <i class="fa fa-info" aria-hidden="true"></i>  Rate  </button>
												</div>
											</div>
							     	</div>
							    </li> 
						    	<li class="orbit-slide">
						    		<div class="">
							    		<h3 class="cabeceras-presentacion text-center"> <i class="fa fa-microchip" aria-hidden="true"></i> Mechatronic Components</h3>
									    <p class=" subtituloIndex text-center">The Electronics and Mechatronics Specialist with Superior Solutions <i class="fa fa-code-fork" aria-hidden="true"></i></p>
									    <div class="grid-x grid-margin-x">
											<div class="text-center cell">
												<button class="button mybutonTienda">  <i class="fa fa-cart-plus" aria-hidden="true"></i>  Go Store !  </button>
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
			<h3 class="separator-center"> Diseñamos páginas web exitosas, con diseño de última generación.</h3>
			<h6 class="text-center">Nos especializamos en el diseño y posicionamiento web, desarrollo de tiendas virtuales, desarrollo, optimización y hospedaje de WordPress en México. 
			</h6>
		</div>
		<div class="cell">
			<div class="grid-x grid-margin-x">

				<div class="medium-4 cell padding-1 callout">
					
				<p><span class="iconServ"><i class="fa fa-cart-plus" aria-hidden="true"></i></span> <span class="tituloServ">Tiendas virtuales</span> </p>

					<p class="cuerpoServ">Venda sus productos por internet. Una tienda virtual le ayudará a incrementar sus ventas, nosotros desarrollamos su tienda virtual y usted se dedica a vender.</p>

				</div>
				<div class="medium-4 cell padding-1 callout">

				<p><span class="iconServ"><i class="fa fa-line-chart" aria-hidden="true"></i> </span> <span class="tituloServ">Posicionamiento web</span></p>

					<p class="cuerpoServ">Con un posicionamiento en buscadores su sitio aparece cuando y donde sus cliente potenciales lo están buscando, mejorando sus ventas.</p>

				</div>
				<div class="medium-4 cell padding-1 callout">
					
				<p><span class="iconServ"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="tituloServ">Paquetes de diseño web</span></p>

					<p class="cuerpoServ">Nuestro equipo de diseñadores web tiene una vasta experiencia en diseño web. Contamos con paquetes de diseño de páginas web a su medida.</p>

				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="grid-x " style="background: #e3e3e3;background: #e3e3e3;">
		<div class="cell">
			<div class="grid-x grid-margin-x">
				
			</div>
		</div>
		<div class="cell margin-top-2">
			<h3 class="separator-center " style="color:white;"> <i class="fa fa-microchip" aria-hidden="true"></i> Mechatronic Components</h3>
		</div>
		<div class="cell">
			<div class="grid-x grid-margin-x" >
				
			
				<?php 
/*
					while ($row = $datosCompo->fetch_array(MYSQLI_ASSOC)) {

						echo   '<div class="medium-3 cell  padding-top-0">
								<div class="radius bordered shadow card" id="cartasComp">
								  <img class="padding-1 muestraImagen" src="'.$row['imagen'].'">
								  <div class="card-divider">
								    '.$row['nombre'].'
								  </div>
								  <div class="card-section">
								    <div class="grid-x grid-margin-x">
								    	<div class="cell callout success">
											<p class="text-right margin-bottom-0 "><small><i>desde :</i></small></p>
											<p class="h4 text-right"><i class="fa fa-usd" aria-hidden="true"></i>'.$row['precioPublico'].'
											</p>
								    	</div>
								    	<hr>
										<div class="large-6 cell">
											<button class="button warning expanded"> <i class="fa fa-info" aria-hidden="true"></i> Info</button> 
										</div>
										<div class="large-6 cell">
											<button class="button success">  <i class="fa fa-cart-plus" aria-hidden="true"></i>  buy  </button>
										</div>
									</div>
								  </div>
								</div>
							</div>';/ *.	

						 $row['id'] . ' ' . . ' ' .$row['infoid']. ' ' .$row['idCaract']. ' ' .. ' ' .$row['precioPublico']. ' ' .$row['precioTienda'] .'<br>' ;*	
					}*/

					?>
						</div>
					</div>
					<div class="cell" id="componentes-bg">
						<div class="grid-x grid-margin-x" id="componente-bg-transparent">
<?php
					$dir          = 'img/componentes/index';
					$ImagesA = Get_ImagesToFolder($dir);

					foreach ($ImagesA as $key) {
					$nombreImagen = trim($key,'.png');
					$arr = str_split($nombreImagen);
						
					echo '  <div class="medium-3 cell">
								<div class="callout margin-1">
									<div class="media-object">
									  <div class="media-object-section">
									    <div class="thumbnail">
									       <img src="'.URL.'img/componentes/index/'.$key.'" alt="">
									    </div>
									  </div>
									  <div class="media-object-section">
									  ';
									  echo '<h5>';
									  	for ($i=0; $i <count($arr) ; $i++) { 
											if( ctype_upper($arr[$i])){
												echo " " .$arr[$i];
											}else{
												echo $arr[$i];

											}
										}

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

