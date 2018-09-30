<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeaderMain
 *
 * @author osval
 */
include_once 'Header.php';
class HeaderMain implements Header{
    //put your code here
    
    
    public function create() {
        echo ' <div class="menu label">
            <div class="container-fluid">
                <h1>Metropolitana</h1>
            </div>
            <nav class="container-fluid nav-menu">
                <ul class="nav nav-tabs">
                    <a></a>
                </ul>
            </nav>
        </div>';
    }

}
