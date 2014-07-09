<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Besttec\SAD\Bundle\DAO\SecretariaDAO;
use Besttec\SAD\Bundle\Entity\Secretarias;
/**
 * Description of SecretariaRN
 *
 * @author paulo
 */
class SecretariaRN
{
   /**
     *
     * @var type 
     */
    private $secretariaDAO;
    /**
     * 
     * @param \Besttec\SAD\Bundle\DAO\SecretariaDAO $secretariaDAO
     */
    public function __construct(SecretariaDAO $secretariaDAO)
    {
        $this->secretariaDAO = $secretariaDAO;        
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Secretarias $secretaria
     */
    public function gravarSecretaria(Secretarias $secretaria)
    {
        if(true) {
            $this->secretariaDAO->gravarSecretaria($secretaria);
        } else {
            
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Secretarias $secretaria
     */
    public function editarSecretaria(Secretarias $secretaria)
    {
        if(true) {
            $this->secretariaDAO->editarSecretaria($secretaria);
        } else {
            
        }
    }
    /**
     * 
     * @return type
     */
    public function getSecretarias()
    {
        if(true) {
            return $this->secretariaDAO->getSecretarias();
        } else {
            return null;
        }
    }
    /**
     * 
     * @return type
     */
    public function getSecretaria($idSecretaria)
    {
        if(true) {
            return $this->secretariaDAO->getSecretaria($idSecretaria);
        } else {
            return null;
        }
    }    
}
