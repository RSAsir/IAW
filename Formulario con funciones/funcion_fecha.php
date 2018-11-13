<?

	function comprobar_fecha($fecha) {
		$fecha1=explode("/",$fecha);
		if(count($fecha1)==3)
		return checkdate($fecha1[1],$fecha1[0],$fecha1[2]);
		else return false;
	}

?>