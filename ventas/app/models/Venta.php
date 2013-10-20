<?php
require_once '../lib/Mysql.php';
/**
 * Esta es la clase 
 */
class Venta{
	/**
	 * Atributo de mysql private para cargar el mysql
	 */
	private $mysql;
    /*
     * Este es el constructo de del modelo HomeModel
     */
    public function __construct() {
        $this->mysql = new Mysql();
    }



 /**
     * Metodo que elimina la cabecera de la cotizacion
     */
    public function eliminarVentas($id_unico){
        //echo($id_unico);
      date_default_timezone_set('America/La_Paz');
      $fecha_actual  = date("y-m-d H:i:s");
      $datos['vent_prof_det_usr_baja'] = $_SESSION['login'];
      $datos['vent_prof_det_fech_hr_baja'] = $fecha_actual;
      $condicion = "vent_prof_det_cod_unico='".$id_unico."'";
      return $this->mysql->update('vent_prof_det', $datos, $condicion);
      //$this->mysql->update('vent_prof_cab',$datos,'vent_prof_cab_cod_unico='.$id_unico.'');
    }

    /**
     * Metodo que elimina el item de la cabecera de la venta
     */
    public function eliminarItemVentas($id_unico){
        //echo($id_unico);
      date_default_timezone_set('America/La_Paz');
      $fecha_actual  = date("y-m-d H:i:s");
      $datos['vent_prof_cab_usr_baja'] = $_SESSION['login'];
      $datos['vent_prof_cab_fech_hr_baja'] = $fecha_actual;
      $condicion = "vent_prof_cab_cod_unico='".$id_unico."'";
      return $this->mysql->update('vent_prof_cab', $datos, $condicion);
      //$this->mysql->update('vent_prof_cab',$datos,'vent_prof_cab_cod_unico='.$id_unico.'');
    }


//*************************
}
?>