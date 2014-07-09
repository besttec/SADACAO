<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\DAO;
use \Besttec\SAD\Bundle\Entity\Oficios;
/**
 * Description of OficioDAO
 *
 * @author paulo
 */
class OficioDAO
{
    /**
     *
     * @var type 
     */
    private $manager;
    /**
     * 
     * @param type $doctrine
     */
    public function __construct($doctrine)
    {
       $this->manager = $doctrine->getManager();
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficio
     * @return boolean
     */
    public function gravarOficio(Oficios $oficio)
    {
        try {
            
            $this->manager->persist($oficio);
            $this->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficio
     * @return boolean
     */
    public function editarOficio(Oficios $oficio)
    {
        try {
            
            $this->manager->merge($oficio);
            $this->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
    }
    /**
     * 
     * @return type
     */
    public function getOficios() 
    {
        try {
            
            $this->manager->createQuery("SELECT o FROM BesttecSADBundle:Oficios o");
            $oficios = $this->manager->getResult();
            return $oficios;
            
        } catch (Exception $ex) {
            return null;
        }
    }
    /**
     * 
     * @param type $numOficio
     * @return type
     */
    public function getOficio($numOficio)
    {
        try {
            
            $this->manager->createQuery("SELECT o FROM BesttecSADBundle:Oficios o WHERE o.numOficio = :num")
                    ->setParameter(":num", $numOficio);
            $oficio = $this->manager->getResult();
            return $oficio;
            
        } catch (Exception $ex) {
            return null;
        }
    }
  
}
