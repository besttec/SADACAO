<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\DAO;
use Besttec\SAD\Bundle\Entity\Historicos;
use Besttec\SAD\Bundle\Entity\Usuarios;
use Besttec\SAD\Bundle\Entity\Oficios;
/**
 * Description of HistoricoDAO
 *
 * @author paulo
 */
class HistoricoDAO
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
    private function __construct($doctrine)
    {
        $this->manager = $docrine->getManager();
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Historicos $historico
     * @return boolean
     */
    public function gravarHistorico(Historicos $historico)
    {
        try {
            
            $this->manager->persist($historico);
            $this->flush();
            return true;
                        
        } catch (Exception $ex) {
            return false;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Historicos $historico
     * @return boolean
     */
    public function editarHistorico(Historicos $historico)
    {
         try {
            
            $this->manager->merge($historico);
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
    public function getHistoricos()
    {
        try {
            
            $this->manager->createQuery("SELECT h FROM BesttecSADBundle:Historicos h");
            $historicos = $this->manager->getResult();
            return $historicos;
            
        } catch (Exception $ex) {
            return null;
        }
    }
    /**
     * 
     * @param type $idHistorico
     * @return type
     */
    public function getHistorico($idHistorico)
    {
        try {
            
            $this->manager->createQuery("SELECT h FROM BesttecSADBundle:Historicos h WHERE h.idHistorico = :id")
                    ->setParameter(":id", $idHistorico);
            $historico = $this->manager->getResult();
            return $historico;
            
        } catch (Exception $ex) {
            return null;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuario
     * @return type
     */
    public function getHistoricosByUsuario(Usuarios $usuario)
    {
        try {
            
            $this->manager->createQuery("SELECT h FROM BesttecSADBundle:Historicos h WHERE h.usuariosUsuario = :usuario")
                    ->setParameter(":usuario", $usuario);
            $historicos = $this->manager->getResult();
            return $historicos;
            
        } catch (Exception $ex) {
            return null;
        }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Oficios $oficio
     * @return type
     */
    public function getHistoricosByOficio(Oficios $oficio)
    {
        try {
            
            $this->manager->createQuery("SELECT h FROM BesttecSADBundle:Historicos h WHERE h.oficiosNumOficio = :oficio")
                    ->setParameter(":oficio", $oficio);
            $historicos = $this->manager->getResult();
            return $historicos;
            
        } catch (Exception $ex) {
            return null;
        }
    }
}