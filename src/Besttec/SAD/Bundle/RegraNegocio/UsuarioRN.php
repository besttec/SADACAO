<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Besttec\SAD\Bundle\RegraNegocio;
use Besttec\SAD\Bundle\DAO\UsuarioDAO;
use Besttec\SAD\Bundle\Entity\Usuarios;
/**
 * Description of UsuarioRN
 *
 * @author paulo
 */
class UsuarioRN 
{   
    /**
     *
     * @var type 
     */
    private $usuarioDAO;
    
    /**
     * 
     * @param \Besttec\SAD\Bundle\DAO\UsuarioDAO $usuarioDAO
     */
    public function __construct(UsuarioDAO $usuarioDAO)
    {
        $this->usuarioDAO = $usuarioDAO;        
    }
    /**
     * 
     * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuario
     */
    public function gravarUsuario(Usuarios $usuario)
    {
        if(true) {
            $this->usuarioDAO->gravarUsuario($usuario);
        } else {
            
        }
    }
   /**
    * 
    * @param \Besttec\SAD\Bundle\Entity\Usuarios $usuario
    */
    public function editarUsuario(Usuarios $usuario)
    {
        if(true) {
            $this->usuarioDAO->editarUsuario($usuario);
        } else {
            
        }
    }
    /**
     * 
     * @return Usuarios
     */
    public function getUsuarios() 
    {
        if(true) {
            return $this->usuarioDAO->getUsuarios();
        } else {
            return null;
        }
    }
    /**
     * 
     * @return Usuario
     */
    public function getUsuario($idUsuario)
    {
        if(true) {
            return $this->usuarioDAO->getUsuario($idUsuario);
        } else {
            return null;
        }
    }
}