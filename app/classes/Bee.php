<?php

class Bee {
    //Propiedades del framweork
    private $framework = 'Bee Framework';
    private $version = '1.0.0';
    private $uri = [];

    //La función princpal que se ejecuta al instanciar nuestra clase
    function __construct() {

    }

    /**
     *Metodo para ejecutar cada "metodo" de forma subsecuente
     *
     * @return void
     */

    private function init(){
        //Todos los metodos que se quieren ejecutar consecutivamente

    }

    /**
     *Metodo para iniciar sesión en el sistema
     *
     * @return void
     */
    private function init_session(){

        if(!session_start()){
            session_start();
        }
        return;
    }

    /**
     *Metodo para cargar la configuración del sistema
     *
     * @return void
     */

    private function init_load_config(){
        $file = 'bee_config.php';
        if(!is_file('app/config/'.$file)){
            die(sprintf('El archivo %s no se encuentra, es requerido para que %s funcione.',$file,$this->framework));
        }

        //Cargando el archivo de configuración
        require_once("app/config/".$file);

        return;
    }
}