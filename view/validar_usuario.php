<?php  

	if ( isset ($_SESSION[ 'usuario' ])) {
		if ($_SESSION['usuario']=='recepcao') {
			include_once 'index.php';
		}
		if(isset($_SESSION['usuario'])){
			if ($_SESSION['usuario']=='gerente') {
				include_once 'index_gerenc.php';
			}
		}
	}
?>