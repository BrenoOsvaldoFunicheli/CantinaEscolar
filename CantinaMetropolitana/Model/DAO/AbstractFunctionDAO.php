<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author osval
 */


interface AbstractFunctionDAO {
    //put your code here
    public function insert();
    public function delete();
    public function update();
    public function search();
    public function getAll();

}
