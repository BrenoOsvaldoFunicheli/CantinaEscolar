<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Helpless/Enum/EnumSystemPerson.php';

    
    
    global $header;
        if (!(isset($_SESSION))) {
            session_start();
        }
        $tipo = $_SESSION['tipo'];
        if ($tipo== EnumSystemPerson::ALUNOS) {
            include_once '../Helpless/Header/HeaderStudent.php';
            $GLOBALS['header'] = new HeaderStudent(); 
        }else if($tipo== EnumSystemPerson::FUNCIONARIOS){
            include_once '../Helpless/Header/HeaderEmplooy.php';
            $GLOBALS['header'] = new HeaderEmplooy(); 
        }else{
            header("location: ../index.php");
        }
        
        
        $header->create();
        