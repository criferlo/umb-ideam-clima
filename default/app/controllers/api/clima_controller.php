<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clima_controller
 *
 * @author Cristhian
 */
View::template(null);
Load::models("clima");
class ClimaController extends AppController {
    //put your code here
    function obtenerClima($ciudad){
        $cli = new Clima();
        $cli->find_first("ciudad='".$ciudad."'");
        $arr = array("ciudad"=>$cli->ciudad,"temperatura"=>$cli->temperatura);
        $this->respuesta = json_encode($arr);
    }
}
