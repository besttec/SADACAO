<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\RegraNegocio;
use Besttec\SAD\Bundle\DAO\OficioDAO;
use Besttec\SAD\Bundle\Entity\Oficios;
/**
 * Description of OficioRN
 *
 * @author paulo
 */
class OficioRN
{
   /**
    *
    * @var type 
    */
    private $oficioDAO;
    /**
     * 
     * @param \Besttec\SAD\Bundle\DAO\OficioDAO $oficioDAO
     */
    public function __construct(OficioDAO $oficioDAO)
    {
       $this->oficioDAO = $oficioDAO;
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficio
     */
    public function gravarOficio(Oficios $oficio)
    {
        if(true) {
           return $this->oficioDAO->gravarOficio($oficio);
        } else {
            return false;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficio
     */
    public function editarOficio(Oficios $oficio)
    {
        if(true) {
            $this->oficioDAO->editarOficio($oficio);
        } else {
            
        }
    }
    /**
     * 
     * @return Oficios || null
     */
    public function getOficios()
    {
        if(true) {
            return $this->oficioDAO->getOficios();
        } else {
            return null;
        }
    }
    /**
     * 
     * @param type $numOficio
     * @return Oficio || null
     */
    public function getOficio($numOficio)
    {
        if(true) {
            return $this->oficioDAO->getOficio($numOficio);
        } else {
            return null;
        }
    }
}
