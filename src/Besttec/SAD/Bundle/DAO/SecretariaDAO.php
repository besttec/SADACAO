<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\DAO;
use Besttec\SAD\Bundle\Entity\Secretarias;
/**
 * Description of SecretariaDAO
 *
 * @author paulo
 */
class SecretariaDAO
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
     * @param \Besttec\SAD\Bundle\Entity\Secretarias $secretaria
     * @return boolean
     */
    public function gravarSecretaria(Secretarias $secretaria)
    {
        try {
            
            $this->manager->persist($secretaria);
            $this->manager->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Secretarias $secretaria
     * @return boolean
     */
    public function editarSecretaria(Secretarias $secretaria)
    {
        try {
            
            $this->manager->merge($secretaria);
            $this->manager->flush();
            return true;
            
        } catch (Exception $ex) {
            return false;
        }
    }
    /**
     * 
     * @return type
     */
    public function getSecretarias()
    {
        try {
            
            $this->manager->createQuery("SELECT s FROM BesttecSADBundle:Secretarias s");
            $secretarias = $this->manager->getResult();
            return $secretarias;
            
        } catch (Exception $ex) {
            return null;
        }
    }
    /**
     * 
     * @param type $idSecretaria
     * @return type
     */
    public function getSecretaria($idSecretaria)
    {
        try {
            
            $this->manager->createQuery("SELECT s FROM BesttecSADBundle:Secretarias s WHERE s.idSecretaria = :id")
                    ->setParameter(":id", $idSecretaria);
            $secretaria = $this->manager->getResult();
            return $secretaria;
            
        } catch (Exception $ex) {
            return null;
        }
    }
}
