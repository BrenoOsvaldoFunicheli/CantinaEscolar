<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BSForms
 *
 * @author osval
 */
include 'Forms.php';
class BSForms extends Forms{
    //put your code here
    public static function createInput($inputName='inputName',$name='input', $divClass='',$inputClass='',$type='text'){
        echo' <div class="'.$divClass.'">
                            <label for="'.$inputName.'">'.$name.'</label>
                            <input type="'.$type.'" class="'.$inputClass.'" name="'.$inputName  .'">
                        </div>';
    }
    //put your code here
    public static function createInputWithId($id, $inputName = 'inputName', $name = 'input', $divClass = '', $inputClass = '', $type = 'text'){
        echo' <div class="'.$divClass.'">
                            <label for="'.$inputName.'">'.$name.'</label>
                            <input id="'.$id.'" type="'.$type.'" class="'.$inputClass.'" name="'.$inputName  .'">
                        </div>';
    }
    
    
    public static function createInputSubmit($name='input', $divClass='',$inputClass='',$type='text'){
        echo' <div class="'.$divClass.'">
                            <input type="'.$type.'" class="'.$inputClass.'" value="'.$name.'">
                        </div>';
    }
    
    public static function createSelect($name, $value='input',$divClass='',$inputClass='',$id=''){
        echo'<div class="'.$divClass.'">
                <label>Tipo</label>
                    <select id="'.$id.'" class="'.$inputClass.'" name="'.$name.'">
                        <option value="0">--------------</option>';
        foreach($value as $key => $array ){
           echo ' <option value="'.$key.'">'.$array.'</option>'; 
        }   
        
        echo'               </select>
            </div>';
    }
    
    
}
