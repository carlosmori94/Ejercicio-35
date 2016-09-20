<?php
/**
* 
*/
class Funciones  
	{
		
		public static function Leer($ruta)
		{
			$archivo = fopen( $ruta , "r");
			$miArray = array();
			while(!feof($archivo))
			{
				$Linea = fgets($archivo);
				$miArray[] = $Linea;
			}
			fclose($archivo);
			return $miArray;
		}
		public static function Guardar($contenido)
		{
			$archivoCopia = fopen("Copia.txt", "a");
			
			foreach ($contenido as  $value) {
				fwrite($archivoCopia, $value);		
			}
			fclose($archivoCopia);		
			
			
			
		}
	}
?>