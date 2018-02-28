 <?php 

 	class cubitshell_modelos extends Modelo_conexion
 	{


 		public function RegistroUsuarios($usuario)
 		{
 			$globalUsuario="INSERT INTO usuarioGlobal(usuario, pais) VALUES ('".$usuario['correo']."','".$usuario['pais']."')";
 			$queryuser = "INSERT INTO usuarios(correo
	 			, contrasena, nombre, apellidos, pais, direccion, telefono) VALUES ('".$usuario['correo']."','".
	 												password_hash( $usuario['contrasena'],PASSWORD_DEFAULT)."','".
	 												mb_escape($usuario['nombre'])."','".
	 												mb_escape($usuario['apellidos'])."','".
	 												mb_escape($usuario['pais'])."','".
	 												mb_escape($usuario['direccion'])."','".
	 												mb_escape($usuario['telefono'])."');";

 			$query = "SELECT ipPais ,ipPaisRespaldo FROM pais WHERE clave ='".$usuario['pais']."';";
 			if ($consulta = $this->conexion->query($query)) {
 				$ips = $consulta->fetch_array(MYSQLI_ASSOC);
 			}

 			$nuevoconexion =  new mysqli($ips['ipPais'],'remoto',BD_PASS ,BD_NOMBRE);

            if (!$nuevoconexion->connect_error) {
            	// PRIMERA CONEXION EXITOSA
 				// si es superusuario
 				if ($usuario['tipoUsuario']) {
 					$registro = $nuevoconexion->query($queryuser);
 					var_dump($registro);
	 				$_SESSION['recienRegistrado']= TRUE;
 				}else{
					$registro = $nuevoconexion->query($queryuser);
					var_dump($registro);
	 				$usuario['id']= $nuevoconexion->insert_id;
	 				unset($usuario['tipoUsuario']);
	 				$nuevoconexion->close();
	 				$_SESSION['usuario'] = $usuario;
	 				$_SESSION['recienRegistrado'] = TRUE;
 				}
 			}else{
	 			$replica =  new mysqli($ips['ipPaisRespaldo'],'remoto',BD_PASS ,BD_NOMBRE);
 			  	if ($replica->connect_error) {
		 			printf("error: %s",$this->conexion->errno);
			  		$_SESSION['falloConexion'] = true;
 			  	}else{
 			  		if ($usuario['tipoUsuario']) {
	 					$registro = $replica->query($queryuser);
		 				$_SESSION['recienRegistrado']= TRUE;
	 				}else{
		 				unset($usuario['tipoUsuario']);
						$registro = $replica->query($queryuser);
		 				$usuario['id']= $replica->insert_id;
		 				$replica->close();
		 				$_SESSION['usuario'] = $usuario;
		 				$_SESSION['recienRegistrado'] = TRUE;
	 				}
 			  	}

 			}
	 		$this->conexion->query($globalUsuario);
	 	}

 		public function ValidaUsuario($quiereIngresar)
 		{
 			
 			$codigoUsuario = "SELECT pais FROM usuarioGlobal WHERE usuario='".$quiereIngresar['correo']."';";
 			if ($consulta = $this->conexion->query($codigoUsuario)) {
 				$codigoUsuario = $consulta->fetch_array(MYSQLI_ASSOC)['pais'];
 				if ($codigoUsuario) {
 					$ipServidores = "SELECT ipPais ,ipPaisRespaldo FROM pais WHERE clave ='".$codigoUsuario."';";
	 				$ipServidores = $this->conexion->query($ipServidores)->fetch_array(MYSQLI_ASSOC);
	 				$nuevoconexion =  new mysqli($ipServidores['ipPais'],'remoto',BD_PASS ,BD_NOMBRE);
            		if (!$nuevoconexion->connect_error) {
            			$query = "SELECT id FROM usuarios WHERE correo='".$quiereIngresar['correo']."';";
            			var_dump($query);
            			if ($consulta= $nuevoconexion->query($query)) {
            				var_dump($consulta->fetch_array(MYSQLI_ASSOC));
            				$consulta = $consulta->fetch_array(MYSQLI_ASSOC);	

            				$todo = "SELECT * FROM usuarios WHERE id ='".$consulta['id']."';";
            				$consulta= $nuevoconexion->query($todo)->fetch_array(MYSQLI_ASSOC);
			 				if (password_verify($quiereIngresar['contrasena'] , $consulta['contrasena'])) {
			 					unset($consulta['contrasena']);
			 					$consulta['contrasena'] = 'contrasena';
			 					if (!(int)$consulta['tipoUsuario']) {
				 					unset($consulta['tipoUsuario']);
				 				}
				 				$_SESSION['usuario'] = $consulta;
				 				var_dump($_SESSION);
	            			}
            			}
	            		$nuevoconexion->close();
	 				
	 				}else{
	 					$replica =  new mysqli($ipServidores['ipPaisRespaldo'],'remoto',BD_PASS ,BD_NOMBRE);
		 			  	if ($replica->connect_error) {
		 			  		$_SESSION['falloConexion'] = true;
		 			  	}else{
		 			  		unset($_SESSION['falloConexion']);
		 			  		$query = "SELECT id FROM usuarios WHERE correo='".$quiereIngresar['correo']."';";
	            			if ($consulta= $replica->query($query)) {
	            				$consulta = $consulta->fetch_array(MYSQLI_ASSOC);	
	            				$todo = "SELECT * FROM usuarios WHERE id ='".$consulta['id']."';";
	            				$consulta= $replica->query($todo)->fetch_array(MYSQLI_ASSOC);
	            				$replica->close();
				 				if (password_verify($quiereIngresar['contrasena'] , $consulta['contrasena'])) {
				 					unset($consulta['contrasena']);
				 					$consulta['contrasena'] = 'contrasena';
				 					if (!(int)$consulta['tipoUsuario']) {
					 					unset($consulta['tipoUsuario']);
					 				}
					 				$_SESSION['usuario'] = $consulta;
					 				var_dump($_SESSION);
	            				}
		 			  		}
 						}
 					}
	 			}
	 		}// se crea una $_SESSION['usuario'] si se conecto con algun servidor , si fallo se crea una $_SESSION['falloConexion']
 		}

 		public function registrarProducto($producto)
 		{

 			$query= "INSERT INTO producto(nombre, precio, tipoComponentes, url,categoria) VALUES ('".$producto['nombreProducto']."','".$producto['Precio']."','".$producto['tipoComponente']."','".$producto['url']."','".$producto['componenteCatagoria']."');";
	 			if($registro = $this->conexion->query($query))
 				{

 					$producto['id'] =$this->conexion->insert_id;
 					var_dump($producto['id']);
 					foreach ($producto['carateristicas'] as $key ) {
	 					echo  $query = "INSERT INTO productoCaracteristicas(id, info) VALUES (".$producto['id'].",'".$key."');";
	 					 if (!$this->conexion->query($query))
	 					 {
				 			printf("error: %s",$this->conexion->errno);
	 					 }
 					}
 					foreach ($producto['info'] as $key ) {
	 					 $query = "INSERT INTO productoInfo(id, info) VALUES (".$producto['id'].",'".$key."');";
	 					 if (!$this->conexion->query($query))
	 					 {
				 			printf("error: %s",$this->conexion->error);
	 					 }
 					}
 					return TRUE;
 				}
 				return FALSE;
 		}

 		public function registroCatalogo($catalogoCategoria)
 		{
 			$query= "INSERT INTO catalogoComponentes( catalogo) VALUES ('".$catalogoCategoria."');";
 			 if (!$this->conexion->query($query))
			 {
	 			printf("error: %s",$this->conexion->error);
	 			return false;
			 }
			 return true;

 		}

        public function get_catalogosCategoria()
        {
        	$query = "SELECT catalogo FROM catalogoComponentes";
        	if ($consulta = $this->conexion->query($query))
			 { 
				 $consulta->fetch_array(MYSQLI_ASSOC);
				foreach ($consulta as $key ) {
					$resultado[] = $key['catalogo'];
				}
				return $resultado;
			 }
        }

          public function get_tiposComponentes()
        {
        	$query = "SELECT catalogo FROM catalogoTipoComponente";
        	if ($consulta = $this->conexion->query($query))
			 { 
				 $consulta->fetch_array(MYSQLI_ASSOC);
				foreach ($consulta as $key ) {
					$resultado[] = $key['catalogo'];
				}
				return $resultado;
			 }
        }

 		public function registroTipo($catalogoTipo)
 		{
 			$query= "INSERT INTO catalogoTipoComponente( catalogo) VALUES ('".$catalogoTipo."');";
 			 if (!$this->conexion->query($query))
			 {
	 			printf("error: %s",$this->conexion->error);
	 			return false;
			 }
			 return true;

 		}
 		public function tiendaProductos()
 		{
 			$query= "SELECT * FROM producto;";
 			if ($consulta = $this->conexion->query($query)) {
 				while ($productos = $consulta->fetch_array(MYSQLI_ASSOC))
 				{
 					$tiendaProductos[] = $productos;
				} 
				// var_dump($tiendaProductos);
				return $tiendaProductos;
 					
 			}
 		}
 		public function infoComponente($id)
 		{
 			$query= "SELECT * FROM producto where id='".$id."';";
 			if ($consulta = $this->conexion->query($query)) {
 				$productos = $consulta->fetch_array(MYSQLI_ASSOC);
 				
 					return$productos;
 			}
 		}
 		public function infoCaracteristicas($id)
 		{
 			$query= "SELECT info FROM productoCaracteristicas where id='".$id."';";
 			if ($consulta = $this->conexion->query($query)) {
 				while ($productos=$consulta->fetch_array(MYSQLI_ASSOC))
 				{

 					$carateristicas[]=$productos;
 				}
 			return $carateristicas;
 			}
 		}
 		// infoDetalles
 		public function infoDetalles($id)
 		{
 			$query= "SELECT info FROM productoInfo where id='".$id."';";
 			if ($consulta = $this->conexion->query($query)) {
 				while ($productos=$consulta->fetch_array(MYSQLI_ASSOC))
 				{

 					$carateristicas[]=$productos;
 				}
 			return $carateristicas;
 			}
 		}	

 		public function addCarrito($idComponenete,$cantidad)
 		{
 			$query = "INSERT INTO carritoCliente(idCliente, idComponenete, cantidad) VALUES ('".$_SESSION['usuario']['id']."','".$idComponenete."','".$cantidad."')";
 			if (!$this->conexion->query($query)) {
 				printf("Error: %s\n", $this->conexion->error);
 				return false;
 			}
 			return true;
 		}

 		public function getCar($idCliente)
	    {
	       $query = "SELECT idComponenete, cantidad FROM carritoCliente WHERE idCliente ='".$idCliente."'";
 			if ($consulta =$this->conexion->query($query)) {
 				while($consultaNe= $consulta->fetch_array(MYSQLI_ASSOC))
 				{
 					$tiquet[] = $consultaNe;
 				}
				return $tiquet;
 			}else{
 				printf("Error: %s\n", $this->conexion->error);
 				return false;	
 			}
 			
 			
	    }
 	}
