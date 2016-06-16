<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Palavra
 *
 * @author 631410032
 */
class Palavra {
    
    protected $palavra;
    
    protected $letras;
    
    protected $dificuldade;
    
    function getPalavra() {
        return $this->palavra;
    }

    function getLetras() {
        return $this->letras;
    }

    function getDificuldade() {
        return $this->dificuldade;
    }

    function setPalavra($palavra) {
        $this->palavra = $palavra;
    }

    function setLetras($letras) {
        $this->letras = $letras;
    }

    function setDificuldade($dificuldade) {
        $this->dificuldade = $dificuldade;
    }

        //put your code here
}
