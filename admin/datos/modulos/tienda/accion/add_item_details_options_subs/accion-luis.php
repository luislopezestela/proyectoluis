<?php
if($_POST['type_option']){
	$item_view = DatosAdmin::porID_opciones_type($_POST['type_option']);
	if($item_view){
		$opciones_detail = DatosAdmin::ver_opciones_detalles_list_one_name($item_view->id,$_POST['opcion_det']);
		if($opciones_detail){
			echo json_encode(array('tipo' => 0, 'message' => Luis::lang("ya_existe_el_nombre")));
		}elseif($_POST['opcion_det']==""){
			echo json_encode(array('tipo' => 2, 'message' => Luis::lang("ingresa_el_nombre")));
		}elseif($_POST['option_pr']==""){
			echo json_encode(array('tipo' => 3, 'message' => Luis::lang("ingresa_un_precio")));
		}else{
			$det = new DatosAdmin();
			$det->nombre = htmlentities($_POST['opcion_det']);
			$det->ukr = DatosAdmin::poner_guion(strip_tags(htmlentities($_POST["opcion_det"])));
			$det->precio = $_POST['option_pr'];
			$det->id_opciones_type = $item_view->id;
			$s=$det->add_opciones_detalle();
			
			$detalles_opciones = DatosAdmin::ver_detalles_opciones($item_view->id);
			if(count($detalles_opciones)==1){
			 	DatosAdmin::options_noes_principal($item_view->id);
			 	DatosAdmin::options_aser_principal($s[1]);
			 	echo json_encode(array('tipo' => 1, 'message' => Luis::lang("agregado_con_exito"), 'line' => $s[1], "active" => 1));
			 }else{
			 	echo json_encode(array('tipo' => 1, 'message' => Luis::lang("agregado_con_exito"), 'line' => $s[1], "active" => 0));
			 }
		}
	}else{
		echo json_encode(array('tipo' => 0, 'message' => Luis::lang("un_error_en_los_datos")));
	}
}else{
	echo json_encode(array('tipo' => 0, 'message' => Luis::lang("error_de_datos")));
	
}