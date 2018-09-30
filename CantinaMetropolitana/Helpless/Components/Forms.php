<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Forms
 *
 * @author osval
 */
class Forms{
    //put your code here
        
    public static function createInput($inputName,$name, $id, $type){
        echo"<label for='$id'>$inputName</label>"
                . "<input type='$type' name='$name' id='$id'>";
    }

    public static function createInputWithClass($inputName,$name, $class, $type){
        echo"<label for='$id'>$inputName</label>"
                . "<input type='$type' name='$name' class='$class'>";
    }
    
    public static function createInputLength($inputName,$name, $id, $type, $max, $min){
        echo"<label for='$id'>$inputName</label>"
                . "<input type='$type' name='$name' id='$id' min='$min' max='$max'>";
    }
    
    public static function createMultipleInput($inputName,$name, $id, $type){
        $count = count($inputName);
        for ($i = 0; $i< $count;$i++){
            echo"<label for='$id[$i]'>$inputName[$i]</label>"
                    . "<input type='$type[$i]' name='$name[$i]' id='$id[$i]'>";
        }
    }
    
    public static function createMultipleInputWithPlace($inputName,$name, $id, $type,$placeholder){
        $count = count($inputName);
        for ($i = 0; $i< $count;$i++){
            echo"<label for='$id[$i]'>$inputName[$i]</label>"
                    . "<input type='$type[$i]' name='$name[$i]' id='$id[$i]' placeholder='$placeholder[$i]'>";
        }
    }
    
    public static function createInputWhitePattern($inputName,$name, $id, $pattern){
        echo"<label for='$id'>$inputName</label>"
                . "<input type='text' name='$name' id='$id' pattern='$pattern'>";
    }

}
