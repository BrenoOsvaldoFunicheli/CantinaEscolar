<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeaderValidatorController
 *
 * @author osval
 */
include_once '../Helpless/Enum/EnumSystemPerson.php';
include_once '../Helpless/Header/HeaderStudent.php';
include_once '../Helpless/Header/HeaderEmplooy.php';

class HeaderValidatorController {
    //put your code here
   private $tipo;
   
   public function __construct($tipo) {
       $this->tipo = $tipo;
   }

   public function getTipo() {
       return $this->tipo;
   }

   public function setTipo($tipo) {
       $this->tipo = $tipo;
   }

   public static function validar($tipo){
       session_start();
       if ($tipo == $_SESSION['tipo']) {
           include_once 'HeaderController.php';
       }
   }
   
   
}
