<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\RegraNegocio;
use Besttec\SAD\Bundle\DAO\HistoricoDAO;
use Besttec\SAD\Bundle\Entity\Historicos;
/**
 * Description of HistoricoRN
 *
 * @author paulo
 */
class HistoricoRN
{
    /**
     *
     * @var type 
     */
    private $historicoDAO;
    /**
     * 
     * @param \Besttec\SAD\Bundle\DAO\HistoricoDAO $historicoDAO
     */
    public function __construct(HistoricoDAO $historicoDAO)
    {
        $this->historicoDAO = $historicoDAO;
    }    
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Historicos $historico
     */
    public function gravarHistorico(Historicos $historico)
    {
       if(true) {
           $this->historicoDAO->gravarHistorico($historico);
       } else {
           
       }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Historicos $historico
     */
    public function editarHistorico(Historicos $historico)
    {
       if(true) {
           $this->historicoDAO->editarHistorico($historico);
       } else {
           
       }
    }
    /**
     * 
     * @return Historicos || null
     */
    public function getHistoricos()
    {
       if(true) {
           return $this->historicoDAO->getHistoricos();
       } else {
           
       }
    }
    /**
     * 
     * @param type $idHistorico
     * @return Historicos || null
     */
    public function getHistorico($idHistorico)
    {
       if(true) {
           return $this->historicoDAO->getHistorico($idHistorico);
       } else {
           
       }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\RegraNegocio\Usuarios $usuario
     * @return Historicos || null
     */
    public function getHistoricosByUsuario(Usuarios $usuario)
    {
       if(true) {
           return $this->getHistoricosByUsuario($usuario);
       } else {
           return null;
       }
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\RegraNegocio\Oficios $oficio
     * @return Historicos || null
     */
    public function getHistoricosByOficio(Oficios $oficio)
    {
       if(true) {
           return $this->getHistosricosByOficio($oficio);
       } else {
           return null;
       }
    }
}