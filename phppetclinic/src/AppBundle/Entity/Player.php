<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Player
 *
 * @author 631410032
 */
class Player {
    
    protected $id;
    
    protected $nome;
    
    protected $email;
    
    protected $nivel;
    
    public function __toString()
    {
        return strval($this->getNome());
        
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getNivel()
    {
        return $this->nivel;
    }
    
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }
    //put your code here
}
