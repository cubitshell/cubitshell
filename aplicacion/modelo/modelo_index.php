 <?php 

 	class Modelo_index extends Modelo_conexion
 	{


 		public function get4componentes()
 		{
 			$query = "SELECT * FROM eleComp LIMIT 0,4;";
 			return $consulta = $this->conexion->query($query);
 		}
 	}
