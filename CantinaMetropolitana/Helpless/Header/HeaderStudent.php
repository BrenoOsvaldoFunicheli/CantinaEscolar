<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeaderStudent
 *
 * @author osval
 */
include_once 'Header.php';

class HeaderStudent implements Header {

    //put your code here
    public function create() {

//        echo ' <div class="menu agroup">
//            <div class="container-fluid container-fluid col-lg-10">
//                <h1>Metropolitana</h1>
//            </div>
//            <div class="container-fluid col-lg-1">
//                <a href="../index.php" class="btn btn-dark btn-lg" role="button" aria-pressed="true">Sair</a>
//            </div>
//            <nav class="container-fluid nav-menu">
//                <ul class="nav nav-tabs">
//                    <li class="col-3"><a href="">Relatório</a></li>
//                    <li class="col-3"><a href="">Sobre</a></li>
//                </ul>
//            </nav>
//        </div>';
         echo'
            <div class="agroup">
            <div class="label"><h1>Metropolitana</h1> </div>
                <ul class="nav nav-pills">
                    <li class="nav-item col-sm-12 col-lg-3">
                        <a class="nav-link " href="">Relatório</a>
                    </li>
                    <li class="nav-itemcol-sm-12 col-lg-3">
                        <a class="nav-link disabled" href="../index.php">Sair</a>
                    </li>
                </ul>
            </div>
';      
    }

}
