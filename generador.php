<?php
	//obtener longitud de clave
	$longitud = isset($_GET['longitud']) && !empty($_GET['longitud']) ? intval($_GET['longitud']) : 8;

	//generador
	function generador($longitud)
	{
		//caracteres a utilizar
		$chars = "0AaBbCc1DdEe2FfGgHh3IiJj4KkLlMm5NnOo6PpQqRr7SsTt8UuVvWwXx9YyZz$";
		//inicializar la clave
		$clave = "";

		for($i=0; $i<$longitud; $i++)
		{
			//generar numero aleatorio
			$num = rand(1, strlen($chars));
			//crear contraseña
			$clave .= substr($chars, $num-1, 1);
		}
		return $clave;
	}

	echo generador($longitud);
